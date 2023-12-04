@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <a href="/admin/dashboard" class=" m-4">
                                <i class="fa-solid fa-arrow-left fa-xl m-1 bg-warning"></i>
                            </a>
                            <a href="/all_Teachers">
                                <i class="fa-solid fa-arrows-rotate  fa-xl m-1 "></i></a>
                            <a href="/admin_add_teacher"><button id="addScheduleButton" class="btn btn-info m-2">+
                                    Add Teacher</button></a>
                        </div>

                        <div class="col-md-6">
                            <form method="GET" action="{{ route('searchTeachers') }}" class="form-inline">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" id="searchInput" name="name" class="form-control" placeholder="Search by Name">
                                    <div class="input-group-append">
                                        <button id="searchButton" class="btn btn-warning" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
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
                        <h5 class="card-header">All Teachers</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Rank</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Subject Handle</th>
                                        <th>Grade Level</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @foreach ($teacher as $teacherData)
                                        @include('modals.admindeleteteacher')
                                        <tr>
                                            <td>{{ $teacherData['firstname'] }} {{ $teacherData['lastname'] }}</td>
                                            <td>{{ $teacherData['rank'] }}</td>
                                            <td>{{ $teacherData['gender'] }}</td>
                                            <td>{{ $teacherData['email'] }}</td>
                                            <td>{{ $teacherData['subject_handle'] }}</td>
                                            <td>{{ $teacherData['grade_level'] }}</td>
                                            <td>{{ $teacherData['address'] }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="/view_teacher/{{ $teacherData['id'] }}"><i
                                                                class="fas fa-eye text-info me-3"></i>View</a>
                                                        <a class="dropdown-item"
                                                            href="/edit_teacher/{{ $teacherData['id'] }}"><i
                                                                class="fas fa-edit text-warning me-3"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <i class="fas fa-trash text-danger me-3"></i>
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#admindelete{{$teacherData->id}}"
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
                                {{ $teacher->onEachSide(1)->setPath('/all_Teachers')->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
