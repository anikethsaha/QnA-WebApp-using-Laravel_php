<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo e($p->title); ?></title>
    <link href="<?php echo e(asset('css/skeleton.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet" type="text/css"/>

    <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
       <link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>" type="text/css">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>
  <style media="screen">

  </style>
  <body>
    <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="content-story-image">
        <img src="../image/medicine-flat-design_1212-670.jpg" alt="">
    </div>
    <div class="full-width" style="">
      <div class="" style="max-width: 960px;  margin: 0 auto;width: 80%;">
        <div class="inner-story">
          <div class="story-title">
            <h1 class="post-title"><?php echo e($p->title); ?></h1>
          </div>


          <div class="row">
            <div class="eight columns">
              <div class="content-story">
                  <p style="font-size: 1.5em!important"><?php echo e($p->body); ?></p>
                  <p style="float:right;">A U T H O R &#x26A1; &#8594; <?php echo e($p->name); ?></p>
              </div>

            </div>
              <?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
        </div>



        </div>

      </div>
    </div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
  </body>
</html>
