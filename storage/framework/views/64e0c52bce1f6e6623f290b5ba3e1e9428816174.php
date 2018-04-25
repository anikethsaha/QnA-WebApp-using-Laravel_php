<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Question</title>
    <link href="<?php echo e(asset('css/skeleton.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/normalize.css')); ?>" rel="stylesheet" type="text/css"/>

    <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
     <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script>
       <link rel="stylesheet" href="<?php echo e(asset('css/design.css')); ?>" type="text/css">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js "></script>
  </head>
  <style media="screen">

  </style>
  <body>
    <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">

        <div class="row">
            <div class="ten columns">
                <div class="question-content">
                  <div class="row">
                    <div class="two columns vote-show" >

                      <h4>  <span>&#9757;</span> :  <?php echo e($question->votes); ?></h4>
                    </div>
                    <div class="ten columns">
                      <div class="que-content-title">
                            <h3><?php echo e($question->title); ?></h3>
                      </div>
                      <div class="que-content-body">
                          <p><?php echo e($question->body); ?></p>
                      </div>
                    </div>
                      <div class="ans-div columns ">
                        <h3 style="  text-align: center;">Answer</h3>

                      <?php if(Session::get('username')!="guest"  && Session::get('username')!="wrong password" && Session::get('username')!="wrong username" && Session::has('username')): ?>
                            <?php
                            $username=Session::get('username');
                            $user=DB::table('users')->where(['email'=>$username])->first();



                             ?>
                          <div class="ans-form">
                            <h3 > <span><strong>&rarr;</strong></span><?php echo e($user->name); ?></h3>
                            <form class="" action="/answer/<?php echo e($question->id); ?>/post" method="post">

                              <label for="">Title</label>
                              <input type="text"  required name="title" value="">
                              <label for="">body</label>
                              <?php
                              $helper_user_email = 'helper_user_email';
                               ?>
                              <input type="hidden" name="<?php echo e($helper_user_email); ?>" value= <?php echo e(encrypt($user->email)); ?>>
                                <input type="hidden" name="helper_user_id" value= <?php echo e(encrypt($user->id)); ?>>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="question_id" value="<?php echo e(encrypt($question->id)); ?>">
                              <textarea name="body" required rows="8" cols="80"></textarea>
                              <input type="hidden"  required name="helper_user_name" style="width:5%;" value="<?php echo e(encrypt($user->name)); ?>"> Your Original User Name<br>
                              <button type="submit"  name="button">Post Answer</button>
                            </form>
                          </div>
                          <?php else: ?>
                            <h3 style="color: #f009;
text-align: center;
text-transform: full-width;
letter-spacing: 0px;">You Need to Login to Answer this question</h3>
                      <?php endif; ?>
                      <div class="ans-list">
                        <?php
                        $answers=App\answer::where('question_id',$question->id)->get();
                        $coun=count($answers);
                         ?>
                         <div class="">
                           <h3><?php echo e($coun); ?> : Answers</h3>
                         </div>

                           <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <div class="ans-list-content">
                             <div class="content-user">
                               <div class="user-face">

                               </div>
                               <div class="user-name">
                                 <a href="#"><?php echo e($a->helper_user_name); ?></a>
                                 <p><i>user</i></p>
                               </div>
                             </div>
                             <span>&#9757;<?php echo e($a->votes); ?></span>
                             <?php if($a->approved==1): ?>
                              <p class="approved-tag">Approved</p>
                             <?php endif; ?>
                             <h1><?php echo e($a->title); ?></h1>

                             <p><?php echo e($a->body); ?></p>
                             <p style="    text-align: right;">Answered By &#x26A1; &rarr; <a href="#"><?php echo e($a->helper_user_name); ?></a></p>
                           </div>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>



                      </div>

                  </div>

                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
  </body>
</html>
