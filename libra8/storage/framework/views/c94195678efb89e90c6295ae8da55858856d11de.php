

<div class="container">

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Test</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a href="/"class="nav-link active" aria-current="page" >Главная</a>
        </li>

        <li class="nav-item">
          <a href="/tasks"class="nav-link active" aria-current="page" >Добавить</a>
        </li>


      </ul>
    </div>
  </div>
</nav>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /usr/home/colonel/t.myrt.ru/www/libra8/resources/views/inc/header.blade.php ENDPATH**/ ?>