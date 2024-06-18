<div class="overflow-auto h-auto text-justify">
    <h1 class="text-center font-bold mb-4">New Arrival</h1>
    @foreach ($arrival as $arrived)
        @php
            $array = json_decode($arrived->fileName);
        @endphp

        <div class="card w-48 bg-gray-100 shadow-xl py-4 mt-4 mx-auto">
            <figure>
                <a href="{{ route('products_show', ['productId' => $arrived->id]) }}">
                    <img src="{{ asset('uploads/' . $array[0]) }}" class="w-24 h-32 object-cover rounded-t-lg transition-transform hover:scale-110" alt="product image" />
                </a>
            </figure>

            <div class="card-body">
                <h2 class="card-title flex items-center justify-between">
                    Delivery
                    <div class="bg-red-500 text-white px-1 py-0.5 rounded-lg text-xs">Free</div>
                </h2>
                <p>Remote for all tv</p>
                <div class="card-actions justify-end">
                    <div class="badge badge-outline">Electronic</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
