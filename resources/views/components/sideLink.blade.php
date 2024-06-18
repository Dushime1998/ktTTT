{{-- <h1 class="text-center text-black font-semibold">
    Categories
</h1> --}}

<ul class="menu relative  w-auto rounded-box  ">


    <li>
        <p class=" hover:bg-gray-900 hover:text-gray-50 ">
            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Categories
        </p>
    </li>



    <div class="mt-2 bg-gray-100 flex w-full justify-center">
        <select class="px-4 py-2 w-full hover:bg-gray-900 bg-gray-100 text-gray-900 text-sm hover:text-gray-50" onchange="location = this.value;">
            <option selected disabled>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                </svg>
                TV
            </option>
            @foreach ($CategoryTv as $item)
                <option value="{{ route('check-category', ['id' => $item->subCategory]) }}">
                    {{ $item->subCategory }}
                </option>
            @endforeach
        </select>
    </div>










          <div class="mt-2 bg-gray-100 flex w-full justify-center">
            <select class="px-4 py-2 w-full hover:bg-gray-900 bg-gray-100 text-gray-900 text-sm focus:bg-gray-900 hover:text-gray-50" onchange="location = this.value;">
                <option selected disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 7.5 16.5-4.125M12 6.75c-2.708 0-5.363.224-7.948.655C2.999 7.58 2.25 8.507 2.25 9.574v9.176A2.25 2.25 0 0 0 4.5 21h15a2.25 2.25 0 0 0 2.25-2.25V9.574c0-1.067-.75-1.994-1.802-2.169A48.329 48.329 0 0 0 12 6.75Zm-1.683 6.443-.005.005-.006-.005.006-.005.005.005Zm-.005 2.127-.005-.006.005-.005.005.005-.005.005Zm-2.116-.006-.005.006-.006-.006.005-.005.006.005Zm-.005-2.116-.006-.005.006-.005.005.005-.005.005ZM9.255 10.5v.008h-.008V10.5h.008Zm3.249 1.88-.007.004-.003-.007.006-.003.004.006Zm-1.38 5.126-.003-.006.006-.004.004.007-.006.003Zm.007-6.501-.003.006-.007-.003.004-.007.006.004Zm1.37 5.129-.007-.004.004-.006.006.003-.004.007Zm.504-1.877h-.008v-.007h.008v.007ZM9.255 18v.008h-.008V18h.008Zm-3.246-1.87-.007.004L6 16.127l.006-.003.004.006Zm1.366-5.119-.004-.006.006-.004.004.007-.006.003ZM7.38 17.5l-.003.006-.007-.003.004-.007.006.004Zm-1.376-5.116L6 12.38l.003-.007.007.004-.004.007Zm-.5 1.873h-.008v-.007h.008v.007ZM17.25 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Zm0 4.5a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                    </svg>
                    Radio
                </option>
                @foreach ($Categoryradio as $item)
                    <option value="{{ route('check-category', ['id' => $item->subCategory]) }}">
                        {{ $item->subCategory }}
                    </option>
                @endforeach
            </select>
        </div>










          <div class="mt-2 bg-gray-100 flex w-full justify-center">
            <select class="px-4 py-2 w-full bg-gray-100 text-gray-900 text-sm focus:bg-gray-900 hover:bg-gray-900 hover:text-gray-50" onchange="location = this.value;">
                <option selected disabled>@include('components.securitySVG') Security</option>
                @foreach ($Categorycamera as $item)
                    <option value="{{ route('check-category', ['id' => $item->subCategory]) }}">
                        {{ $item->subCategory }}
                    </option>
                @endforeach
            </select>
        </div>




          <div class="mt-2 bg-gray-100 flex w-full justify-center">
            <select class="px-4 py-2 w-full bg-gray-100 text-gray-900 text-sm hover:bg-gray-900 hover:text-gray-50" onchange="location = this.value;">
                <option selected disabled>@include('components.accessorySVG') Accessory</option>
                @foreach ($Categoryaccessory as $item)
                    <option value="{{ route('check-category', ['id' => $item->subCategory]) }}">
                        {{ $item->subCategory }}
                    </option>
                @endforeach
            </select>
        </div>







        <div class="mt-2 bg-gray-100 flex w-full justify-center">
            <select class="px-4 py-2 w-full hover:bg-gray-900 bg-gray-100 text-gray-900 text-sm hover:text-gray-50" onchange="location = this.value;">
                <option selected disabled>
                    Rental Tool
                </option>
                <option value="{{ route('check-category', ['id' => 'sound']) }}">Hlti</option>
                <option value="{{ route('check-category', ['id' => 'sound']) }}">Grinder</option>
            </select>
        </div>
         </ul>
