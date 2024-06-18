
          <!-- show on only small screen -->

          @include('components.UserNavbar')
         <div class="flex ">
        <!-- left div -->
        <div class=" h-auto text-center justify-center w-96 ms-3 non-responsive ">
         @include('components.sideLink2')


        </div>
     <div class="bg-gray-100 h-auto w-full">
       <div class="mt-4">
            
        <div class="mt-5">

        @include('components.search')
   @include('components.category')

      <h1 class="font-semibold t text-2xl text-red-500">Result For {{$id}}</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2 "id="dataGrid">
        @foreach ($result as $product)
        @php
            $array = json_decode($product->fileName);
        @endphp

        <div   class="product">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ route('products_show', ['productId' => $product->id]) }}">

                    <img src="{{ asset('uploads/' . $array[0]) }}" class="w-full h-56 object-cover rounded-t-lg" alt="product image" />
                </a>
                <div class="px-4 py-4">
                    <a href="{{ route('products_show', ['productId' => $product->id]) }}" class="block">
                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ substr($product->productName, 0, 15) }}{{ strlen($product->productName) > 15 ? '...' : '' }}
                        </h5>
                    </a>

                    <div class="flex items-center justify-between mt-2">
                        <span class="text-sm font-bold text-gray-900 dark:text-white">FRW {{ $product->productPrice }}</span>
                        <a href="{{ route('addTocart', ['id' => $product->id]) }}" class="rounded-lg tooltip text-black" data-tip="Add To Cart">
                            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="cartAddIconTitle" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000000"> <title id="cartAddIconTitle">Add do cart</title> <path d="M21.2922 6L19.9463 14.1627C19.8666 14.6457 19.4491 15 18.9596 15H7.04304C6.55355 15 6.136 14.6457 6.05636 14.1627L4.84851 6.83731C4.76887 6.35434 4.35133 6 3.86183 6H2"/> <path d="M8 20C8.55228 20 9 19.5523 9 19C9 18.4477 8.55228 18 8 18C7.44772 18 7 18.4477 7 19C7 19.5523 7.44772 20 8 20Z"/> <path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z"/> <path d="M16 8H10"/> <path d="M13 5V11"/> </svg>

                        </a>
                    </div>
                </div>
            </div>
          </div>
          @endforeach
       </div>
      </div>
       </div>
     </div>


      </div>


@include('components.userFooter')
 </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>




<script>
    // Get the search input element
    const searchInput = document.getElementById('search');

    const items = document.querySelectorAll('.product');


    searchInput.addEventListener('input', function () {

        const searchValue = this.value.toLowerCase();

        items.forEach(item => {

            const itemTextContent = item.textContent.toLowerCase();
            // Check if the search value is included in the item's text content
            if (itemTextContent.includes(searchValue)) {
                // Show the item if it includes the search value
                item.style.display = 'block';
            } else {
                // Hide the item if it doesn't include the search value
                item.style.display = 'none';
            }
        });
    });
</script>
