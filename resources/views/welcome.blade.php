<x-guest-layout>
    <x-slot name="header">
        {{ __('Explore the stories here !') }}
    </x-slot>
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
    <div class="grid grid-cols-3 gap-6 flex justify-center">
        <br>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 1</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="https://blog.reedsy.com/short-story/3vna6q/" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 2</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="https://blog.reedsy.com/short-story/ayy89g/" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 3</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="https://blog.reedsy.com/short-story/9b3dky/" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 4</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 5</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 6</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 7</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 8</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 9</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 10</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 11</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdR98snlJmlTEFVRTvoP_YDFwjZV6LnwQ9hA&usqp=CAU" alt="Article Image" class="mb-3 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Story 12</h2>
            <!-- <p class="text-gray-700 mb-4">Sample content</p> -->
            <a href="#" class="text-blue-500 hover:underline">Click Here</a>
        </div>
    </div>
</x-guest-layout>
