
    <!-- Fixed Navbar -->
    <div class="fixed w-full z-50   ">
      @include('components.UserNavbar')
    </div>
  
    <div class="pt-16 flex flex-col lg:flex-row bg-gray-100">
  
      <!-- Side Links and New Arrival Section -->
      <div class="lg:w-88 mt-24 p-3 bg-gray-100 non-responsive  ">
        @include('components.sideLink2')
        {{-- @include('components.tooltip') --}}
        @include('components.newArival')
      </div>
  
      <!-- Main Content Section -->
      <div class="flex-1 w-full mt-24 lg:mx-3 non-responsive">
        <div class="m-4">
         @include('components.category')
       </div>
           <div class=" flex flex-col lg:flex-row bg-gray-100 ">
<div>
   
            <!--<h1 class=" motion-safe:animate-bounce text-xl font-bold text-red-500 blink">Discover exclusive deals and premium products you won't find anywhere else!</h1>-->
            <h1 class=" text-xl font-bold text-red-500 ">Discover exclusive deals and premium products you won't find anywhere else!</h1
    @include('components.moreTolove')
</div>
<div>
    @include('components.slider2')
</div>

       </div>
      </div>

      <div class="flex responsive">
           <!--@include('components.navibar2')-->
        @include('components.search')
        @include('components.categories')
        <!--<h1>Discover exclusive premium products</h1>-->
         @include('components.moreTolove')
      </div>
  
      <!-- Slider Section -->

  
    </div>
  
    <!-- Pagination Links -->


<div>
             @include('components.lastMoreTolove')
</div>

  <div class="mt-4 text-center">
    <div class="flex flex-col items-center md:flex-row md:justify-center">
        <div class="mb-2 md:mb-0">
            {{ $accessories->links() }}
        </div>
    </div>
</div>
    <!-- Footer -->
    @include('components.userFooter')
  
  </body>