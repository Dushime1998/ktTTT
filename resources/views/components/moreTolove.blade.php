<!-- Accessories section -->
<div class="max-w-7xl mx-auto px-4 py-8">
    {{-- <h1 class="text-gray-900 font-semibold text-start text-2xl mb-4">More to love</h1> --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        {{-- Loop through accessories --}}
        @foreach ($accessories as $accessory)
        @php
        $array = json_decode($accessory->fileName);
        @endphp
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
            @if($accessory->Badge =='0')
            <span class="bg-red-500 text-white px-1 py-0.5 rounded-lg text-xs hidden">New</span>
            @else
            <span class="bg-red-500 text-white px-1 py-0.5 rounded-lg text-xs m-2">{{ $accessory->Badge }}</span>
            @endif
            <a href="{{ route('products_show', ['productId' => $accessory->id]) }}" class="block overflow-hidden">
                <img src="{{ asset('uploads/' . $array[0]) }}" alt="{{ $accessory->productName }}" class="w-full h-32 object-cover rounded-t-lg transition-transform duration-300 hover:scale-110" />
            </a>
            <div class="px-4 py-4">
                <a href="{{ route('products_show', ['productId' => $accessory->id]) }}">
                    <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white truncate">
                        {{ substr($accessory->productName, 0, 15) }}{{ strlen($accessory->productName) > 15 ? '...' : '' }}
                    </h5>
                </a>
                <div class="flex items-center justify-between mt-2">
                    <h1 class="font-semibold text-sm">
                        <span class="text-xs">Rwf</span>
                        <span class="text-sm font-bold text-gray-900 dark:text-white">{{ $accessory->productPrice }}</span>
                    </h1>
                    <a href="{{ route('addTocart', ['id' => $accessory->id]) }}" class="rounded-lg tooltip text-black dark:text-white" data-tip="Add To Cart">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="cartAddIconTitle" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none">
                            <title id="cartAddIconTitle">Add to cart</title>
                            <path d="M21.2922 6L19.9463 14.1627C19.8666 14.6457 19.4491 15 18.9596 15H7.04304C6.55355 15 6.136 14.6457 6.05636 14.1627L4.84851 6.83731C4.76887 6.35434 4.35133 6 3.86183 6H2"/>
                            <path d="M8 20C8.55228 20 9 19.5523 9 19C9 18.4477 8.55228 18 8 18C7.44772 18 7 18.4477 7 19C7 19.5523 7.44772 20 8 20Z"/>
                            <path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z"/>
                            <path d="M16 8H10"/>
                            <path d="M13 5V11"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
