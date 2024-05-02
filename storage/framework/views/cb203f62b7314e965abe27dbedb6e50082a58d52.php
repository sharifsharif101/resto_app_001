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
                


                <a  Onclick="return ConfirmDelete()"
                class=" px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg mr-3 text-white "    id="deleteAllSelectedRecored"> Delete All Selected </a>
               
               
               
                <a href="<?php echo e(route('admin.tables.create')); ?>" 
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white "> New Table </a>
            </div>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <input type="checkbox" name="" id="select_all_ids">
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Guest
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    Operations
                </th>
            </tr>
        </thead>
        <tbody>
                <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr  id="table_ids<?php echo e($table->id); ?>" >

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     <input type="checkbox" name="ids" class="checkbox_ids" id="" value="<?php echo e($table->id); ?>">
                    </th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<?php echo e($table->name); ?>

</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<?php echo e($table->guest_number); ?>

</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<?php echo e($table->status); ?>

</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<?php echo e($table->location); ?>

</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
   <div class="flex space-x-2">
    <a href="<?php echo e(route('admin.tables.edit', $table->id)); ?>" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
    <form  
    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
    method="POST"
    action="<?php echo e(route('admin.tables.destroy',$table->id)); ?>"
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
 
    <script>

       $(function(e){
            $("#select_all_ids").click(function(){
                    $('.checkbox_ids').prop('checked',$(this).prop('checked'));
            });
        function ConfirmDelete() {
        return confirm("Are you sure you want to delete?");
        }
  
            $("#deleteAllSelectedRecored").click(function(){
                event.preventDefault();
                if(ConfirmDelete()){
                    var all_ids=[];
                   $('input:checkbox[name=ids]:checked').each(function(){
                        all_ids.push($(this).val());
                   });
 
            $.ajax({
                url:"<?php echo e(route('tables.delete')); ?>",
                type:"DELETE",
                data:{
                    ids : all_ids,
                    _token:'<?php echo e(csrf_token()); ?>'
                },
                success:function(response){
                    $.each(all_ids,function(key,val){
                        $('#table_ids'+val).remove();
                    })
                }

            });
                }
                  
        });

        });



    </script>
 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Users\sharif\Desktop\لارفل\حجز مطعم لارفل\resto_app\resources\views/admin/tables/index.blade.php ENDPATH**/ ?>