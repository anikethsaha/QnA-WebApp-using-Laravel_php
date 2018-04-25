<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class search extends Controller
{
    //
    public function secr($para){
            $para=trim($para);
            $para=  strip_tags($para);
            $para=  stripslashes($para);
            $para=  htmlspecialchars($para);
    return $para;
  }

    public function searching(Request $req){
      $item=$req->s;
      $item=filter_var($item,FILTER_SANITIZE_STRING);
      $item=$this->secr($item);
      $questions=App\question::where('title','like','%'.$item.'%')->get();
      $posts=App\post::where('title','like','%'.$item.'%')->get();
         if(count($questions)>0 || count($posts)>0)
         {
             $output='  <div class="top-inner-result">
                     <span style="font-weight:500;">Questions</span>
               </div>';
             foreach ($questions as $p )
              {
                 $output.='<li>
                     <p><a href="question/'.$p->id.'">'.$p->title.'</a>in <span   ><strong style="color:#f7b632;"> Question </strong></span></p>
                   </li>';
             }
             $output.='  <div class="top-inner-result">
                     <span style="font-weight:500;">Posts</span>
               </div>';
             foreach ($posts as $a) {
               $output.='<li>
                   <p><a href="post/'.$a->id.'">'.$a->title.'</a>in <span  ><strong style="color:#024b68;"> Post </strong> </span></p>
                 </li>';
             }

             echo $output;
         }else{
           echo "NO DATA FOUND";
         }

    }
    public function searchpage(Request $req){
      $item=$req->s;
      $item=filter_var($item,FILTER_SANITIZE_STRING);
      $item=$this->secr($item);
      $questions=App\question::where('title','like','%'.$item.'%')->get();
      $posts=App\post::where('title','like','%'.$item.'%')->get();
      Return view('search')->with('title',$item)->with('questions',$questions)->with('posts',$posts);
    }
}
