<?php

  // $fetchs=DB::table('chats')
  //           ->where('sender_email', '=', Session::get('username'))
  //           ->where('reciever_email','=',$user->email)
  //           ,orWhere(function ($query) use ($user->email){
  //               $query->where('sender_email','=', $user->email)
  //                     ->where('reciever_email', '=', Session::get('username'));
  //           })
  //           ->get();

  $fetchs=DB::select('select *
                      from chats
                      where (sender_email = "'.Session::get('username').'" and reciever_email = "'.$user->email.'")

                      or (reciever_email = "'.Session::get('username').'" and sender_email = "'.$user->email.'")');

 ?>
 <?php $__currentLoopData = $fetchs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="msg-body">
   <?php
      // $readit=DB::update("update chats set is_sender_read = '1' where id = '$f->id'");
     ?> 
    <div class='
    <?php if($f->sender_email == Session::get('username')): ?>
       <?php echo "msg-body-text self"; ?>
     <?php else: ?>
      <?php echo "msg-body-text"; ?>
      <?php endif; ?>
        '>
      <span><?php echo e(decrypt($f->text)); ?></span>

    </div>

    <p ><?php echo e($f->created_at); ?></p>
  </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
