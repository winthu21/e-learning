<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <div class="d-flex justify-content-between">
                    <div class="">
                        <a href="<?php echo e(route('adminList')); ?>"><button class="btn btn-danger">Admin List</button></a>
                        <a href="<?php echo e(route('userList')); ?>"><button class="btn btn-primary">User List</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Provider</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="">
                                                <?php echo e($item->name); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->provider); ?></td>
                                    <td class="text-primary"><?php echo e($item->role); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eduWeb\resources\views/admin/adminList.blade.php ENDPATH**/ ?>