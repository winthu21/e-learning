@extends('guest.layouts.master')

@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="p-3 slideInLeft" data-wow-delay="0.3s">
                <a href="{{ route('coursePage') }}" ><i class="fa fa-arrow-left text-primary me-2"></i> Back</a>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">{{ $courseDetails->category }}</h6>
                    <h1 class="mb-4">{{ $courseDetails->course_name }}</h1>
                    <p class="mb-4">{{ $courseDetails->description }}</p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Level : Begineer to Expert</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Course Duration : 3weeks</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Class Duration : 3hour per video</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Strating Time : Anytime</p>
                        </div>
                    </div>
                    @if ( auth()->user() != null )
                        @if ( $appliedCourse != null )
                            <button class="submit btn btn-success form-control" disabled>Course Applied</button>
                        @else
                            <form action="{{ route('courseApply') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="course_id" class="form-control" value="{{ $courseDetails->id }}">
                                <button class="submit btn btn-warning form-control">Apply for Free</button>
                            </form>
                        @endif
                    @else
                        <a href="{{ route('loginPage') }}"><button class="btn btn-primary">Login to Apply</button></a>
                    @endif
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('admin/courseImage/'.$courseDetails->image) }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row card-group g-4">
                <div class="col-lg-3 col-sm-6 card text-bg-info mb-3 mx-1 text-center" style="max-width: 18rem; margin: 0 auto;">
                    <div class="card-header">
                        <i class="fa fa-3x fa-graduation-cap mb-4"></i>
                        <h4>Experted Skilled Instructors</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Each instructor is carefully selected for their expertise, dedication, and ability to engage and inspire learners.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 card text-bg-secondary mb-3 mx-1 text-center" style="max-width: 18rem; margin: 0 auto;">
                    <div class="card-header">
                        <i class="fa fa-3x fa-globe mb-4"></i>
                        <h4>Interactive Online Classes</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Our platform offers a wide range of courses that cater to various interests and skill levels.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 card text-bg-light mb-3 mx-1 text-center" style="max-width: 18rem; margin: 0 auto;">
                    <div class="card-header">
                        <i class="fa fa-3x fa-home mb-4"></i>
                        <h4>Engaging Home Projects</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-text">These hands-on activities are designed to complement your online courses and provide practical, real-world experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 card text-bg-primary mb-3 mx-1 text-center" style="max-width: 18rem; margin: 0 auto;">
                    <div class="card-header">
                        <i class="fa fa-3x fa-book-open mb-4"></i>
                        <h4>Comprehensive Book Library</h4>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Our digital library offers a vast collection of books, journals, and reference materials across multiple disciplines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
