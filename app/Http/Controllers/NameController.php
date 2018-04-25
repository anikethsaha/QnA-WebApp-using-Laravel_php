<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
  public function up()
  {
      Schema::create('names', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
      });
  }
}
