<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-6">
        
            <div class="card shadow">
                <div class="card-header">
                    <h4>Category Lists</h4>
                </div>
                <br>
                <div class="card-body mx-2">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row justify-content-between">
                            <p><?php echo e($item->category_name); ?></p>
                            <a href="<?php echo e(route('categoryDelete',$item->id)); ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                        </div>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        
    </div>
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header">
                <h4>Create Courses</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('createCategory')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="p-3">
                        <label for="">Course Category</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="category_name" value="<?php echo e(old('category_name')); ?>" placeholder="Input Course Category Name">
                        <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="p-3">
                        <button class="submit btn-primary form-control">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/admin/createCourseCategory.blade.php ENDPATH**/ ?>