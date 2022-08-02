<?php if(session()->has('message')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/alert-message.blade.php ENDPATH**/ ?>