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
                <a href="<?php echo e(route('admin.reservations.create')); ?>" 
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white "> New Reserrvations </a>
            </div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Table
                </th>
                <th scope="col" class="px-6 py-3">
                    Guests
                </th>
                <th scope="col" class="px-6 py-3">
                    opertions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?php echo e($reservation->first_name); ?>  <?php echo e($reservation->last_name); ?>

                </th>
                <td class="px-6 py-4">
                    <?php echo e($reservation->email); ?> 
                </td>
                <td class="px-6 py-4">
                    <?php echo e($reservation->res_date); ?> 
                </td>
                <td class="px-6 py-4">
                    <?php echo e($reservation->table->name); ?>

                </td>
                <td class="px-6 py-4">
                    <?php echo e($reservation->guest_number); ?> 
                </td>
                <th scope="col" class="px-6 py-3">
                    <div class="flex space-x-1">
                        <a href="<?php echo e(route('admin.reservations.edit', $reservation->id)); ?>" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                        <form  
                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                        method="POST"
                        action="<?php echo e(route('admin.reservations.destroy', $reservation->id)); ?>"
                        onsubmit="return confirm ('Are You sure?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"> Delete</button>
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
<?php /**PATH C:\Users\sharif\Desktop\لارفل\حجز مطعم لارفل\resto_app\resources\views/admin/reservations/index.blade.php ENDPATH**/ ?>