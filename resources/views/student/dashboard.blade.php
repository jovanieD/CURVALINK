@extends('layouts.student-dashboard')

@section('student')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary fs-3">Welcome to CuravaLink Portal
                                                {{ Auth::user()->name }}! 🎉</h5>
                                            <p class="mb-4">
                                                You have done <span class="fw-bold">72%</span> more sales today. Check your
                                                new badge in
                                                your profile.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="/images/svg/welcome.svg" height="140" alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <h1 class="card-title mb-2">{{ $documentCounts['Pending'] }}</h3>
                                                <span class="fw-semibold d-block mb-1">Pending Request</span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <h1 class="card-title mb-2">{{ $documentCounts['Process'] }}</h3>
                                                <span class="fw-semibold d-block mb-1">In Process </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List of Request  -->
                        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                            <div class="card">
                                @if (empty($documentRequested))
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-auto text-center">
                                            <p class="mb-3 text-warning fs-4 fw-bold"
                                                style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%); z-index: 1; ">
                                                Empty</p>
                                            <img src="/images/svg/empty.svg" class="w-75 max-img p-5" alt="">
                                        </div>
                                    </div>
                                @else
                                    <h5 class="card-header">All Documents</h5>
                                    <div class="table-responsive text-nowrap">
                                        <table class="table fs-5 table-bordered table-striped">
                                            <thead style="background-color: #FFD700;">
                                                <tr>
                                                    <th class="text-center fw-bold">Document</th>
                                                    <th class="text-center fw-bold">Request Date</th>
                                                    <th class="text-center fw-bold">Status</th>
                                                    <th class="text-center fw-bold">Remark</th>
                                                    <th class="text-center fw-bold">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @foreach ($documentRequested as $request)
                                                    @include('modals.delete')
                                                    <tr>
                                                        <td>
                                                            <strong>
                                                                @if ($request['type'] == 'Certificate')
                                                                    <i class="fa-solid fa-scroll m-2" style="color: #f8e40d;"></i>
                                                                    <strong>Certificate</strong>
                                                                @elseif($request['type'] == 'Good Moral')
                                                                    <i class="fa-solid fa-medal fa-xl"
                                                                        style="color: #fcff3d;"></i>
                                                                    <strong>Good Moral</strong>
                                                                @elseif($request['type'] == 'Form137')
                                                                    <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                                    <strong>Form 137</strong>
                                                                @endif
                                                            </strong>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ \Carbon\Carbon::parse($request['created_at'])->format('F j, Y') }}
                                                        </td>
                                                        <td class="text-center">
                                                            @if ($request['status'] == 'Pending')
                                                                <span
                                                                    class="badge bg-label-warning me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Process')
                                                                <span
                                                                    class="badge bg-danger me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Scheduled')
                                                                <span
                                                                    class="badge bg-primary me-1">{{ $request['status'] }}</span>
                                                            @elseif($request['status'] == 'Received')
                                                                <span
                                                                    class="badge bg-success me-1">{{ $request['status'] }}</span>
                                                            @endif
                                                        </td>
                                                        <td class="text-center text-wrap" style="max-width: 10%">
                                                            <p>asdasdfasdf asdfas</p>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center">
                                                                <form method="get"action="/viewrequest/{{ $request['id'] }}">
                                                                    <button type="submit" class="btn btn-info m-1">
                                                                        <i class="fas fa-eye" data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="View"></i>
                                                                    </button>
                                                                </form>

                                                                <form method="get"
                                                                    action="/getrequest/{{ $request['id'] }}">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-warning m-1">
                                                                        <i class="fas fa-edit " data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Edit"></i>
                                                                    </button>
                                                                </form>

                                                                <button type="submit" class="btn btn-danger m-1"
                                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                    <i class="fas fa-trash" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Delete"></i>
                                                                </button>

                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <nav class=" d-flex justify-content-center m-2">
                                            <ul class="pagination">
                                                 {{ $documentRequested->onEachSide(1)->setPath('/dashboard')->appends(request()->query())->links('pagination::bootstrap-4') }}
                                            </ul>
                                        </nav>
                                    </div>
                                @endif
                            </div>
                        </div>
                        

                        <!--/ List oF User's Request -->
                        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <h1 class="card-title mb-2">{{ $documentCounts['Scheduled'] }}</h3>
                                                <span class="fw-semibold d-block mb-1">Scheduled</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <h1 class="card-title mb-2">{{ $documentCounts['Received'] }}</h3>
                                                <span class="fw-semibold d-block mb-1">Received Document</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
@endsection
