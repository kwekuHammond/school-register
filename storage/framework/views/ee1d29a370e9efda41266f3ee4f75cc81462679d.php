<form method="POST" action="/student-list" class="" role="search">
        <?php echo csrf_field(); ?> <!--  prevents cross site scripting attacks -->
        <?php echo method_field('POST'); ?>
        <input class="form-control me-2" type="search" placeholder="enter student name" name="keyword" value="<?php echo e(old('keyword')); ?>" aria-label="Search">

    <?php $__errorArgs = ['keyword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-danger"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>
    <button class="btn btn-outline-success" style="margin-left: auto; margin-right: auto;" type="submit">Search</button>
</form>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/search-form.blade.php ENDPATH**/ ?>