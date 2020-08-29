 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <br /> 
        <?php endif; ?>
        <form method="post" action="">
        <?php echo method_field('PATCH'); ?> 
            <?php echo csrf_field(); ?>
            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value=<?php echo e($contact->name); ?> />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value=<?php echo e($contact->email); ?> />
            </div>

            <div class="form-group">
                <label for="total_score">Total Score:</label>
                <input type="text" class="form-control" name="total_score" value=<?php echo e($contact->total_score); ?> />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GKS\resources\views/contacts/edit.blade.php ENDPATH**/ ?>