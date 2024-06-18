<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-auto bg-gray-100 text-white">
        <div class="flex flex-col auto">
            @include('Admin.adminSidelink')
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl">KIGALI TECHNICAL ZONE</p>
                </div>
                <div class="px-4">
                    <a href="{{route('logout')}}" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
                <!-- Support form update -->
                <div class="flex mt-5">
                    <!-- Form on the left -->
                    <div class="w-1/2 pr-4">
                        <h1 class="text-center font-semibold text-gray-950">Add New Items</h1>
                        <div class="justify-center flex mt-4">
                            <form class="ml-10 ms-10 w-96 justify-items-center" action="{{route('StoreNewType')}}" method="post">
                                @csrf
                                <div class="mb-6">
                                    {{-- <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Add Category</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required /> --}}

                                    <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
                                    <select id="small"  name="name" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                      <option selected>Select Category</option>
                                      <option value="tlevision">Television</option>
                                      <option value="radio">Radio</option>
                                      <option value="camera">Camera</option>
                                      <option value="computer">Computer</option>
                                      <option value="accessories">Accessories</option>
                                    </select>



                                </div>

                                <div class="mb-6">
                                    <label for="subCategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub Category Name</label>
                                    <input type="text" name="subCategory" id="subCategory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter sub category name" required />
                                </div>

                                {{-- <div class="mb-6">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Write New Type Description</label>
                                    <textarea id="description" name="description" rows="4" class="border border-gray-300 rounded-lg w-full px-0 text-sm text-gray-900 bg-white dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write product description..." required></textarea>
                                </div> --}}

                                <button type="submit" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus
                                outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit New Type</button>
                            </form>
                        </div>
                    </div>

                    <!-- Data Table on the right -->
                    <div class="w-1/2 pl-4">
                        <h2 class="text-center font-semibold text-gray-950">Stored Items</h2>
                        <div class="overflow-x-auto mt-4">
                            <table id="data-table" class="min-w-full bg-white rounded-lg shadow-md">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Sub Category</th>
                                        <th class="px-6 py-3 border-b border-gray-300 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $item)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 border-b border-gray-200 text-gray-700">{{$item->NewTypeName}}</td>
                                        <td class="px-6 py-4 border-b border-gray-200 text-gray-700">{{$item->subCategory}}</td>
                                        <td class="px-6 py-4 border-b border-gray-200 text-gray-700">
                                            <!-- Button to open modal -->
                                            <button class="edit-button text-blue-500 hover:text-blue-700" data-modal-target="#edit-modal-{{$item->id}}">Edit</button>

                                            <!-- Modal -->
                                            <div id="edit-modal-{{$item->id}}" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                                                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                                                    <h2 class="text-2xl font-bold mb-4">Edit Category</h2>
                                                    <form action="{{ route('UpdateType', ['id' => $item->id]) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-4">
                                                            {{-- <label for="modal-name-{{$item->id}}" class="block mb-2 text-sm font-medium text-gray-900">Category Name</label>
                                                            <input type="text" id="modal-name-{{$item->id}}" name="name" value="{{$item->NewTypeName}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                         --}}
                                                            <label for="modal-name-{{$item->id}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
                                                            <select id="modal-name-{{$item->id}}" name="name" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                              <option value="{{$item->NewTypeName}}">{{$item->NewTypeName}}</option>
                                                              <option value="tlevision">Television</option>
                                                              <option value="radio">Radio</option>
                                                              <option value="camera">Camera</option>
                                                              <option value="computer">Computer</option>
                                                              <option value="accessories">Accessories</option>
                                                            </select>

                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="modal-subCategory-{{$item->id}}" class="block mb-2 text-sm font-medium text-gray-900">Sub Category Name</label>
                                                            <input type="text" id="modal-subCategory-{{$item->id}}" name="subCategory" value="{{$item->subCategory}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                                                        </div>
                                                        <div class="flex justify-end">
                                                            <button type="button" class="text-gray-500 hover:text-gray-700 mr-4" onclick="document.getElementById('edit-modal-{{$item->id}}').classList.add('hidden')">Cancel</button>
                                                            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of Support form update -->
            </div>
        </div>
    </div>

    <!-- Tailwind CSS scripts to handle modals -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const editButtons = document.querySelectorAll('.edit-button');

            editButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-target');
                    document.querySelector(modalId).classList.remove('hidden');
                });
            });

            const closeModalButtons = document.querySelectorAll('[id^=close-modal]');
            closeModalButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const modal = button.closest('.fixed');
                    modal.classList.add('hidden');
                });
            });
        });
    </script>
</body>
</html>
