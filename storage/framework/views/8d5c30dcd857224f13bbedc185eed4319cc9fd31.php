<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ask Question </title>
    <link href="<?php echo e(asset('css/skeleton.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet" type="text/css"/>

    <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
       <link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>" type="text/css">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>
  <body>
<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
  </body>
</html>
