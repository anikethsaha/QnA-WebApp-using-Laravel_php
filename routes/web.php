<?php


Route::get('/','question@home_page');


Route::get('/user',function(){

  return view('user');
});
Route::get('/user/{username}',['uses'=>'profile@index']);
Route::get('/profile/my',['uses'=>'profile@ownpro']);


Route::post('logen',['uses'=>'loginsys@userlogin']);

Route::post('insert',['uses'=>'loginsys@userlogup']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('post/create','posting@postcreate');
Route::get('post','question@home_page');
Route::post('post','question@loadmore_home');

Route::get('/post/{title}',function($title){
  $p=App\post::where('title',$title)->first();
  return view('story')->with('p',$p);

});
Route::get('/question/{title}',function($title){
  $p=App\question::where('title',$title)->first();

  Return view("question")->with('question',$p);
});

Route::get('/login/doctor',function(){
  return view('doctorlog');
});
Route::post('/s/message','ChatController@send');
Route::get('/message/my','ChatController@inbox');
 Route::get('/write/post',function(Request $request){
  return view('writeArticle');
 })->Middleware('checkDoc');

// Route::get('/writeArticle','articleDoctor@__construct');
Route::post('/search/page','search@searchpage');
Route::post('/search','search@searching');
Route::post('/uinputcheck','loginsys@checking');
Route::post('/emailinputcheck','loginsys@emailchecking');
Route::post('/answer/{id}/post','answering@create_ans');
Route::post('/submit/ask/question','question@create');
Route::post('/vote','VoteController@quevote');
Route::get('/logout',function(){
  Session::forget('username');
  Return Redirect('/post');
});





?>
