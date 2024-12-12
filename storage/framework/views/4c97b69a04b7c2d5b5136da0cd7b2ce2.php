<?php $__env->startSection('content'); ?>
    
    <div id="carouselExampleInterval" class="carousel slide fadeInUp" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo e(asset('img/1.jpg')); ?>" class="img-fluid w-100" alt="...">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container text-overlay">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown ">Best Online Courses</h5>
                                <h1 class="display-3 text-white slideInLeft">The Best Online Learning Platform</h1>
                                <p class="fs-5 text-white mb-4 pb-2 slideInRight">Vero elitr justo clita lorem. Ipsum
                                    dolor at sed
                                    stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus
                                    eirmod elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo e(asset('img/2.jpg')); ?>" class="img-fluid w-100" alt="...">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="text-overlay col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown ">Join a Global Community</h5>
                                <h1 class="display-3 text-white slideInLeft">Your Path to Success</h1>
                                <p class="fs-5 text-white mb-4 pb-2 slideInRight">Our courses are designed with your success in mind. Each course is structured to build essential skills and knowledge, ensuring you stay ahead in your field. With our expert instructors, hands-on projects, and real-world applications, you will be well-equipped to tackle any challenge. Invest in your future with us and take the first step towards achieving your dreams.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/3.jpg')); ?>" class="img-fluid w-100" alt="...">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="text-overlay col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown ">Join a Global Community</h5>
                                <h1 class="display-3 text-white slideInLeft">Learn Anytime, Anywhere</h1>
                                <p class="fs-5 text-white mb-4 pb-2 slideInRight">With our flexible online learning platform, education is at your fingertips, no matter where you are. Access courses from any device, at any time, and take control of your learning journey. Our platform supports your lifestyle, allowing you to balance education with other commitments seamlessly. Start learning whenever you're ready and achieve your goals on your terms.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/user/home.blade.php ENDPATH**/ ?>