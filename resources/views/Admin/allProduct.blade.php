


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
    <div class="flex flex-col min-h-screen">

        <!-- Header -->
        <header class="flex items-center justify-between h-16 bg-white shadow-md px-4">
            <div class="text-red-900 font-bold text-2xl">KIGALI TECHNICAL ZONE</div>
            <div>
                <a href="#" class="text-blue-500">Logout</a>
            </div>
        </header>

        <!-- Main Content -->
        <div class="flex flex-1">

            <!-- Sidebar -->
            <div class=" lg:block w-64 bg-gray-100 text-white">
                @include('Admin.adminSidelink')
            </div>

            <!-- Content Area -->
            <div class="flex-1 p-4">

                <!-- Search -->
                <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-md mb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block w-full pt-2 pl-10 pr-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                <div class="bg-green-200 text-green-800 py-2 px-4 mb-4 rounded-lg">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Product Image</th>
                                <th scope="col" class="px-6 py-3">Product Name</th>
                                <th scope="col" class="px-6 py-3">Product Price</th>
                                <th scope="col" class="px-6 py-3">Sell Type</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Subcategory</th>
                                <th scope="col" class="px-6 py-3">Description</th>
                                <th scope="col" class="px-6 py-3">Edit</th>
                                <th scope="col" class="px-6 py-3">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 0; @endphp
                            @foreach ($data as $all)
                            @php
                            $array = json_decode($all->fileName);
                            $count++;
                            @endphp
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">{{ $count }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('uploads/' . $array[0]) }}" alt="{{ $all->productName }}" class="w-16 h-16 object-cover rounded-lg" />
                                </td>
                                <td class="px-6 py-4">{{ $all->productName }}</td>
                                <td class="px-6 py-4">{{ $all->productPrice }}</td>
                                <td class="px-6 py-4">{{ $all->saleType }}</td>
                                <td class="px-6 py-4">
                                    <div class="badge badge-accent text-sm">{{ $all->Badge }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="badge badge-accent text-sm">{{ $all->productType }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="badge badge-accent text-sm">{{ $all->subCategory }}</div>
                                </td>
                                <td class="px-6 py-4">{{ $all->productDescription }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('products_edit',['productId' => $all->id]) }}" class="text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('products_delete',['productId' => $all->id]) }}" class="text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>



<script>
    // JavaScript for modal functionality
    const modal = document.getElementById('my_modal_3');
    const editForm = document.getElementById('editForm');
    const productNameInput = document.getElementById('productName');
    const productPriceInput = document.getElementById('productPrice');
    const saleTypeInput = document.getElementById('saleType');

    // Function to open modal and populate form fields with product data
    function openEditModal(product) {
        productNameInput.value = product.productName;
        productPriceInput.value = product.productPrice;
        saleTypeInput.value = product.saleType;
        modal.showModal();
    }

    // Function to close modal
    function closeEditModal() {
        modal.close();
    }

    // Event listener for form submission
    editForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Add your logic here to handle form submission (e.g., update product data)
        // You can access form fields using productNameInput.value, productPriceInput.value, saleTypeInput.value
        // Then close the modal
        closeEditModal();
    });
</script>



<script>
    // JavaScript for search functionality
    const searchInput = document.getElementById('table-search');
    const rows = document.querySelectorAll('tbody tr');


        searchInput.addEventListener('input', () => {
    const searchText = searchInput.value.toLowerCase();

        rows.forEach(row => {
            const fullName = row.textContent.toLowerCase();
            if (fullName.includes(searchText)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
