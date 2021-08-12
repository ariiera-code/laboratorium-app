<?php if($errors->any()): ?>
  <div <?php echo e($attributes); ?>>
    <div class="bg-red-100 rounded-md p-3">
      <div class="font-bold text-sm text-red-600"><?php echo e(__('Whoops! Something went wrong.')); ?></div>

      <ul class="mt-3 list-disc list-inside font-semibold text-xs text-red-600">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH C:\laboratorium-app\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>