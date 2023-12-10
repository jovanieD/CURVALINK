@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white" style="margin-top: 20px">Announcement</h1>
                <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="/all_announcements" class="h5 text-white">Announcement</a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    @foreach ($latestAnnouncement as $event)
                        <div class="mb-5">
                            <img class="img-fluid w-100 rounded mb-5" src="{{ $event->imageurl }}" alt="">
                            <h1 class="mb-4">{{ $event->title }}</h1>
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $event->created_at }}</small>
                            </div>
                            <p>
                                {{ $event->description }}
                            </p>
                        </div>
                    @endforeach



                    <div class="modal fade" style="max-width: 100vw;" id="announcementmodal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="modal-event-image" class="mb-3"></div>
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i></small>
                                        <p id="modal-event-date"></p>   
                                    </div>
                                    <p id="modal-event-description"></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <form method="GET" action="{{ route('searchAnnouncement') }}" class="form-inline">
                        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" name="name" placeholder="Keyword">
                                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Events</h3>
                        </div>
                        @foreach ($paginatedAnnouncement as $event)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ $event->imageurl }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href=""
                                    class="h5 tiitle_link fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"
                                    data-bs-toggle="modal" data-bs-target="#announcementmodal"
                                    data-event-title="{{ $event->title }}"
                                    data-event-description="{{ $event->description }}"
                                    data-event-image="{{ $event->imageurl }}"
                                    data-event-date="{{ $event->created_at }}">
                                    {{ $event->title }}
                                </a>
                            </div>
                        @endforeach
                        <nav class="d-flex justify-content-center m-2">
                            <ul class="pagination">
                                {{ $paginatedAnnouncement->onEachSide(1)->setPath('/announcement')->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('.tiitle_link').on('click', function() {
                    var title = $(this).data('event-title');
                    var description = $(this).data('event-description');
                    var date = $(this).data('event-date');
                    var image = $(this).data('event-image');
                    var startDatetime = $(this).data('event-start-datetime');

                    $('#exampleModalLabel').text(title);
                    $('#modal-event-image').html('<img class="img-fluid w-100" src="' + image + '" alt="">');
                    $('#modal-event-description').text(description);
                    $('#modal-event-date').text(date);
                });
            });
        </script>
    @endsection
