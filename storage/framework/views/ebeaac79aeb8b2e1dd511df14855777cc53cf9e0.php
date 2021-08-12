<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div class="flex p-8 sm:py-8 sm:px-0">
    <div class="flex-1 max-h-full">
      
      <div class="flex justify-between pb-6 pr-8 sm:px-6 lg:pr-0">
        <h1 class="font-bold text-3xl">Places</h1>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
          <a href="<?php echo e(route('places.create')); ?>"
            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition">Add Place</a>
        <?php endif; ?>
      </div>
      
      <div class="grid grid-cols-2 gap-8 pr-8 sm:grid-cols-1 lg:pr-0">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <figure
            class="bg-white border max-w-md max-h-full overflow-hidden rounded-lg sm:rounded-none shadow-md sm:shadow-sm transition sm:max-w-full">
            <div class="relative z-10">
              <a href="<?php echo e(route('places.show', $place->id)); ?>" class="text-gray-700">
                <img
                  class="z-0 h-48 w-full max-h-48 object-cover overflow-hidden hover:scale-105 transition duration-200"
                  src="<?php echo e(asset('storage/placeimages/' . $place->place_photo)); ?>" />
              </a>
            </div>
            
            <figcaption class="max-w-md w-full">
              <div class="px-5 pt-6 pb-4 rounded space-y-1 text-gray-900">
                <div class="w-28">
                  <a href="<?php echo e(route('places.show', $place->id)); ?>">
                    <div
                      class="flex flex-row py-1 px-3 rounded-full bg-indigo-100 max-w-max text-indigo-400 hover:bg-indigo-500 hover:text-white transition">
                      <div class="pt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor"
                          stroke-width="0" width="12" height="12" viewBox="0 0 24 24">
                          <path
                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.001 5.75c.69 0 1.251.56 1.251 1.25s-.561 1.25-1.251 1.25-1.249-.56-1.249-1.25.559-1.25 1.249-1.25zm2.001 12.25h-4v-1c.484-.179 1-.201 1-.735v-4.467c0-.534-.516-.618-1-.797v-1h3v6.265c0 .535.517.558 1 .735v.999z" />
                        </svg>
                      </div>
                      <div class="ml-1.5 text-sm font-semibold capitalize">
                        No Errors
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="bg-white px-5 pb-2 rounded space-y-1 text-gray-900">
                <a href="<?php echo e(route('places.show', $place->id)); ?>" class="hover:text-indigo-400 transition">
                  <h1 class="font-bold capitalize text-lg">
                    <?php echo e($place->place_name); ?>

                  </h1>
                </a>
              </div>
            </figcaption>
            
            <div class="px-5 pt-0 pb-3 flex justify-between max-w-md w-full sm:max-w-full">
              <div class="flex flex-row">
                <div class="text-gray-700">
                  <div class="flex flex-row">
                    <div class="pt-1 text-indigo-400">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" width="12"
                        height="12" viewBox="0 0 24 24">
                        <path
                          d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-.808.083-1.596.234-2.359h2.076c-.188.759-.31 1.543-.31 2.359 0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.234 0-4.292.744-5.957 1.989l2.049 2.049-7.012 1.354 1.354-7.013 2.183 2.183c2.036-1.598 4.594-2.562 7.383-2.562 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z" />
                      </svg>
                    </div>
                    <div class="ml-1.5 text-sm font-semibold">
                      <?php echo e(date('Y-m-d', strtotime($place->updated_at))); ?>

                    </div>
                  </div>
                </div>
                <a href="" class="text-gray-700 ml-3 hover:text-indigo-400 transition">
                  <div class="flex flex-row">
                    <div class="pt-1 text-indigo-400">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" width="12"
                        height="12" viewBox="0 0 24 24">
                        <path
                          d="M1.439 16.873l-1.439 7.127 7.128-1.437 16.873-16.872-5.69-5.69-16.872 16.872zm4.702 3.848l-3.582.724.721-3.584 2.861 2.86zm15.031-15.032l-13.617 13.618-2.86-2.861 10.825-10.826 2.846 2.846 1.414-1.414-2.846-2.846 1.377-1.377 2.861 2.86z" />
                      </svg>
                    </div>
                    <div class="ml-1.5 text-sm font-semibold">
                      <?php echo e($place->user->name); ?>

                    </div>
                  </div>
                </a>
                <a href="" class="text-gray-700 ml-3 hover:text-indigo-400 transition">
                  <div class="flex flex-row">
                    <div class="pt-1 text-indigo-400">
                      <svg fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" width="12" height="12"
                        xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path
                          d="M20 15c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m-3 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1m5.415 4.946c-1 .256-1.989.482-3.324.482-3.465 0-7.091-2.065-7.091-5.423 0-3.128 3.14-5.672 7-5.672 3.844 0 7 2.542 7 5.672 0 1.591-.646 2.527-1.481 3.527l.839 2.686-2.943-1.272zm-13.373-3.375l-4.389 1.896 1.256-4.012c-1.121-1.341-1.909-2.665-1.909-4.699 0-4.277 4.262-7.756 9.5-7.756 5.018 0 9.128 3.194 9.467 7.222-1.19-.566-2.551-.889-3.967-.889-4.199 0-8 2.797-8 6.672 0 .712.147 1.4.411 2.049-.953-.126-1.546-.272-2.369-.483m17.958-1.566c0-2.172-1.199-4.015-3.002-5.21l.002-.039c0-5.086-4.988-8.756-10.5-8.756-5.546 0-10.5 3.698-10.5 8.756 0 1.794.646 3.556 1.791 4.922l-1.744 5.572 6.078-2.625c.982.253 1.932.407 2.85.489 1.317 1.953 3.876 3.314 7.116 3.314 1.019 0 2.105-.135 3.242-.428l4.631 2-1.328-4.245c.871-1.042 1.364-2.384 1.364-3.75" />
                      </svg>
                    </div>
                    <div class="ml-1.5 text-sm font-semibold">
                      3
                    </div>
                  </div>
                </a>
              </div>
              <div class="">

              </div>
            </div>
            
            <div class="px-5 pt-0 pb-7 text-gray-500 text-md tracking-tight flex max-w-md w-full sm:max-w-full">
              <p class="truncate">
                <?php echo e($place->place_desc); ?>

              </p>
            </div>
          </figure>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

    
    <aside class="flex-none p-6 max-w-sm w-full bg-white border border-grey-400 lg:hidden">
      <h1 class="font-bold">Search</h1>
      <div class="relative flex w-full flex-wrap items-stretch mt-4 mb-6">
        <input type="text"
          class="z-0 px-3 py-3 pl-3 text-md bg-indigo-50 bg-opacity-50 hover:bg-opacity-80 placeholder-gray-400 border-gray-300 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-1 focus:ring-inset focus:ring-indigo-300 shadow-sm transition relative rounded text-sm border outline-none focus:outline-none w-full pr-10"
          placeholder="Search places..." autocomplete="on" :value="old('email')" autofocus />
        <span
          class="z-0 h-full leading-snug absolute text-center text-gray-400 bg-transparent rounded text-base items-center justify-center w-8 top-1 right-0 pr-3 py-3">
          <svg stroke="currentColor" width="12" height="12" viewBox="0 0 24 24" stroke-width="2"
            xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path
              d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" />
          </svg>
        </span>
      </div>
      <div class="divide-y divide-black divide-opacity-25 mb-6">
        <div class=""></div>
        <div class=""></div>
      </div>
      
      <div class="grid gap-5 mb-8">
        <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div
            class="flex items-center bg-indigo-50 bg-opacity-0 border rounded-lg shadow-sm hover:bg-opacity-75 transition">
            
            <div class="mr-4">
              <a href="<?php echo e(route('places.show', $place->id)); ?>" class="relative text-gray-700">
                <img class="z-0 w-20 h-20 object-cover overflow-hidden"
                  src="<?php echo e(asset('storage/placeimages/' . $place->place_photo)); ?>" />
              </a>
            </div>
            <div class="py-3">
              
              <a href="<?php echo e(route('places.show', $place->id)); ?>">
                <h1 class="mb-2 text-md font-bold text-gray-900 hover:text-indigo-400">
                  <?php echo e($place->place_name); ?>

                </h1>
              </a>
              
              <div class="inline-block text-gray-700">
                <div class="flex flex-row">
                  <div class="pt-1 text-indigo-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" width="12"
                      height="12" viewBox="0 0 24 24">
                      <path
                        d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-.808.083-1.596.234-2.359h2.076c-.188.759-.31 1.543-.31 2.359 0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.234 0-4.292.744-5.957 1.989l2.049 2.049-7.012 1.354 1.354-7.013 2.183 2.183c2.036-1.598 4.594-2.562 7.383-2.562 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z" />
                    </svg>
                  </div>
                  <div class="ml-1.5 text-sm font-semibold">
                    <?php echo e(date('Y-m-d', strtotime($place->updated_at))); ?>

                  </div>
                </div>
              </div>
              
              <a href="" class="inline-block text-gray-700 ml-3 hover:text-indigo-400 transition">
                <div class="flex flex-row">
                  <div class="pt-1 text-indigo-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" width="12"
                      height="12" viewBox="0 0 24 24">
                      <path
                        d="M1.439 16.873l-1.439 7.127 7.128-1.437 16.873-16.872-5.69-5.69-16.872 16.872zm4.702 3.848l-3.582.724.721-3.584 2.861 2.86zm15.031-15.032l-13.617 13.618-2.86-2.861 10.825-10.826 2.846 2.846 1.414-1.414-2.846-2.846 1.377-1.377 2.861 2.86z" />
                    </svg>
                  </div>
                  <div class="ml-1.5 text-sm font-semibold">
                    <?php echo e($place->user->name); ?>

                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

    </aside>
  </div>
  
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laboratorium-app\resources\views/places/index.blade.php ENDPATH**/ ?>