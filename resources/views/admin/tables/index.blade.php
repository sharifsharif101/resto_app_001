<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                


                <a  Onclick="return ConfirmDelete()"
                class=" px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg mr-3 text-white "    id="deleteAllSelectedRecored"> Delete All Selected </a>
               
               
               
                <a href="{{route('admin.tables.create')}}" 
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
                @foreach ($tables as $table)
                <tr  id="table_ids{{$table->id}}" >

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     <input type="checkbox" name="ids" class="checkbox_ids" id="" value="{{$table->id}}">
                    </th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
{{$table->name}}
</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
{{$table->guest_number}}
</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
{{$table->status}}
</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
{{$table->location}}
</th>
<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
   <div class="flex space-x-2">
    <a href="{{route('admin.tables.edit', $table->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
    <form  
    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
    method="POST"
    action="{{route('admin.tables.destroy',$table->id)}}"
    onsubmit="return confirm ('Are You sure?');">
    @csrf
    @method('DELETE')
    <button type="submit"> Delete</button>
    </form>
</div>
    </th>
             

            </tr>
            @endforeach
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
                url:"{{route('tables.delete')}}",
                type:"DELETE",
                data:{
                    ids : all_ids,
                    _token:'{{csrf_token()}}'
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
 
</x-admin-layout>
