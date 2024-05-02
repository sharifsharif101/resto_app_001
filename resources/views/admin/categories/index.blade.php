<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> New Category</a>
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
                        @foreach ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700"> <!-- Added hover classes -->
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->name }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ Storage::url($category->image) }}" class="multizoom">
                                    <img src="{{ Storage::url($category->image) }}" class="w-16 h-16" alt="">
                                </a>
                            </th>
                            <th scope="row" style="max-width:150px;" class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                @php
                                // Calculate the number of lines in the description
                                $descriptionLines = substr_count(wordwrap($category->description, 70), "\n") + 1;
                                @endphp
                                @if($descriptionLines <= 2)
                                {{ $category->description }}
                                @else
                                <span id="short-description-{{ $category->id }}" style="display: block;">{{ substr($category->description, 0, strpos(wordwrap($category->description, 70), "\n")) }}</span>
                                <span id="long-description-{{ $category->id }}" style="display:none;">{{ $category->description }}</span>
                                <span id="read-more-{{ $category->id }}" class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $category->id }})">...Read More</span>
                                <span id="read-less-{{ $category->id }}" style="display:none;" class="text-blue-500 cursor-pointer" onclick="toggleDescription({{ $category->id }})">...Show Less</span>
                                @endif
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">
                                <div class="flex space-x-1">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" method="POST" action="{{ route('admin.categories.destroy', $category->id) }}" onsubmit="return confirm('Are You sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
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
</x-admin-layout>

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
