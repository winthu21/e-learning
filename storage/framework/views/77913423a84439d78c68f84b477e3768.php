<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2>Courses</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">User</th>
                                <th class="text-center">Course</th>
                                <th class="text-center">Course Category</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Detail</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class=" align-content-center text-center"><?php echo e($item->course_name); ?></td>
                                    <td class=" align-content-center text-center"><?php echo e($item->category); ?></td>
                                    <td class=" align-content-center text-center"><?php echo e(Str::limit($item->description, 120, '...')); ?></td>
                                    <td class=" align-content-center text-center"><img class="" style="height: 100px" src="<?php echo e(asset('/admin/courseImage/'.$item->image)); ?>"></td>
                                    <td class=" align-content-center text-center"><a href="<?php echo e(route('courseDetailsPage',$item->id)); ?>"><i class="fa-solid fa-circle-info"></i></a></td>
                                    <td class=" align-content-center text-center"><a href="<?php echo e(route('courseUpdatePage',$item->id)); ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td class=" align-content-center text-center"><a href="<?php echo e(route('createDelete',$item->id)); ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/admin/course.blade.php ENDPATH**/ ?>