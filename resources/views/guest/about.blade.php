@extends('guest.layouts.master')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/4.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to E-Learning</h1>
                    <p class="mb-4">At E-Learning, we offer a vast range of courses and learning resources designed to help you achieve your educational goals. Our platform combines expert instruction, interactive learning, and community support to create an enriching educational experience. Start your learning journey today and unlock your potential.</p>
                    <p class="mb-4">E-Learning was founded with the belief that education should be accessible to all. Our platform offers a diverse array of courses, expert instructors, and innovative learning tools to support your educational journey. Learn more about our mission, values, and the impact we strive to make in the world of online education.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Skill Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Interactive Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Engaging Home Projects</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Comprehensive Book Library</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('coursePage') }}">See Courses</a>
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
