<?php foreach($attributes->onlyProps(['id','StudentName', 'Gender', 'ProfileImage', 'PupilClass']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['id','StudentName', 'Gender', 'ProfileImage', 'PupilClass']); ?>
<?php foreach (array_filter((['id','StudentName', 'Gender', 'ProfileImage', 'PupilClass']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="card" style="width: 18rem;">
  <img src="storage/<?php echo e($ProfileImage); ?>" style="height: 150px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($StudentName); ?> <span><h6 class="card-text">(<?php echo e($PupilClass); ?>)</h6></span></h5>

    <form method="POST" action="/update/<?php echo e($id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('get'); ?>
        <sapn><button href="#" class="btn btn-sm btn-primary" type="submit">Update</button></sapn>
    </form>

    <form method="POST" action="/student-list/<?php echo e($id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <sapn><button class="btn btn-sm btn-danger" type="submit">Delete</button></sapn>
    </form>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\school-register\resources\views/components/profile-card.blade.php ENDPATH**/ ?>