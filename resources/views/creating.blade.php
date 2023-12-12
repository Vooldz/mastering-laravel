<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form with Tailwind CSS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex justify-center items-center h-screen bg-gray-200">
    <div class="w-1/3 p-6 bg-white rounded-lg shadow-2xl">
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="title" class="font-medium">Title</label>
                {{-- focus:outline-none focus:ring focus:border-blue-500 --}}
                <input type="text" id="title" name="title" class="w-full  border border-gray-300 rounded-md focus:outline-none  focus:ring-indigo-500 focus:border-blue-500 p-2">
            </div>
            <div>
                <label for="content" class="block font-medium">Content</label>
                <textarea id="content" name="content" rows="4" class="w-full  border border-gray-300 rounded-md focus:outline-none  focus:ring-indigo-500 focus:border-blue-500 p-2"></textarea>
            </div>
            <div>
                <span class="block font-medium">Type</span>
                <label for="type1" class="flex items-center mt-2">
                    <input type="radio" id="type1" name="type" value="Type 1" class="form-radio text-indigo-600 border-gray-300 focus:ring-indigo-500">
                    <span class="ml-2">Type 1</span>
                </label>
                <label for="type2" class="inline-flex items-center mt-2">
                    <input type="radio" id="type2" name="type" value="Type 2" class="form-radio text-indigo-600 border-gray-300 focus:ring-indigo-500">
                    <span class="ml-2">Type 2</span>
                </label>
                <!-- Add more radio buttons as needed -->
            </div>
            <div>
                <span class="block font-medium">Status</span>
                <label for="status" class="inline-flex items-center mt-2">
                    <input type="checkbox" id="status" name="status" class="form-checkbox text-indigo-600 border-gray-300 focus:ring-indigo-500">
                    <span class="ml-2">Active</span>
                </label>

                <!-- You can customize label and checkbox values as needed -->
            </div>
            <div>
                <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Create</button>
            </div>
        </form>
    </div>
</body>

</html>
