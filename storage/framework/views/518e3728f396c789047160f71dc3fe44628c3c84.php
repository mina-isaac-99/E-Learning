<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end">
<a href="<?php echo e(route('myenroll')); ?>" class="btn btn-primary mb-5"><i class="fa fa-check"></i> Enrolled Courses</a>
</div>
<div class="container-fluid">
    <div class="row">
        <h2 class="text-center mb-5">All Courses</h2>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $count=0;
        $cont=0;
        ?>
        <?php $__currentLoopData = Auth::user()->enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($enroll->course_id==$course->id): ?>
            <?php  ++$cont ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($cont==$count){?>
            <div class="col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top mb-2" alt="...">
                    <h5 class="card-title text-center mb-2">Course :  <?php echo e($course->name); ?></h5>
                    <a href="<?php echo e(route('viewcourse',$course->id)); ?>"  class="btn btn-danger mx-2"><i class="fa fa-eye"></i> Show</a>
                    <a href="<?php echo e(route('enroll',$course->id)); ?>"  class="btn btn-success m-2"><i class="fa fa-check"></i> Enroll</a>
                </div>
            </div>
        <?php }?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/inc/studenthome.blade.php ENDPATH**/ ?>