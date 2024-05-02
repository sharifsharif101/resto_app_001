


<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        .background-image {
            background-image: url('https://source.unsplash.com/featured/?italian,food'); /* Fetch a random image related to the Italian restaurant category from Unsplash */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style for the input field */
        .input-container {
            position: relative;
        }

        .input-field {
            width: 100%;
            transition: width 0.3s ease-in-out; /* Transition for the width change */
            font-size: 1rem;
            padding: 0.75rem;
            border-radius: 0.375rem;
            border: 1px solid #d1d5db;
        }

        /* Expand the input field when focused */
        .input-field:focus {
            width: 120%; /* Adjust this value as needed */
        }
    </style>
    <div class="background-image">
        <div class="container max-w-md px-8 py-6 bg-white shadow-md rounded-lg animate__animated animate__fadeInUp">
            <!-- Session Status -->
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <form method="POST" action="http://127.0.0.1:8000/login">
                <?php echo csrf_field(); ?>
                <!-- Email Address -->
                <div class="animate__animated animate__fadeInUp input-container"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="email">Email</label>
                    <input class="input-field border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="email" type="email" name="email" required autofocus autocomplete="username">
                </div>

                <!-- Password -->
                <div class="mt-4 animate__animated animate__fadeInUp input-container"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="password">Password</label>
                    <input class="input-field border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="password" type="password" name="password" required autocomplete="current-password">
                </div>

                <div class="flex items-center justify-end mt-6 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600 transition duration-300 ease-in-out text-lg">Log in</button>
                </div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\Users\sharif\Desktop\لارفل\حجز مطعم لارفل\resto_app\resources\views/auth/login.blade.php ENDPATH**/ ?>