<?php $__env->startSection('content'); ?>

<!-- NavBar -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navbar','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="container pt-5" style="margin-left: auto; margin-right: auto;">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert-message','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<p><h3 class="align-center">
<?php
    if(!isset($student))
        echo 'Add New Student';
    else
        echo 'Update Data';
?>
</h3><hr></p>

<div class="container">
  <div class="row">

    <form method="POST" action="/add-new-student" enctype="multipart/form-data" class="row g-2">
        <?php echo csrf_field(); ?> <!--  prevents cross site scripting attacks -->

        <?php
            if(isset($student)){
                echo '<input type="hidden" name="_method" value="PUT">';
            }else{
                echo '<input type="hidden" name="_method" value="POST">';
            }
        ?>

        <input type="hidden" name="id" value="<?php echo e(isset($student)? $student->id : ''); ?>">
        <div class="col-12 mt-3">
            <label for="studentid" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="student_id" value="<?php echo e(isset($student) ? $student->student_id : old('student_id')); ?>" id="studentid">

            <?php $__errorArgs = ['student_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mt-4">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" value="<?php echo e(isset($student)? $student->fullname : old('fullname')); ?>" id="fullname">
            <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-4 mt-4">
            <label for="studentclass" class="form-label">Class</label>
            <input type="text" class="form-control" name="pupil_class" value="<?php echo e(isset($student)? $student->pupil_class : old('pupil_class')); ?>" id="studentclass">
            <?php $__errorArgs = ['pupil_class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-4 mt-4">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="gender" class="form-select">
            <option>Female</option>
            <option>Male</option>
            </select>
            <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-md-4 mt-4">
            <label for="date_of_birth" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value="<?php echo e(isset($student)? $student->date_of_birth : old('date_of_birth')); ?>" id="date_of_birth">
            <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mt-3">
            <label for="place_of_residence" class="form-label">Place Of Residence</label>
            <input type="text" class="form-control" name="place_of_residence" value="<?php echo e(isset($student)? $student->place_of_residence : old('place_of_residence')); ?>" id="place_of_residence">
            <?php $__errorArgs = ['place_of_residence'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo e(isset($student)? $student->email : old('email')); ?>" id="email">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mt-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" name="religion" value="<?php echo e(isset($student)? $student->religion : old('religion')); ?>" id="religion">
            <?php $__errorArgs = ['religion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12 mt-3">
            <label for="profile_image" class="form-label">Profile Image</label>
            <input type="file" accept="image/*" class="form-control" name="profile_image" value="<?php echo e(isset($student)? $student->profile_image : old('profile_image')); ?>" id="profile_image">
            <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <img src="<?php echo e((isset($student))? asset('storage/'.$student->profile_image):''); ?>" style="width: 20%; height: 20%;" alt="">

        <div class="mt-5 mb-6">
            <?php
                if(isset($student))
                {
                    echo '<button class="btn btn-lg btn-success btn-btn-outline-success" type="submit">Update</button>';
                }else
                {
                    echo '<button class="btn btn-lg btn-success btn-btn-outline-success" type="submit">Add New Student</button>';
                }
            ?>
            <a href="/student-list" class="btn btn-lg btn-primary">View Students</a>
        </div>

    </form>

  </div>
</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', ['title' => 'My School Register | Add Studetns'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school-register\resources\views/add-new-student.blade.php ENDPATH**/ ?>