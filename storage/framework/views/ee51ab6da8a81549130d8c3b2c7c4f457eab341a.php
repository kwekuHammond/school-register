<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['cardTitle' => 'Log In']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['CardTitle' => 'Log In']); ?>
        <form class="col needs-validation" method="POST" action="/" novalidate>
            <?php echo csrf_field(); ?> <!--  prevents cross site scripting attacks -->
            <div class="col-md">
                <label for="login_email_id" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" id="login_email_id" required>
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
                <label for="login_p" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" id="login_p" required>
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
                    Please enter password
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" name="sigin" type="submit"><i class="bi bi-box-arrow-in-right"></i> Login</button>
            </div>
        </form>
        <p><h6>Don't Have Account? <a href="/create-account">Sign Up</a>  </h6></p>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/signin-form.blade.php ENDPATH**/ ?>