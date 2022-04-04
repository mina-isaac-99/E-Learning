<?php $__env->startSection('content'); ?>

<div class="row">
    <h2 class="text-center mb-4">My Enrollment</h2>
<?php $__currentLoopData = Auth::user()->enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($course->id==$enroll->course_id): ?>
        <div class="col-md-3">
            <div class="card">
                <img width="90%" height="150px" src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top" alt="...">
                <p class="card-title m-2"> Name : <?php echo e($course->name); ?></p>
                <p class="card-text m-2"> Desc : <?php echo e($course->desc); ?></p>
                <p class="card-text m-2"> Duraton : <?php echo e($course->duration); ?> Hour<p>
                <a href="<?php echo e(route('unenroll',$enroll->id)); ?>" class="btn btn-danger d-block mx-2"><i class="far fa-times"></i> Un Enroll</a>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-danger mt-5"><i class="far fa-exclamation-circle"></i> You Dont added Courses Yet </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/myenroll.blade.php ENDPATH**/ ?>