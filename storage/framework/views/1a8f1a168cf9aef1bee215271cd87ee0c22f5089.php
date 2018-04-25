<div class="four columns" style="padding:1em;">
                <h4 class="heading">#TRENDZZZZ</h4>

                <div >

                  <h4 class="heading">Hackerrank</h4>
                  <?php
                  $a= App\post::all()->where("name","Hackerrank");


                   ?>

                   <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="content">

                         <a href="/post/<?php echo e($a->title); ?>" style="text-decoration:none;"><h6 class="content-title" style="font-size:1.4em;"> <?php echo e($a->title); ?> </h6></a>
                   </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div >

                  <h4 class="heading">anix</h4>
                  <?php
                  $a= App\post::all()->where("name","anix");


                   ?>

                   <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="content">

                         <a href="/post/<?php echo e($a->title); ?>" style="text-decoration:none;"><h6 class="content-title"> <?php echo e($a->title); ?> </h6></a>
                   </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

</div>
