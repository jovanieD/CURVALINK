@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <a href="/teacher/dashboard" class=" m-4">
                                <i class="fa-solid fa-arrow-left fa-xl m-1 bg-warning"></i>
                            </a>
                            <a href="/teacher/all_announcements">
                                <i class="fa-solid fa-arrows-rotate  fa-xl m-1 "></i></a>
                            <a href="/teacher/add_announcement"><button id="addScheduleButton" class="btn btn-info m-2">+
                                    Add Announcement</button></a>

                        </div>

                        <div class="col-md-6">
                            <form method="GET" action="{{ route('searchAnnouncement') }}" class="form-inline">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" id="searchInput" name="name" class="form-control" placeholder="Search by Title">
                                    <div class="input-group-append">
                                        <button id="searchButton" class="btn btn-warning" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success " role="alert">
                                {{ session('success') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    location.reload();
                                }, 4000); // 5000 milliseconds (5 seconds)
                            </script>
                        @endif
                        <h5 class="card-header">All Announcements</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0" >

                                    @foreach ($annoucnements as $announcement)
                                        @include('modals.teacherdeleteannouncement')
                                        <tr >
                                            <td> <img style="max-width: 100px;" src="{{ $announcement['imageurl'] }}" alt=""></td>
                                            <td class=" text-wrap text-capitalize " style="max-width: 200px">{{ $announcement['title'] }}</td>
                                            <td class=" text-truncate" style="max-width: 150px;">{{ $announcement['description'] }}</td>
                                            <td> {{ \Carbon\Carbon::parse($announcement['created_at'])->format('F j, Y') }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu" style="z-index: 1000;">
                                                        <a class="dropdown-item viewonly"  style="cursor: pointer;"
                                                        data-bs-toggle="modal" data-bs-target="#viewmodal"
                                                                data-event-title="{{ $announcement['title'] }}"
                                                                data-event-description="{{ $announcement['description'] }}"
                                                                data-event-image="{{ $announcement['imageurl'] }}"
                                                                ><i
                                                                class="fas fa-eye text-info me-3"></i>View</a>
                                                        <a class="dropdown-item" href="/update_announcement/{{ $announcement['id'] }}"><i
                                                                class="fas fa-edit text-warning me-3"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="fas fa-trash text-danger me-3"></i>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#teacherdeleteannouncement{{ $announcement['id'] }}"
                                                                style="border: none; background-color: transparent; color: inherit;">
                                                                Delete
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <nav class="d-flex justify-content-center m-2">
                            <ul class="pagination">
                                {{ $annoucnements->onEachSide(1)->setPath('/teacher/all_announcements')->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('teacher.actions.viewonlyannouncement')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.viewonly').on('click', function() {
            var title = $(this).data('event-title');
            var description = $(this).data('event-description');
            var image = $(this).data('event-image');

            $('#exampleModalLabel').text(title);
            $('#modal-event-image').html('<img class="img-fluid w-100" src="' + image + '" alt="">');
            $('#modal-event-description').text(description);
        });
    });
</script>
@endsection
