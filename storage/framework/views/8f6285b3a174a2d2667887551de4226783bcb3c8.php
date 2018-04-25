<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Message</title>
    <link href="<?php echo e(asset('css/skeleton.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet" type="text/css"/>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
       <link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>" type="text/css">
  </head>
  <style media="screen">

  </style>
  <body>
    <div class="container">
      <div class="m-container">
          <div class="inbox">
            <div class="inbox-head row">
              <div class="inbox-close">
                <div class="">
                    <a href="/profile/my"><img src="../image/left-arrow.png" alt=""></a>
                </div>

              </div>
                <div class="two columns  " style="margin-left:0;">
                      <div class="inbox-user-face">
                        <img src="../image/59239205-simple-flat-design-medic-or-doctor-with-surgery-and-stethoscope-outfit-icon-vector-illustration-Stock-Vector.jpg" alt="">

                      </div>

                  </div>
                  <div class="nine columns" style="margin-left:0;">
                      <h1 style="margin: auto;margin-top: .4em;"><?php echo e(Session::get('username')); ?></h1>
                  </div>

            </div>
            <div class="inbox-mid">


<!-- foreach from here -->

<?php $__currentLoopData = $msgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="in-mid-content">
                <div class="in-chat row">

                  <div class="two columns">
                    <div class="in-chat-user-face" >
                      <img style="width:100%;" src="../image/59239205-simple-flat-design-medic-or-doctor-with-surgery-and-stethoscope-outfit-icon-vector-illustration-Stock-Vector.jpg" alt="">
                    </div>
                  </div>

                  <div class="eight columns  ">
                    <div class="in-chat-main ">
                      <div class="in-user-name">
                        <?php if($m->sender_email == Session::get('username')): ?>
                        <?php
                          $rus=str_replace(' ', '%20', $m->reciever_name);
                         ?>
                            <span style="color:black;"><strong>Me </strong><i>Sent to</i> <a style="text-decoration:none;" href="/user/<?php echo e($rus); ?>"> <?php echo e($m->reciever_name); ?></a></span>
                        <?php else: ?>
                        <?php
                          $us=str_replace(' ', '%20', $m->sender_name);

                           ?>
                        <a style="text-decoration:none;" href="/user/<?php echo e($us); ?>"><span style="color:#1EAEDB;"><?php echo e($m->sender_name); ?></span></a>
                        <?php endif; ?>
                      </div>
                      <div class="in-text">
                        <p><?php echo e(decrypt($m->text)); ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="two columns">
                    <div class="in-chat-time">
                      <span><?php echo e($m->created_at); ?></span>
                    </div>
                  </div>


                </div>
              </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- foreach end heree  -->





            </div>
          </div>
      </div>
    </div>
  </body>
</html>
