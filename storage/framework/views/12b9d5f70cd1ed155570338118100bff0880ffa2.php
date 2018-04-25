<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search | <?php echo e($title); ?></title>
    <link href="<?php echo e(asset('css/skeleton.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet" type="text/css"/>

    <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
       <link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>" type="text/css">
  </head>
  <body>
    <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
      <div class="row">
        <div class="eight columns">
            <h1><strong><?php echo e(count($questions)); ?> - </strong>Question Related to  <strong><?php echo e($title); ?></strong></h1>
            <?php if(! empty($questions)): ?>
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="two-column content "  >
                  <div class="content-user">
                    <div class="user-face">

                    </div>
                    <div class="user-name">
                      <a href="#"><?php echo e($q->user_name); ?></a>
                      <p><i style="color:#f3f3f3;" >User</i></p>
                    </div>
                  </div>
                  <h3 class="content-title"><a href="/question/<?php echo e($q->id); ?>"><?php echo e($q->title); ?></a></h3>

                  <div >
                    <p><?php echo e($q->body); ?></p>
                    <span><strong style="color:white;">...</strong></span>
                  </div>
                    <span  class="vote vote-display"value="<?php echo e($q->id); ?>">&#9757; </span>
                  <span class="vote-result" ><?php echo e($q->votes); ?></span>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="four columns">
          <h1><strong><?php echo e(count($posts)); ?> - </strong>  Posts Related to <strong><?php echo e($title); ?></strong></h1>

          <?php if(! empty($posts)): ?>
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="content">

                <a href="/post/<?php echo e($a->id); ?>" style="text-decoration:none;"><h6 class="content-title" style="font-size:1.4em;"> <?php echo e($a->title); ?> </h6></a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
  </body>
</html>
