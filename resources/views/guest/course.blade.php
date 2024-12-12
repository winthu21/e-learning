@extends('guest.layouts.master')

@section('content')
    {{-- Courses Start --}}
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-4">
            <div class="col-lg-2 p-3 slideInLeft">
                <div class="row g-4">
                    <div class="col-lg-12 p-3">
                        <div class="mb-3">
                            <h4 class="text-primary">Categories</h4>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ route('coursePage') }}" class="text-info">All</a>
                                </li>
                                @foreach ($category as $item)
                                    <li class="list-group-item">
                                        <a href="{{ route('coursePage', $item->id) }}" class="text-info">{{ $item->category_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 p-3">
                <div class="row g-4 justify-content-center">
                    @foreach ($course as $item)
                        <div class="col-md-6 col-lg-6 col-xl-4 zoomIn" data-wow-delay="0.1s">
                            <div class="rounded position-relative fruite-item">
                                <div class="fruite-img">
                                    <img style="height: 250px" src="{{ asset('/admin/courseImage/' . $item->image) }}"
                                        class="img-fluid w-100 rounded-top" alt="">
                                </div>
                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                    style="top: 10px; left: 10px;">{{ $item->category }}</div>
                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                    <h4>{{ $item->course_name }}</h4>
                                    <p>{{ Str::limit($item->description, 100, '...') }}</p>
                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                        @if (auth()->user() != null)
                                            <a href="{{ route('courseDetails', $item->id) }}"><button
                                                    class="btn btn-primary text-white">Details</button></a>
                                        @else
                                            <a href="{{ route('loginPage') }}"><button class="btn btn-primary">Login to
                                                    Apply</button></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Courses End --}}

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" style="height: 180px" src="{{ asset('/img/eng_teacher.jpg') }}"
                                alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mrs.Cathy</h5>
                            <small>English Teacher</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" style="height: 180px"
                                src="{{ asset('/img/physics_teacher.jpg') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Dr.Willians</h5>
                            <small>Physics Expert</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" style="height: 180px"
                                src="{{ asset('/img/business_teacher.webp') }}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr.Schnider</h5>
                            <small>Business Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" style="height: 180px" src="{{ asset('/img/web_teacher.jpg') }}"
                                alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mr.Jack</h5>
                            <small>Senior Developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
