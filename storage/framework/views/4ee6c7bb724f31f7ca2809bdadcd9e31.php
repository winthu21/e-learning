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
                                <p class="fs-5 text-white mb-4 pb-2 slideInRight">Whether you're looking to advance your career, pick up a new hobby, or deepen your knowledge, our courses offer engaging, interactive content taught by industry experts. From technology and business to arts and health, find the perfect course to fit your needs and start learning today.</p>
                                <a href="<?php echo e(route('about')); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">About Us</a>
                                <?php if(auth()->user() != null): ?>
                                    <a href="<?php echo e(route('coursePage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Courses</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('loginPage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                                <?php endif; ?>
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
                                <a href="<?php echo e(route('about')); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">About Us</a>
                                <?php if(auth()->user() != null): ?>
                                    <a href="<?php echo e(route('coursePage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Courses</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('loginPage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                                <?php endif; ?>
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
                                <a href="<?php echo e(route('about')); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 slideInUp">About Us</a>
                                <?php if(auth()->user() != null): ?>
                                    <a href="<?php echo e(route('coursePage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Courses</a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('loginPage')); ?>" class="btn btn-light py-md-3 px-md-5 slideInUp">Join Now</a>
                                <?php endif; ?>
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
    

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/4.jpg')); ?>" alt="" style="object-fit: cover;">
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
                    <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo e(route('coursePage')); ?>">See Courses</a>
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
                            <img class="img-fluid w-100" style="height: 180px" src="<?php echo e(asset('/img/eng_teacher.jpg')); ?>"
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
                                src="<?php echo e(asset('/img/physics_teacher.jpg')); ?>" alt="">
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
                                src="<?php echo e(asset('/img/business_teacher.webp')); ?>" alt="">
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
                            <img class="img-fluid w-100" style="height: 180px" src="<?php echo e(asset('/img/web_teacher.jpg')); ?>"
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

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Information</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <p class="mb-4">We are here to help you with any questions or concerns you may have. Whether you need assistance with a course, have feedback, or simply want to learn more about our platform, we’d love to hear from you.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">Soi 15, Bangkapi, Bangkok, Thailand</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+66 0626654689</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">mr.winthu21@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('guest.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/guest/home.blade.php ENDPATH**/ ?>