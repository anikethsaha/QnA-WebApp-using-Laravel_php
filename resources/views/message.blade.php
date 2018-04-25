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
 @foreach($fetchs as $f)
  <div class="msg-body">
   <?php
      // $readit=DB::update("update chats set is_sender_read = '1' where id = '$f->id'");
     ?> 
    <div class='
    @if($f->sender_email == Session::get('username'))
       <?php echo "msg-body-text self"; ?>
     @else
      <?php echo "msg-body-text"; ?>
      @endif
        '>
      <span>{{ decrypt($f->text) }}</span>

    </div>

    <p >{{ $f->created_at }}</p>
  </div>

  @endforeach
