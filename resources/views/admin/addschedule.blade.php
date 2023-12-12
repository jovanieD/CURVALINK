@extends('layouts.admin-dashboard')

@section('admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start align-items-center mb-3">
                                <div class="btn-group" role="group" aria-label="Calendar Actions">
                                    <a href="/admin/schedules">
                                        <button class="btn m-2">
                                            <i class="fa-solid fa-arrow-left fa-xl m-1 bg-warning"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <form method="get" action="{{ route('admin_searchRequests') }}">
                                @csrf
                                <div class="input-group mb-3 h-25">
                                    <input type="text" id="searchInput"  name="name" class="form-control" placeholder="Search events">
                                    <div class="input-group-append">
                                        <button id="searchButton" class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-4">
                            <div class="card">
                                @if ($documentRequested->count() > 0)
                                    <h5 class="card-header">All Documents</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table fs-5 table-bordered table-striped">
                                            <thead style="background-color: #FFD700;">
                                                <tr>
                                                    <th class="text-center fw-bold">Document</th>
                                                    <th class="text-center fw-bold">Request Date</th>
                                                    <th class="text-center fw-bold">Requestor</th>
                                                    <th class="text-center fw-bold">Status</th>
                                                    <th class="text-center fw-bold">Release Date</th>
                                                    <th class="text-center fw-bold">Remark</th>
                                                    <th class="text-center fw-bold">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($documentRequested as $request)
                                                    @include('modals.teacherdelete')
                                                    <tr>
                                                        <td>
                                                            <strong>
                                                                @if ($request['type'] == 'Certificate')
                                                                    <i class="fa-solid fa-scroll m-2"
                                                                        style="color: #fde906;"></i>
                                                                    <strong>Certificate</strong>
                                                                @elseif($request['type'] == 'Good_Moral')
                                                                    <i class="fa-solid fa-medal fa-xl"
                                                                        style="color: #fcff3d;"></i>
                                                                    <strong>Good Moral</strong>
                                                                @elseif($request['type'] == 'Form137')
                                                                    <i class="fa-solid fa-file-circle-check fa-xl"
                                                                        style="color: #bec11a;"></i>
                                                                    <strong>Form 137</strong>
                                                                @endif
                                                            </strong>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ \Carbon\Carbon::parse($request['created_at'])->format('F j, Y') }}
                                                        </td>
                                                        <td class="text-center">
                                                            @if (isset($request['user_id']))
                                                                <?php $user = \App\Models\User::find($request['user_id']); ?>
                                                                @if ($user)
                                                                    <p>{{ $user->firstname }} {{ $user->lastname }}</p>
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($request['status'] == 'Pending')
                                                                <span
                                                                    class="badge bg-label-warning me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Process')
                                                                <span
                                                                    class="badge bg-success me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Scheduled')
                                                                <span
                                                                    class="badge bg-primary me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Decline')
                                                                <span
                                                                    class="badge bg-danger me-1">{{ $request['status'] }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $request['releasedate'] ? \Carbon\Carbon::parse($request['releasedate'])->format('F j, Y') : '' }}
                                                        </td>
                                                        <td class="text-truncate" style="max-width: 150px;">
                                                            {{ $request['remarks'] }}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center">
                                                                    <form method="post"
                                                                        action="/admin_createappoinment/{{ $request['id'] }}">
                                                                        @csrf
                                                                        <input type="hidden" value="{{ $request['id'] }}"
                                                                            name="id">
                                                                        <input type="hidden"
                                                                            value="{{ $request['type'] }}" name="type">
                                                                        <button type="submit" class="btn m-1">
                                                                            <i class="fa-regular fa-calendar-plus fs-4 text-success"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Schedule"></i>
                                                                        </button>
                                                                    </form>
                                                                    {{-- <button type="submit" class="btn m-1"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#teacherdelete">
                                                                        <i class="fas fa-trash text-danger"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Delete"></i>
                                                                    </button> --}}
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <nav class=" d-flex justify-content-center m-2">
                                            <ul class="pagination">
                                                {{ $documentRequested->onEachSide(1)->setPath('/admin/dashboard')->appends(request()->query())->links('pagination::bootstrap-4') }}
                                            </ul>
                                        </nav>
                                    </div>
                                @else
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-auto text-center">
                                            <p class="mb-3 text-warning fs-4 fw-bold"
                                                style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                                                Empty
                                            </p>
                                            <img src="/images/svg/empty.svg" class="w-75 max-img p-5" alt="">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
