<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['cardTitle' => 'Create Account']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['CardTitle' => 'Create Account']); ?>
        <form method="POST" action="/create-account" class="col needs-validation" novalidate>
            <?php echo csrf_field(); ?> <!--  prevents cross site scripting attacks -->
            <div class="col-md">
                <label for="fullname_id" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname"  id="fullname_id" value="<?php echo e(old('fullname')); ?>" required>
                <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="invalid-feedback">
                    Enter a valid email address
                </div>
            </div>

            <div class="col-md">
                <label for="email_id" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" id="email_id" required>
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
                <div class="invalid-feedback">
                    Enter a valid email address
                </div>

            </div>
            <div class="col-md pb-4">
                <label for="pswd_id" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" id="pswd_id" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md pb-4">
                <label for="repeat_pswd_id" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" name="repeat_password" value="<?php echo e(old('repeat_password')); ?>" id="repeat_pswd_id" required>
                <?php $__errorArgs = ['repeat_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="signup"><i class="bi bi-person-circle"></i>  Create Account</button>
            </div>
            <p><h6>Already Have An Account? <a href="/">Sign In</a>  </h6></p>
        </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/signup-form.blade.php ENDPATH**/ ?>