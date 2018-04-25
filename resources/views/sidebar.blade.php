<div class="four columns" style="padding:1em;">
                <h4 class="heading">#TRENDZZZZ</h4>

                <div >

                  <h4 class="heading">Hackerrank</h4>
                  <?php
                  $a= App\post::all()->where("name","Hackerrank");


                   ?>

                   @foreach($a as $a)
                   <div class="content">

                         <a href="/post/{{ $a->title }}" style="text-decoration:none;"><h6 class="content-title" style="font-size:1.4em;"> {{ $a->title }} </h6></a>
                   </div>

                  @endforeach
                </div>
                <div >

                  <h4 class="heading">anix</h4>
                  <?php
                  $a= App\post::all()->where("name","anix");


                   ?>

                   @foreach($a as $a)
                   <div class="content">

                         <a href="/post/{{ $a->title }}" style="text-decoration:none;"><h6 class="content-title"> {{ $a->title }} </h6></a>
                   </div>

                  @endforeach
                </div>

</div>
