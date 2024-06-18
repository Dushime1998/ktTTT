@include('Admin.AdminNav')
<div class="flex flex-col md:flex-row">
    <div class="md:w-1/4">
        @include('Admin.adminSidelink')
    </div>

    <div class="p-4 md:ml-64 mt-4 w-full">
        <div class="rounded-lg dark:border-gray-700">
            <h1 class="text-center text-2xl text-gray-900 mb-4">Sold Product</h1>

            {{-- ordered list --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-auto w-full">
                <div class="pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block w-full pt-2 pl-10 pr-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Customer Name</th>
                            <th scope="col" class="px-6 py-3">Customer Email</th>
                            <th scope="col" class="px-6 py-3">Customer Phone</th>
                            <th scope="col" class="px-6 py-3">Product Name</th>
                            <th scope="col" class="px-6 py-3">Product ID</th>
                            <th scope="col" class="px-6 py-3">Product Quantity</th>
                            <th scope="col" class="px-6 py-3">Product Total Price</th>
                            <th scope="col" class="px-6 py-3">Paid Status</th>
                            <th scope="col" class="px-6 py-3">Paid Ref Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">{{$item->name}}</td>
                            <td class="px-6 py-4">{{$item->last_name}}</td>
                            <td class="px-6 py-4">{{$item->email}}</td>
                            <td class="px-6 py-4">{{$item->phone}}</td>
                            <td class="px-6 py-4">{{$item->productId}}</td>
                            <td class="px-6 py-4">{{$item->productQuantity}}</td>
                            <td class="px-6 py-4">{{$item->productPrice}}</td>
                            <td class="px-6 py-4">{{$item->status}}</td>
                            <td class="px-6 py-4">{{$item->ref}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>


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
