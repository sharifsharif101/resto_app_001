<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($category->menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            {{ $menu->name }}</h4>
                        <p class="leading-normal text-gray-700 menu-description">
                            {{ $menu->description }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between p-4">  
                <button class="read-more-btn" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px; transition: background-color 0.3s;">Read More</button>
            </div>                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">${{ $menu->price }}</span>
                    </div>
                </div>
            @endforeach

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
</x-guest-layout>
