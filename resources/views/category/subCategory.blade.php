

<nav class="bg-gray-800 dark:bg-red-100 mt-2">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                @foreach ($subcategory as $item)

                
                <li>
                     <a href="{{ route('check-category', ['id' => $item->subCategory]) }}" class="text-gray-50 dark:text-white hover:underline">{{$item->subCategory}}</a>
                </li>
                  @endforeach
            </ul>
        </div>
    </div>
</nav>