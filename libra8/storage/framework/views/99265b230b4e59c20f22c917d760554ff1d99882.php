 


<?php $__env->startSection('title'); ?>Add <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Add</h1>

            
<form method="post" class="col-3 offset-4 border rounded" name='form'  action="/add">
<?php echo csrf_field(); ?>



<div class="form-group" >
 <p>
 <input type='text' name='title' id='title' placeholder="title" required class="form-control" /></p>
</div>


<div class="form-group" >
 <input type='text'  name='description' id="description" placeholder="description" required class="form-control"/></p>
</div>

<div class="form-group" >
 <input type='text'  name='status' id="status" placeholder="status" required class="form-control"/></p>
</div>

<div class="form-group" >
 <p><input  type='submit'  class="btn btn-success"/></p>
</div>



</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/home/colonel/t.myrt.ru/www/libra8/resources/views/tasks.blade.php ENDPATH**/ ?>