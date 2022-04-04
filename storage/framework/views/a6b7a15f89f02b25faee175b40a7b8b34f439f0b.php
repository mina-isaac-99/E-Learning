<div class="d-flex justify-content-end">
<a href="<?php echo e(route('createCourse')); ?>" class="btn btn-primary mb-5" class="float-left"><i class="fa fa-plus"></i> Add New Course</a>
</div>

<div class="row">
<?php $__empty_1 = true; $__currentLoopData = Auth::user()->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" alt="Card image cap">
            <div class="card-body">
                <p class="card-title"><b>Name:</b> <?php echo e($course->name); ?></p>
                <p class="card-title"><b>Description:</b> <?php echo e($course->desc); ?></p>
                <p class="card-title"><b>Duration:</b> <?php echo e($course->duration); ?></p>

                <a href="<?php echo e(route('edit_course',$course->id)); ?>"  class="btn btn-success  d-block mb-2">
                    Edit <i class="fa fa-cog"></i>
                </a>

                <a href="<?php echo e(route('deletecourse',$course->id)); ?>"  class="btn btn-danger d-block">
                    Delete <i class="fa fa-trash"></i>
                </a>

            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="alert alert-danger mt-5"><i class="far fa-exclamation-circle"></i> No Course Added Yet </div>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/inc/teacherhome.blade.php ENDPATH**/ ?>