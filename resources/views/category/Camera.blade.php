
    <div class="fixed w-full z-50">
      @include('components.UserNavbar')
    </div>
  
    <div class="pt-16 flex flex-col lg:flex-row bg-gray-100">
  
      <!-- Side Links and New Arrival Section -->
      <div class="lg:w-88 mt-28 p-3 bg-gray-100 non-responsive  ">
        @include('components.sideLink2')
        {{-- @include('components.tooltip') --}}
        @include('components.newArival')
      </div>
  
      <!-- Main Content Section -->
   <div class="flex-1 w-full mt-8 lg:mt-28 lg:mx-3 p-3">
    {{-- @include('components.search') --}}
    @include('components.category') 
    <div class="flex flex-col lg:flex-row bg-gray-100 gap-4">
        <div class="w-full p-3">
            @include('category.subCategory')
            @include('components.moreTolove')
        </div>
        <div class="w-96  lg:justify-center">
            @include('components.slider2')
        </div>
    </div>
</div>


      <div class="flex-1 w-full  lg:mx-3 responsive">
      @include('components.search')
         @include('components.categories') 
        @include('category.subCategory')
       @include('components.moreTolove') 
      </div>
  
      <!-- Slider Section -->
  
  
    </div>
  
    <!-- Pagination Links -->
    <div class="mt-4">
      {{-- {{ $accessories->links() }} --}}
    </div>
  
    <!-- Footer -->
    @include('components.userFooter')
  
  </body>