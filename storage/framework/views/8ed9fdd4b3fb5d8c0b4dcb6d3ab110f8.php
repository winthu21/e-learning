<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8 offset-2">
        <h2>Course Details</h2>
        <div class="p-3">
            <label for="">Course Image</label>
            <img src="<?php echo e(asset('admin/courseImage/'.$course->image)); ?>" class="w-50" alt="">
        </div>
        <div class="p-3">
            <label for="">Course Name</label>
            <input type="text" class="form-control" disabled value="<?php echo e($course->course_name); ?>">
        </div>
        <div class="p-3">
            <label for="">Course Category</label>
            <input type="text" class="form-control" disabled value="<?php echo e($course->category); ?>">
        </div>
        <div class="p-3">
            <label for="">Course Description</label>
            <Textarea class="form-control" disabled><?php echo e($course->description); ?> </Textarea>
        </div>
        <div class="p-3">
            
            <a href="<?php echo e(route('course')); ?>"><button class="btn btn-primary">Back</button></a>
            <a href="<?php echo e(route('courseUpdatePage',$course->id)); ?>"><button class="btn btn-danger">Edit</button></a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/admin/courseDetails.blade.php ENDPATH**/ ?>