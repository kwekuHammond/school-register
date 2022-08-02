<?php foreach($attributes->onlyProps(['CardTitle']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['CardTitle']); ?>
<?php foreach (array_filter((['CardTitle']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div  style="margin-left: auto; margin-right: auto;" <?php echo e($attributes->merge(['class'=>'card w-75'])); ?> >
    <h3 class="text-center pt-3"> <?php echo e($CardTitle); ?> </h3>
    <hr>
    <div class="card-body">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/card.blade.php ENDPATH**/ ?>