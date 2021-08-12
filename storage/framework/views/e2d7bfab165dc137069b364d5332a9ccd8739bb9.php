<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <div class="lg:hidden">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.authentication-card','data' => []]); ?>
<?php $component->withName('jet-authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

      <div class="flex-grow w-3/5 object-cover">
        <img class="w-full" src="<?php echo e('images/authbg.jpg'); ?>">
      </div>
      <div class="flex items-center px-6 py-auto w-2/5">

        <?php if(session('status')): ?>
          <div class="mb-4 font-medium text-sm text-green-600">
            <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo csrf_field(); ?>

          <div class="mb-6 text-center">
            <p class="text-2xl font-bold mb-3">Welcome to <span class="text-indigo-600"><a
                  href="/">Laboratory!</a></span>
            </p>
            <p class="px-2 max-w-full text-base mx-auto">Please Log in to your account and start exploring the tools in
              the
              laboratory</p>
          </div>

          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

          
          <div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'email','value' => ''.e(__('Email/Username')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'email','value' => ''.e(__('Email/Username')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <div
              class="relative text-gray-400 focus-within:text-indigo-500 hover:text-indigo-500 after:text-indigo-500 transition">
              <span class="absolute inset-y-0 left-0 flex items-center pl-3 pt-2">
                <svg class="w-6 h-6 stroke-current" stroke-width="2" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <g id="ic-contact-mail" transform="translate(-1.25 -4.25)">
                    <rect id="Rectangle_25" data-name="Rectangle 25" width="20" height="14" rx="2"
                      transform="translate(2 5)" fill="none" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="1.5" />
                    <path id="Path_81" data-name="Path 81" d="M2.58,5.59l8.23,8.22a2,2,0,0,0,2.83,0l8-8" fill="none"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd" />
                  </g>
                </svg>
              </span>
              <input type="email" name="email" id="email"
                class="block mt-1 w-full pl-11 placeholder-gray-400 border-gray-300 text-gray-800 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-1 focus:ring-inset focus:ring-indigo-400 rounded-md shadow-sm transition"
                placeholder="kevin@example.com" autocomplete="on" :value="old('email')" required autofocus>
            </div>
          </div>

          
          <div class="mt-4">
            <div class="flex justify-between">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'password','value' => ''.e(__('Password')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password','value' => ''.e(__('Password')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
              <?php if(Route::has('password.request')): ?>
                <a class="underline text-xs text-indigo-600 hover:text-indigo-900"
                  href="<?php echo e(route('password.request')); ?>">
                  <?php echo e(__('Forgot your password?')); ?>

                </a>
              <?php endif; ?>
            </div>
            <div
              class="relative text-gray-400 focus-within:text-indigo-500 hover:text-indigo-500 after:text-indigo-500 transition">
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <svg class="w-6 h-6 stroke-current" fill="currentColor" stroke-width="0"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                  <path
                    d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9069372 8 4 8.9069372 4 10 L 4 20 C 4 21.093063 4.9069372 22 6 22 L 18 22 C 19.093063 22 20 21.093063 20 20 L 20 10 C 20 8.9069372 19.093063 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 6 10 L 18 10 L 18 20 L 6 20 L 6 10 z M 12 13 C 10.9 13 10 13.9 10 15 C 10 16.1 10.9 17 12 17 C 13.1 17 14 16.1 14 15 C 14 13.9 13.1 13 12 13 z" />
                </svg>
              </span>
              <input type="password" name="password" id="password"
                class="block mt-1 w-full pl-11 placeholder-gray-400 border-gray-300 text-gray-800 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-1 focus:ring-inset focus:ring-indigo-400 rounded-md shadow-sm transition"
                placeholder="Password" required autocomplete="current-password">
            </div>
          </div>

          <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
              <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
            </label>
          </div>

          <div class="flex mt-4 mb-6">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'text-center content-center items-center self-center flex-1 pt-4 pb-4 text-bold']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-center content-center items-center self-center flex-1 pt-4 pb-4 text-bold']); ?>
              Log in
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          </div>

          <div class="mt-4 mb-4 text-center">
            <p class="max-w-4xl text-sm mx-auto">Don't have
              an account? <a href="<?php echo e(route('register')); ?>" class="text-indigo-600">Register now.</a></p>
          </div>

        </form>
      </div>

     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>

  
  <div class="hidden lg:block">
    <section class="flex max-h-screen">
      <main class="w-96 bg-red-400 space-y-5 block md:hidden">
        <div>
          <img class="object-cover h-screen" src="<?php echo e('images/authbg.jpg'); ?>" alt="reader">
        </div>
      </main>

      <main class="flex-auto bg-white py-8 px-6 md:px-20 sm:px-8 xs:px-5">
        <div class="mb-6 text-center">
          <p class="text-2xl font-bold mb-3 xs:text-xl">Welcome to <span class="text-indigo-600"><a
                href="/">Laboratory!</a></span>
          <p class="max-w-full text-base mx-auto sm:text-sm lg:max-w-xs">Please Log in to your account and start
            exploring the
            tools in
            the
            laboratory</p>
        </div>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        <?php if(session('status')): ?>
          <div class="mb-4 font-medium text-sm text-green-600">
            <?php echo e(session('status')); ?>

          </div>
        <?php endif; ?>

        <section class="flex flex-col">
          <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            
            <div class="mt-1">
              <label class="text-sm text-gray-700 font-medium" for="email">Email/Username</label>
              <div>
                <div
                  class="relative text-gray-400 focus-within:text-indigo-500 hover:text-indigo-500 after:text-indigo-500 transition">
                  <span class="absolute inset-y-0 left-0 flex items-center pl-3 pt-2">
                    <svg class="w-6 h-6 stroke-current" stroke-width="2" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <g id="ic-contact-mail" transform="translate(-1.25 -4.25)">
                        <rect id="Rectangle_25" data-name="Rectangle 25" width="20" height="14" rx="2"
                          transform="translate(2 5)" fill="none" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="1.5" />
                        <path id="Path_81" data-name="Path 81" d="M2.58,5.59l8.23,8.22a2,2,0,0,0,2.83,0l8-8" fill="none"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd" />
                      </g>
                    </svg>
                  </span>
                  <input type="email" name="email" id="email"
                    class="block mt-1 w-full pl-11 placeholder-gray-400 border-gray-300 text-gray-800 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-1 focus:ring-inset focus:ring-indigo-400 rounded-md shadow-sm transition"
                    placeholder="kevin@example.com" autocomplete="on" :value="old('email')" required autofocus>
                </div>
              </div>
            </div>

            
            <div class="mt-4">
              <div class="flex justify-between">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'password','value' => ''.e(__('Password')).'']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password','value' => ''.e(__('Password')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if(Route::has('password.request')): ?>
                  <a class="underline text-xs text-indigo-600 hover:text-indigo-900"
                    href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot your password?')); ?>

                  </a>
                <?php endif; ?>
              </div>
              <div
                class="relative text-gray-400 focus-within:text-indigo-500 hover:text-indigo-500 after:text-indigo-500 transition">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2.5">
                  <svg class="w-6 h-6 stroke-current" fill="currentColor" stroke-width="0"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                    <path
                      d="M 12 1 C 8.6761905 1 6 3.6761905 6 7 L 6 8 C 4.9069372 8 4 8.9069372 4 10 L 4 20 C 4 21.093063 4.9069372 22 6 22 L 18 22 C 19.093063 22 20 21.093063 20 20 L 20 10 C 20 8.9069372 19.093063 8 18 8 L 18 7 C 18 3.6761905 15.32381 1 12 1 z M 12 3 C 14.27619 3 16 4.7238095 16 7 L 16 8 L 8 8 L 8 7 C 8 4.7238095 9.7238095 3 12 3 z M 6 10 L 18 10 L 18 20 L 6 20 L 6 10 z M 12 13 C 10.9 13 10 13.9 10 15 C 10 16.1 10.9 17 12 17 C 13.1 17 14 16.1 14 15 C 14 13.9 13.1 13 12 13 z" />
                  </svg>
                </span>
                <input type="password" name="password" id="password"
                  class="block mt-1 w-full pl-11 placeholder-gray-400 border-gray-300 text-gray-800 hover:ring-0 hover:ring-inset hover:ring-indigo-200 focus:text-gray-800 focus:ring-1 focus:ring-inset focus:ring-indigo-400 rounded-md shadow-sm transition"
                  placeholder="Password" required autocomplete="current-password">
              </div>
            </div>

            <div class="mt-4">
              <label for="remember_me" class="flex items-center">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
              </label>
            </div>

            <div class="flex mt-4 mb-6">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'text-center content-center items-center self-center flex-1 pt-4 pb-4 text-bold']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-center content-center items-center self-center flex-1 pt-4 pb-4 text-bold']); ?>
                Log in
               <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>

            <div class="mt-4 mb-4 text-center">
              <p class="max-w-4xl text-sm mx-auto">Don't have
                an account? <a href="<?php echo e(route('register')); ?>" class="text-indigo-600">Register now.</a></p>
            </div>
          </form>
        </section>
      </main>
    </section>
  </div>
 <?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laboratorium-app\resources\views/auth/login.blade.php ENDPATH**/ ?>