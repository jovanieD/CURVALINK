@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 animated zoomIn text-white" style="margin-top: 20px">Events</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Events</a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach ($latestEvents as $event)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="w-100 img-fluid" style="height: 250px" src="{{ $event->imageurl }}"
                                            alt="">
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ $event->event_date }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $event->title }}</h4>
                                        <p class="text-truncate" style="max-width: 300px;">{{ $event->description }}</p>
                                        <a style="cursor: pointer;" class="text-uppercase read-more-link"
                                            data-bs-toggle="modal" data-bs-target="#eventmodal"
                                            data-event-title="{{ $event->title }}"
                                            data-event-description="{{ $event->description }}"
                                            data-event-image="{{ $event->imageurl }}"
                                            data-event-start-datetime="{{ $event->event_date }}">
                                            Read More <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="modal fade" style="max-width: 100vw;" id="eventmodal" tabindex="-1"
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
                                        <p id="modal-event-start-datetime"></p>
                                        <p id="modal-event-description"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4">
                    <form method="GET" action="{{ route('searchEvent') }}" class="form-inline">
                        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                            <div class="input-group">
                                <input type="text" class="form-control p-3"name="name" placeholder="Keyword">
                                <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">

                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Events</h3>
                        </div>
                        @foreach ($paginatedEvents->skip(4) as $event)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                @php
                                    $start = \Carbon\Carbon::parse($event['event_date'])->format('H:i, F j,');
                                @endphp

                                <img class="img-fluid" src="{{ $event->imageurl }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"
                                    data-bs-toggle="modal" data-bs-target="#eventmodal"
                                    data-event-title="{{ $event->title }}"
                                    data-event-description="{{ $event->description }}"
                                    data-event-image="{{ $event->imageurl }}"
                                    data-event-start-datetime= {{$start}}>
                                    {{ $event->title }}
                                </a>
                            </div>
                        @endforeach
                        <nav class="d-flex justify-content-center m-2">
                            <ul class="pagination">
                                {{ $paginatedEvents->onEachSide(1)->setPath('/event')->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.read-more-link').on('click', function() {
                var title = $(this).data('event-title');
                var description = $(this).data('event-description');
                var image = $(this).data('event-image');
                var startDatetime = $(this).data('event-start-datetime');

                $('#exampleModalLabel').text(title);
                $('#modal-event-image').html('<img class="img-fluid w-100" src="' + image + '" alt="">');
                $('#modal-event-start-datetime').text('Start Date: ' + startDatetime);
                $('#modal-event-description').text(description);
            });
        });
    </script>
@endsection
