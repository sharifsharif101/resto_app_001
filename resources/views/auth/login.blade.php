{{-- <x-guest-layout>
    <style>
        .background-image {
            background-image: url('https://source.unsplash.com/featured/?restaurant'); /* Fetch a random image related to the restaurant category from Unsplash */
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="background-image flex justify-center items-center h-screen">
        <div class="container max-w-md px-8 py-6 bg-white shadow-md rounded-lg animate__animated animate__fadeInUp">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="http://127.0.0.1:8000/login">
                @csrf
                <!-- Email Address -->
                <div class="animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="email">Email</label>
                    <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="email" type="email" name="email" required autofocus autocomplete="username">
                </div>

                <!-- Password -->
                <div class="mt-4 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="password">Password</label>
                    <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="password" type="password" name="password" required autocomplete="current-password">
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ml-2 text-lg text-gray-600 dark:text-gray-400">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <a class="text-lg text-gray-600 dark:text-gray-400 hover:underline" href="http://127.0.0.1:8000/forgot-password">Forgot your password?</a>
                    <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600 transition duration-300 ease-in-out text-lg">Log in</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout> --}}

{{-- 
<x-guest-layout>
    <style>
        .background-image {
            background-image: url('https://source.unsplash.com/featured/?restaurant'); /* Fetch a random image related to the restaurant category from Unsplash */
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="background-image flex justify-center items-center h-screen">
        <div class="container max-w-md px-8 py-6 bg-white shadow-md rounded-lg animate__animated animate__fadeInUp">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="http://127.0.0.1:8000/login">
                @csrf
                <!-- Email Address -->
                <div class="animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="email">Email</label>
                    <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="email" type="email" name="email" required autofocus autocomplete="username">
                </div>

                <!-- Password -->
                <div class="mt-4 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <label class="block font-medium text-lg text-gray-700 dark:text-gray-300" for="password">Password</label>
                    <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full px-4 py-3 text-lg" id="password" type="password" name="password" required autocomplete="current-password">
                </div>

                <div class="flex items-center justify-end mt-6 animate__animated animate__fadeInUp"> <!-- Add animation classes to the div -->
                    <button type="submit" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white py-3 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600 transition duration-300 ease-in-out text-lg">Log in</button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout> --}}
<x-guest-layout>
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
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="http://127.0.0.1:8000/login">
                @csrf
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
</x-guest-layout>
