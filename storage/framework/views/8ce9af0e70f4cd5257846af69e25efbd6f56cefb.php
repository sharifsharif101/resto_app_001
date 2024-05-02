<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="<?php echo e(route('admin.categories.create')); ?>" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> New Category</a>
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700"> <!-- Add border classes -->
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-1/4">Name</th>
                            <th scope="col" class="px-6 py-3 w-1/4">Image</th>
                            <th scope="col" class="px-6 py-3 w-1/4">Description</th>
                            <th scope="col" class="px-6 py-3 w-1/4">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700"> <!-- Added hover classes -->
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo e($category->name); ?>

                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="<?php echo e(Storage::url($category->image)); ?>" class="multizoom">
                                    <img src="<?php echo e(Storage::url($category->image)); ?>" class="w-16 h-16" alt="">
                                </a>
                            </th>
                            <th scope="row" style="max-width:150px;" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                <?php
                                // Calculate the number of lines in the description
                                $descriptionLines = substr_count(wordwrap($category->description, 70), "\n") + 1;
                                ?>
                                <?php if($descriptionLines <= 2): ?>
                                <?php echo e($category->description); ?>

                                <?php else: ?>
                                <span id="short-description-<?php echo e($category->id); ?>" style="display: block;"><?php echo e(substr($category->description, 0, strpos(wordwrap($category->description, 70), "\n"))); ?></span>
                                <span id="long-description-<?php echo e($category->id); ?>" style="display:none;"><?php echo e($category->description); ?></span>
                                <span id="read-more-<?php echo e($category->id); ?>" class="text-blue-500 cursor-pointer" onclick="toggleDescription(<?php echo e($category->id); ?>)">...Read More</span>
                                <span id="read-less-<?php echo e($category->id); ?>" style="display:none;" class="text-blue-500 cursor-pointer" onclick="toggleDescription(<?php echo e($category->id); ?>)">...Show Less</span>
                                <?php endif; ?>
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">
                                <div class="flex space-x-1">
                                    <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST" action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" onsubmit="return confirm('Are You sure?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit">Delete</button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>

<script>
    function toggleDescription(id) {
        var shortDescription = document.getElementById('short-description-' + id);
        var longDescription = document.getElementById('long-description-' + id);
        var readMore = document.getElementById('read-more-' + id);
        var readLess = document.getElementById('read-less-' + id);

        if (shortDescription.style.display === "none") {
            shortDescription.style.display = "block";
            longDescription.style.display = "none";
            readMore.style.display = "inline";
            readLess.style.display = "none";
        } else {
            shortDescription.style.display = "none";
            longDescription.style.display = "block";
            readMore.style.display = "none";
            readLess.style.display = "inline";
        }
    }
</script>
<?php /**PATH C:\Users\sharif\Desktop\لارفل\حجز مطعم لارفل\resto_app\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>