<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            <?php $__currentLoopData = $category->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="<?php echo e(Storage::url($menu->image)); ?>" alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            <?php echo e($menu->name); ?></h4>
                        <p class="leading-normal text-gray-700 menu-description">
                            <?php echo e($menu->description); ?>

                        </p>
                    </div>
                    <div class="flex items-center justify-between p-4">  
                <button class="read-more-btn" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px; transition: background-color 0.3s;">Read More</button>
            </div>                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">$<?php echo e($menu->price); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
   // Get all the menu descriptions and buttons
   const menuDescriptions = document.querySelectorAll('.menu-description');
   const readMoreBtns = document.querySelectorAll('.read-more-btn');
 
   // Set the number of characters to show
   const charLimit = 50;
 
   menuDescriptions.forEach((desc, index) => {
     let isTruncated = true;
     const fullContent = desc.textContent;
     const shortContent = fullContent.substr(0, charLimit) + '...';
 
     // Initialize the description and button
     desc.textContent = shortContent;
     readMoreBtns[index].textContent = 'Read More';
     readMoreBtns[index].style.display = 'block';
 
     // Add event listener for Read More button
     readMoreBtns[index].addEventListener('click', (e) => {
       e.preventDefault();
       if(isTruncated) {
         desc.textContent = fullContent;
         e.target.textContent = 'Read Less';
       } else {
         desc.textContent = shortContent;
         e.target.textContent = 'Read More';
       }
       isTruncated = !isTruncated;
     });
   });
 });
 
     </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\Users\sharif\Desktop\لارفل\حجز مطعم لارفل\resto_app\resources\views/categories/show.blade.php ENDPATH**/ ?>