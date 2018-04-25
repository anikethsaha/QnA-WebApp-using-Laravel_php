<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class posting extends Controller
{
    //
    public function quevote(Request $req){


        echo "succcccccccccess";
      }
    public function postmanip(){

      $postdetails=App\Post::all()->orderBy('id', 'desc');
      Return view('post')->withtitle(' post page')->with('postdetails',$postdetails);
    }

    public function postcreate(Request $p){

      //
      $data=array('name'=>decrypt($p->_aon),'email'=>decrypt($p->_aoe),'title'=>$p->title,'body'=>$p->body);
      DB::table('post')->insert($data);
       echo decrypt($p->_aon);
    echo "<a href='/post'>back</a>";
  }



}
