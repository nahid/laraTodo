<?php $__env->startSection('contents'); ?>
    <h2>User Login</h2>
    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <form class="" action="<?php echo e(url('/user/login')); ?>" method="post">
        <label for="">Email</label><br/>
        <input type="text" name="email" value="" class="form-control"><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="" class="form-control"><br/>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br/><br/>
        <input type="submit" name="submit" value="Login" class="btn btn-success btn-large">
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>