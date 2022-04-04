<?php $__env->startSection('title'); ?>
Add Course
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h4 class="text-center">Add Course</h4>
<form class="my-4" action="<?php echo e(route('storeCourse')); ?>" method="post" enctype="multipart/form-data" style="width:40%; margin-left: auto;margin-right: auto;">
    <?php echo csrf_field(); ?>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Description</label>
    <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Duration (Hour)</label>
    <input type="number" name="duration" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary"><i class="far fa-plus"></i> Add Course</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/Teacher/create.blade.php ENDPATH**/ ?>