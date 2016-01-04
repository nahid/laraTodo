<?php $__env->startSection('contents'); ?>

<h1>Tasks</h1>

<?php if(session('msg')=='oka'): ?>
<div class="alert alert-success">
 The task is oka
</div>
<?php elseif(session('msg')=='notoka'): ?>
<div class="alert alert-success">
 The task is not oka
</div>
<?php endif; ?>
  <table class="table">
      <tr>
        <th>
            #
        </th>
        <th>
          Task
        </th>
        <th>
          Action
        </th>
      </tr>
    <?php foreach($todos as $tdo): ?>
      <tr <?php echo $tdo->status==1?'class="success"':''; ?>>
        <td>
          <?php echo e($tdo->id); ?>

        </td>
        <td>
          <a href="<?php echo e(url('todo/view/'.$tdo->id)); ?>"><?php echo e($tdo->task); ?></a>
        </td>
        <td>
          <a href="">Edit</a>
          <a href="">Delete</a>
          <?php if($tdo->status==1): ?>
          <a href="<?php echo e(url('/todo/task-undone/'.$tdo->id)); ?>">Undone</a>
          <?php else: ?>
          <a href="<?php echo e(url('/todo/task-done/'.$tdo->id)); ?>">Done</a>
          <?php endif; ?>
        </td>
      </tr>

    <?php endforeach; ?>
  </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>