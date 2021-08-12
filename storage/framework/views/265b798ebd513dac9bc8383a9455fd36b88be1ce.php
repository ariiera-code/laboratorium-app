<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header'); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Laboratorium Data
    </h2>
   <?php $__env->endSlot(); ?>

  <div>
    <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
      <div class="block mb-8">
        <a href="<?php echo e(route('labs.create')); ?>"
          class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Add Lab</a>
      </div>
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200 w-full">
                <thead>
                  <tr>
                    <th scope="col" width="50"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      ID
                    </th>
                    <th scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Name
                    </th>
                    <th scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Quantity
                    </th>
                    <th scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Value
                    </th>
                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <?php $__currentLoopData = $labs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <?php echo e($lab->id); ?>

                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <?php echo e($lab->item_name); ?>

                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      <?php echo e($lab->item_quantity); ?>

                      </td>
                      
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        <?php echo e($lab->item_value); ?>

                      </td>

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="<?php echo e(route('labs.show', $lab->id)); ?>"
                          class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                        <a href="<?php echo e(route('labs.edit', $lab->id)); ?>"
                          class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                        <form class="inline-block" action="<?php echo e(route('labs.destroy', $lab->id)); ?>" method="POST"
                          onsubmit="return confirm('Are you sure?');">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                          <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2 bg-transparent"
                            value="Delete">
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laboratorium-app\resources\views/labs/index.blade.php ENDPATH**/ ?>