{{-- <div>
       @include('components.categories')
    </div> --}}
    <!-- Title -->
    <h1 class="text-gray-900 font-medium bg-gray-100  text-2xl">
        Deal of The week
        {{-- <span class="bg-red-600 text-white px-2 py-1 absolute  rounded-bl-lg rounded-tr-lg"> discounted</span> --}}
        <div class="badge bg-red-600" style="background-color:red; color:white"> Discounted</div>
       </h1>
       <!-- Grid of products -->
       <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4" >

           @foreach ($topElectronic->chunk(4) as $summirizedElc)
               <!-- Loop through each product in the chunk -->
               @foreach ($summirizedElc as $electronic)
                   @php
                       $array = json_decode($electronic->fileName);
                   @endphp
                   <!-- Product card -->
                   <div class="product">
                       <!-- Product image -->
                       <span class="bg-red-500 text-white px-2 py-1  rounded-bl-lg rounded-tr-lg">-{{ $electronic->discount }}%</span>

                       <a href="{{ route('products_show', ['productId' => $electronic->id]) }}">
                           <img src="{{ asset('uploads/' . $array[0]) }}" class="w-full h-56 object-cover rounded-t-lg  transition-transform  hover:scale-110" alt="product image" />
                       </a>
                       <!-- Product details -->
                       <div class="w-full max-w-sm bg-white  shadow-lg dark:bg-gray-800 ">
                           <div class="px-4 py-4">
                               <!-- Product name -->
                               <a href="{{ route('products_show', ['productId' => $electronic->id]) }}" class="block">
                                   <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">
                                       {{ substr($electronic->productName, 0, 15) }}{{ strlen($electronic->productName) > 15 ? '...' : '' }}
                                   </h5>
                               </a>
                               <!-- Product price and Add to Cart button -->
                               <div class="flex items-center justify-between mt-2">
                                   <!-- Product price -->
                                <h1 class="font-semibold text-xs">
                                        <span class="text-xs">RWF</span>
                                        <span class="text-sm font-bold text-gray-900 dark:text-white">{{ $electronic->productPrice }}</span>
                                </h1>

                                   <!-- Add to Cart button -->
                                   <a href="{{ route('addTocart', ['id' => $electronic->id]) }}" class="rounded-lg tooltip text-black" data-tip="Add To Cart">
                                       <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                       <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="cartAddIconTitle" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000000"> <title id="cartAddIconTitle">Add do cart</title> <path d="M21.2922 6L19.9463 14.1627C19.8666 14.6457 19.4491 15 18.9596 15H7.04304C6.55355 15 6.136 14.6457 6.05636 14.1627L4.84851 6.83731C4.76887 6.35434 4.35133 6 3.86183 6H2"/> <path d="M8 20C8.55228 20 9 19.5523 9 19C9 18.4477 8.55228 18 8 18C7.44772 18 7 18.4477 7 19C7 19.5523 7.44772 20 8 20Z"/> <path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z"/> <path d="M16 8H10"/> <path d="M13 5V11"/> </svg>

                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
               @endforeach
           @endforeach
       </div>


