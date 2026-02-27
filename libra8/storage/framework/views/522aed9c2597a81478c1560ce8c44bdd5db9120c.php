<?php $__env->startSection('title'); ?>Main <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<center>
<div class="col-14 border pt-8">
<table>
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <tr>
    <td style="float:left;width: 700px;padding:5px;border: thin solid #32a1ce;margin:5px;"><a href="/tasks/<?php echo e($task->id); ?>"> <?php echo e($task->title); ?>  <?php echo e($task->description); ?>  <?php echo e($task->status); ?></a></td>
    <td style="float:left;width: 50px;padding:5px;border: thin solid #32a1ce;margin:5px;"><a href="/delete/<?php echo e($task->id); ?>">delete</a></td>
   </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</center>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/home/colonel/t.myrt.ru/www/libra8/resources/views/index.blade.php ENDPATH**/ ?>