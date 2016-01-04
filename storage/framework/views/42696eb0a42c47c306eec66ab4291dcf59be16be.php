<?php $__env->startSection('contents'); ?>
    <h2>Create New Account</h2>
    <?php if(session('msg')): ?>
        <div class="alert alert-success">
            <?php echo e(session('msg')); ?>

        </div>
    <?php endif; ?>

    <?php if(count($errors)>0): ?>
        <div class="alert alert-danger">
            <?php foreach($errors->all() as $err): ?>
                <li><?php echo e($err); ?></li>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form class="" action="<?php echo e(url('/user/signup')); ?>" method="post">
        <label for="">Name</label><br/>
        <input type="text" name="name" value="" class="form-control"><br/>
        <label for="">Email</label><br/>
        <input type="text" name="email" value="" class="form-control"><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="" class="form-control"><br/>
        <label for="">Re Password</label><br/>
        <input type="password" name="repassword" value="" class="form-control"><br/>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br/><br/>
        <input type="submit" name="submit" value="Signup" class="btn btn-success btn-large">
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>