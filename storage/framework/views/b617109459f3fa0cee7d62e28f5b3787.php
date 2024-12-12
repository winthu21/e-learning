<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- CoursesApplied -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?php echo e(route('appliedCourse')); ?>">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Courses Applied by Users</div>
                                <div class="h5 mb-0 font-weight-bold text-success"><?php echo e($totalCoursesApplied); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-book-open-reader fa-3x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- User Count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?php echo e(route('userList')); ?>">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Users Count</div>
                                <div class="h5 mb-0 font-weight-bold text-primary"><?php echo e($usersCount); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-users fa-3x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Course Category -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?php echo e(route('createCategoryPage')); ?>">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Course Categories</div>
                                <div class="h5 mb-0 font-weight-bold text-info"><?php echo e($courseCategory); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-list fa-3x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Courses -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?php echo e(route('course')); ?>">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    All Courses</div>
                                <div class="h5 mb-0 font-weight-bold text-warning"><?php echo e($allCourses); ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-book-open fa-3x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    
    <div class="row">
        <!-- Admin Table -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <a href="<?php echo e(route('adminList')); ?>">
                    <div class="card-header py-3">
                        <h5 class="text-danger">Admin Lists (<?php echo e($adminCount); ?>)</h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $adminList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Table -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <a href="<?php echo e(route('userList')); ?>">
                    <div class="card-header py-3">
                        <h5>User Lists (<?php echo e($usersCount); ?>)</h5>
                    </div>
                </a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>