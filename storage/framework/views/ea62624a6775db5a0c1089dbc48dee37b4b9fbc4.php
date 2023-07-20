

<?php $__env->startSection('content'); ?>
    <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Laravel 9 CRUD Example</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('Dataclients.create')); ?>"> Create Student</a>
                    </div>
                </div>
            </div>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th> Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo e($Dataclients.id); ?>

                    <?php $__currentLoopData = $Dataclients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataclients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($dataclients->id); ?></td>
                            <td><?php echo e($dataclients->name); ?></td>
                            <td><?php echo e($dataclients->email); ?></td>
                            <td><?php echo e($dataclients->address); ?></td>
                            <td>
                                <form action="<?php echo e(route('students.destroy',$student->id)); ?>" method="Post">
                                    <a class="btn btn-primary" href="<?php echo e(route('students.edit',$student->id)); ?>">Edit</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
     
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MLM-System\resources\views/index.blade.php ENDPATH**/ ?>