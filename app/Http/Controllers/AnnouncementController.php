<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Announcement;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;

class AnnouncementController extends Controller
{
    public function show()
        {
            $userRequests = Auth::user()->announcements()->select(
                'id',
                'imageurl',
                'title',
                'description',
                'created_at'
            )->get();
    
            $allRequests = collect($userRequests);
    
            $sortedRequests = $allRequests->sortByDesc('created_at');
    
            $currentPage = request()->get('page', 1);
            $perPage = 10;
    
            $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
                $sortedRequests->forPage($currentPage, $perPage),
                $sortedRequests->count(),
                $perPage,
                $currentPage
            );
    
            return view('teacher.annoucnements', [
                'annoucnements' => $paginatedRequests,
            ]);
    }

    public function addAnnouncement(){
        return view('teacher.postannouncement');
    }

    public function postAnnouncement(Request $request){

        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            $imageName = '/images/announcement.png';
        
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
            
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;
            
                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

        
            $announcement = new Announcement([
                'teacher_id' => Auth::user()->id,
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        
            $announcement->save();
        
            return redirect('/teacher/all_announcements')->with('success', 'Announcement created successfully.');
        }
    }

    public function deleteAnnouncement($id){
        try {
            $announcement = Announcement::findOrFail($id);

            \DB::transaction(function () use ($announcement) {
                $announcement->delete();
            });

            return redirect('/teacher/all_announcements')->with('success', 'Announcement deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_announcements')->with('error', 'Announcement not found');
        } catch (QueryException $e) {
            return redirect('/teacher/all_announcements')->with('error', 'Error deleting Announcement and related data');
        } catch (\Exception $e) {
            return redirect('/teacher/all_announcements')->with('error', 'An unexpected error occurred');
        }
    }

    public function searchAnnouncement(Request $request)
    {
        $title = $request->input('name');

        $userRequests = Auth::user()->announcements()
            ->where('title', 'like', '%' . $title . '%')
            ->select('id', 'imageurl', 'title', 'description', 'created_at')
            ->orderByDesc('created_at') 
            ->paginate(10); 

            return view('teacher.annoucnements', [
                'annoucnements' => $userRequests,
            ]);
    }
    

    public function editAnnouncement($id)
    {
        try {
            $announcement = Announcement::findOrFail($id);

            return view('teacher.editannouncement', [
                'announcement' => $announcement,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_announcements')->with('error', 'Announcement not found');
        }
    }

    public function updateAnnouncement(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        try {
            $announcement = Announcement::findOrFail($id);

            if ($announcement->teacher_id !== Auth::user()->id) {
                return redirect('/teacher/all_announcements')->with('error', 'You do not have permission to update this announcement.');
            }

            $imageName = $announcement->imageurl; 
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');

                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;

                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

            $announcement->update([
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);

            return redirect('/teacher/all_announcements')->with('success', 'Announcement updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect('/teacher/all_announcements')->with('error', 'Announcement not found');
        }
    }




    // ------------------------------------Admin-------------------------------------------------------


    public function adminshow()
    {
        $userRequests = Announcement::with(['teacher', 'admin'])
        ->select(
            'teacher_id',
            'admin_id',
            'id',
            'imageurl',
            'title',
            'description',
            'created_at'
        )
        ->get();


        $allRequests = collect($userRequests);

        $sortedRequests = $allRequests->sortByDesc('created_at');

        $currentPage = request()->get('page', 1);
        $perPage = 10;

        $paginatedRequests = new \Illuminate\Pagination\LengthAwarePaginator(
            $sortedRequests->forPage($currentPage, $perPage),
            $sortedRequests->count(),
            $perPage,
            $currentPage
        );

        return view('admin.announcements', [
            'annoucnements' => $paginatedRequests,
        ]);
    }

    public function adminsearchAnnouncement(Request $request)
    {
        $title = $request->input('name');

        $userRequests = Announcement::with('teacher')
            ->where('title', 'like', '%' . $title . '%')
            ->select('id', 'teacher_id', 'imageurl', 'title', 'description', 'created_at')
            ->orderByDesc('created_at') 
            ->paginate(10); 

            return view('admin.announcements', [
                'annoucnements' => $userRequests,
            ]);
    }

    public function adminaddAnnouncement(){
        return view('admin.postannouncement');
    }

    public function adminpostAnnouncement(Request $request){

        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);

            $imageName = '/images/announcement.png';
        
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');
            
                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;
            
                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

        
            $announcement = new Announcement([
                'admin_id' => Auth::user()->id,
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        
            $announcement->save();
        
            return redirect('/admin/all_announcements')->with('success', 'Announcement created successfully.');
        }
    }

    public function admineditAnnouncement($id)
    {
        try {
            $announcement = Announcement::findOrFail($id);

            return view('admin.editannouncement', [
                'announcement' => $announcement,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_announcements')->with('error', 'Announcement not found');
        }
    }

    public function adminupdateAnnouncement(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        try {
            $announcement = Announcement::findOrFail($id);

            $imageName = $announcement->imageurl; 
            if ($request->hasFile('imageurl')) {
                $profilePicture = $request->file('imageurl');

                if ($profilePicture->isValid()) {
                    $image = $profilePicture->hashName();
                    $imageName = '/storage/images/' . $image;

                    $profilePicture->storeAs('public/images', $image);
                } else {
                    return redirect()->back()->with('error', 'Invalid profile picture file. Only JPG files are allowed.');
                }
            }

            $announcement->update([
                'admin_id' => Auth::user()->id,
                'imageurl' => $imageName,
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);

            return redirect('/admin/all_announcements')->with('success', 'Announcement updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_announcements')->with('error', 'Announcement not found');
        }
    }

    public function admindeleteAnnouncement($id){
        try {
            $announcement = Announcement::findOrFail($id);

            \DB::transaction(function () use ($announcement) {
                $announcement->delete();
            });

            return redirect('/admin/all_announcements')->with('success', 'Announcement deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect('/admin/all_announcements')->with('error', 'Announcement not found');
        } catch (QueryException $e) {
            return redirect('/admin/all_announcements')->with('error', 'Error deleting Announcement and related data');
        } catch (\Exception $e) {
            return redirect('/admin/all_announcements')->with('error', 'An unexpected error occurred');
        }
    }
}
