<?php $__env->startSection('content'); ?>

<h2 class="text-center"><?php echo e($course->name); ?> Course</h2>
<div class="card my-4">
   <div class="card-body">
     <div class="row">
       <div class="col-md-4">
       <img width="100%" height="210px" src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top" alt="...">
        </div>
        <div class="col-md-7 offset-md-1">
        <h3 class="card-title mb-3"><b>Course Details: </b></h3>
        <p class="card-title"><b>Course Name: </b><?php echo e($course->name); ?></p>
        <p class="card-title"><b>Course Desc: </b><?php echo e($course->desc); ?></p>
        <p class="card-title"><b>Full Duration: </b><?php echo e($course->duration); ?></p>
        <p class="card-title"><b>Added: </b><?php echo e($course->created_at); ?></p>
        <p class="card-title"><b>Added By:  </b><?php echo e($course->user->name); ?></p>
      </div>
     </div>
  </div>
</div>

<form class="my-4" action="<?php echo e(route('addcomment',$course->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
     <span><?php echo e(Auth::user()->name); ?></span>
    <div class="form-floating mt-2" >
    <input type="text" class="form-control" name="body">
    </div>
    <button type="submit" class="btn btn-primary mt-4"><i class="fa fa-plus"></i> add comment</button>
</form>

<?php $__currentLoopData = $course->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-dark">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->id == $comment->user_id): ?>
       <img src="<?php echo e(asset('asset/images/users/'.$user->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
        <b class="mr-4"><?php echo e($user->name); ?></b>
        <br> <br>
       <span class="mx-5"> Comment: <?php echo e($comment->body); ?></span>
      <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/showcourse.blade.php ENDPATH**/ ?>