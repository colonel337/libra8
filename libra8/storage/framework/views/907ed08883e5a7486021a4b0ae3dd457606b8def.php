 


<?php $__env->startSection('title'); ?>Edit <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Edit</h1>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/edit">
<?php echo csrf_field(); ?>



<div class="form-group" >
<p> <input type='text' name='title' id='title'  required class="form-control" value="<?php echo e($tasks->title); ?>" /></p>
</div>


<div class="form-group" >
<p> <input type='text'  name='description' id="description"  value="<?php echo e($tasks->description); ?>" required class="form-control"/></p>
</div>

<div class="form-group" >
<p> <input type='text'  name='status' id="status"  value="<?php echo e($tasks->status); ?>" required class="form-control"/></p>
<p> <input type='hidden'  name='id' id="id"  value="<?php echo e($tasks->id); ?>" required class="form-control"/></p>
</div>

<div class="form-group" >
 <p><button type="submit" class="btn btn-success">Сохранить</button></p>
</div>



</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/home/colonel/t.myrt.ru/www/libra8/resources/views/edittasks.blade.php ENDPATH**/ ?>