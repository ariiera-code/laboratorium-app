<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
    <div>
      <div class="max-w-2xl mx-auto py-8 sm:p-0 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
          
          <form method="post" action="<?php echo e(route('labs.update', $lab->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="overflow-hidden sm:rounded-md">
              <h1 class="text-center px-6 sm:pt-8 text-2xl font-extrabold text-gray-900 xs:text-xl">Edit Item</h1>
              <p class="mb-8 px-6 text-base text-center text-gray-500 text-opacity-75 xs:text-sm">Any changes to this
                item?</p>
              
              <div class="border-t-4 border-indigo-400 bg-white rounded-lg sm:border-0">
                <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                  <div>
                    <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">General Information</h1>
                  </div>
                  <div></div>
                </div>
                <div class="p-6">
                  
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="text" name="item_name" id="item_name" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent"
                      value="<?php echo e(old('item_name', $lab->item_name)); ?>" />
                    <label for="item_name"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 hover:text-indigo-400 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Name</label>
                    <?php $__errorArgs = ['item_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <textarea type="text" name="item_desc" id="item_desc" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      rows="3" maxlength="255"><?php echo e(old('item_desc', $lab->item_desc)); ?></textarea>
                    <label for="item_desc"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Description</label>
                    <?php $__errorArgs = ['item_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="mb-2">
                    <select class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700">
                      <option class="py-1">Option 1</option>
                      <option class="py-1">Option 2</option>
                    </select>
                  </div>
                </div>
              </div>

              
              <div class="border-t-4 border-indigo-400 bg-white mt-8 rounded-lg sm:mt-0 sm:border-0">
                <div class="pt-4 grid grid-cols-1 divide-y divide-gray-300">
                  <div>
                    <h1 class="mb-4 px-6 text-2xl font-bold text-gray-900 xs:text-lg">Numeral Information</h1>
                  </div>
                  <div></div>
                </div>
                <div class="p-6">
                  
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_quantity" id="item_quantity" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="<?php echo e($lab->item_quantity); ?>">
                    <label for="item_quantity"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Quantity</label>
                    <?php $__errorArgs = ['item_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_value" id="item_value" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="<?php echo e($lab->item_value); ?>">
                    <label for="item_value"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Value</label>
                    <?php $__errorArgs = ['item_value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="mb-5 f-outline relative border focus-within:border-indigo-400">
                    <input type="number" name="item_error" id="item_error" placeholder=" "
                      class="block p-2 w-full text-lg appearance-none focus:outline-none bg-transparent resize-none"
                      value="<?php echo e($lab->item_error); ?>">
                    <label for="item_error"
                      class="absolute ml-3 px-2 top-0 text-lg text-gray-700 bg-white mt-2 -z-1 duration-300 origin-0">Item
                      Error/Damaged</label>
                    <?php $__errorArgs = ['item_error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  
                  <div class="flex">
                    <a href="<?php echo e($backurl); ?>"
                      class="hidden sm:mt-4 sm:mr-2 bg-white border border-indigo-500 text-indigo-500 font-bold rounded-md hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Cancel</span>
                    </a>
                    <button type="submit"
                      class="hidden sm:mt-4 sm:ml-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700 py-2 px-5 sm:inline-flex items-center transition sm:w-full sm:justify-center sm:py-3">
                      <span class="mr-2 text-lg">Edit</span>
                    </button>
                  </div>
                </div>
              </div>
              
              <div
                class="flex items-center justify-end md:justify-center pb-4 pt-6 text-right sm:items-stretch sm:hidden">
                <a href="<?php echo e($backurl); ?>"
                  class="cursor-pointer mr-4 bg-white border border-indigo-500 text-indigo-500 font-bold rounded hover:text-white hover:border-indigo-700 hover:bg-indigo-700 py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Cancel</span>
                </a>
                <button type="submit"
                  class="bg-indigo-500 text-white font-bold rounded hover:bg-indigo-700 shadow-md py-2 px-5 inline-flex items-center transition md:w-full md:justify-center md:py-3">
                  <span class="mr-2">Edit</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="1"
                    width="12" height="12" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                    <path
                      d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                  </svg>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lab_access')): ?>
    Sorry you're not admin
  <?php endif; ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laboratorium-app\resources\views/labs/edit.blade.php ENDPATH**/ ?>