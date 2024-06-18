
{{-- second navbar --}}

{{-- end of second navbar --}}


<div class="navbar  bg-base-100 responsive">

    <div class="flex-none">
        <div class="dropdown">
            
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </div>
           
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-50 p-2 shadow bg-gray-100 rounded-box w-52">
            @include('components.sideLink2')
            </ul>
        
        </div>

        <div>
            <h1 class="text-center font-bold">
                KIGALI TECHNICAL ZONE
            </h1>
        </div>
    </div>
                  
</div>       
 


 


  <form action="{{ route('product_search') }}" method="GET" class="w-full mx-auto mt-4 px-4 responsive">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="search" id="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search product name or price..." required />
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-gray-700 to-gray-600 hover:from-gray-800 hover:to-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:from-gray-800 dark:hover:to-gray-700 dark:focus:ring-gray-800">Search</button>
    </div>
</form>
