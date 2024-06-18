<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body>


          <!-- show on only small screen -->

          @include('components.UserNavbar')

{{--
  <div id="details">

  </div> --}}

  <div>






{{-- table --}}
<div class="p-4  mt-4">
    <div class="rounded-lg dark:border-gray-700">
        <h1 class="text-center text-2xl text-gray-900">Sold Product</h1>

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

            <table class="w-full text-xm text-left text-gray-500 dark:text-gray-400 mx-auto">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="w-full text-xm">
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">First Name</th>
                        <th scope="col" class="px-6 py-3">Last Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">Product ID</th>
                        <th scope="col" class="px-6 py-3">Product Price</th>
                        <th scope="col" class="px-6 py-3">Payment Status </th>
                        <th scope="col" class="px-6 py-3">Product Quantity</th>
                        <th scope="col" class="px-6 py-3">Customer Id </th>
                        <th scope="col" class="px-6 py-3">Payed At</th>
                        <th scope="col" class="px-6 py-3">Payed Ref Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                          1
                        </td>
                        <td class="px-6 py-4">
                            {{$item->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->last_name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$item->phone}}
                          </td>
                        <td class="px-6 py-4">
                            {{$item->productId}}
                        </td>

                        <td class="px-6 py-4">
                            {{$item->productPrice}}
                          </td>



                          <td class="px-6 py-4">
                            <div class="badge bg-yellow-400 sm:w-32 md:w-40 lg:w-48 xl:w-56">

                            {{$item->status}}
                            </div>
                          </td>

                          <td class="px-6 py-4">
                            {{$item->productQuantity}}
                          </td>



                          <td class="px-6 py-4">
                             <p>{{$item->created_at}}</p>


                          </td>

                          <td class="px-6 py-4">
                            {{$item->ref}}
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- end of table --}}







    <div class="container mx-auto">
        <h1 class="text-gray-900 font-semibold text-start text-2xl">You may Also Like</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 justify-center mt-4">
            @foreach ($relate as $related)
            @php
                $array = json_decode($related->fileName);
            @endphp
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ route('products_show', ['productId' => $related->id]) }}">
                    <img src="{{ asset('uploads/' . $array[0]) }}" alt="{{ $related->productName }}" class="w-full h-56 object-cover rounded-t-lg" />
                </a>
                <div class="px-4 py-4">
                    <a href="{{ route('products_show', ['productId' => $related->id]) }}">
                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $related->productName }}
                        </h5>
                    </a>
                    <div class="flex items-center justify-between mt-2">
                        <span class="text-sm font-bold text-gray-900 dark:text-white">RWF {{ $related->productPrice }}</span>
                        <a href="{{ route('addTocart', ['id' => $related->id]) }}" class="rounded-lg tooltip text-black" data-tip="Add To Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 tooltip" data-tip="hello">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



  <!-- footer -->

  @include('components.userFooter')

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
