
    @include('components.UserNavbar')
    
<div class="responsive">
            @include('components.search')
        @include('components.categories')
</div>

    <!-- Hero Section -->
    <section class="bg-gray-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-50">About Us</h1>
            <p class="mt-4 text-lg text-gray-50">Your trusted partner in electronic components and devices</p>
        </div>
    </section>

    <!-- Company Mission and Values -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-800">Our Mission</h2>
                <p class="mt-4 text-gray-600">To provide high-quality electronic components and devices with exceptional customer service, making technology accessible for everyone.</p>
            </div>
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-800">Our Values</h2>
                <div class="flex flex-wrap justify-center mt-4">
                    <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h4 class="text-lg font-semibold text-gray-700">Quality</h4>
                            <p class="mt-2 text-gray-600">We ensure top-notch quality in all our products and services.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h4 class="text-lg font-semibold text-gray-700">Customer Service</h4>
                            <p class="mt-2 text-gray-600">Our customers are our priority, and we strive to exceed their expectations.</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 lg:w-1/4 px-4 mb-8">
                        <div class="bg-white shadow rounded-lg p-6">
                            <h4 class="text-lg font-semibold text-gray-700">Innovation</h4>
                            <p class="mt-2 text-gray-600">We embrace innovation to bring you the latest technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-800">Our History</h2>
                <p class="mt-4 text-gray-600">Founded in 2010, we have grown from a small startup to a leading provider of electronic components and devices.</p>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-2/3 px-4">
                    <img src="https://via.placeholder.com/1200x600" alt="Company History" class="w-full rounded-lg shadow-lg mb-8">
                    <p class="text-gray-600">Our journey began with a passion for technology and a commitment to customer satisfaction. Over the years, we have expanded our product range, built a strong customer base, and established ourselves as a trusted name in the industry. We continue to innovate and grow, always staying true to our mission and values.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <!--<section class="py-12 bg-white">-->
    <!--    <div class="container mx-auto px-4">-->
    <!--        <div class="text-center mb-12">-->
    <!--            <h2 class="text-3xl font-semibold text-gray-800">Meet the Team</h2>-->
    <!--            <p class="mt-4 text-gray-600">Our dedicated team of professionals is here to serve you.</p>-->
    <!--        </div>-->
    <!--        <div class="flex flex-wrap justify-center">-->
    <!--            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">-->
    <!--                <div class="bg-white shadow rounded-lg p-6 text-center">-->
    <!--                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">-->
    <!--                    <h4 class="text-lg font-semibold text-gray-700">John Doe</h4>-->
    <!--                    <p class="mt-2 text-gray-600">CEO</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">-->
    <!--                <div class="bg-white shadow rounded-lg p-6 text-center">-->
    <!--                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">-->
    <!--                    <h4 class="text-lg font-semibold text-gray-700">Jane Smith</h4>-->
    <!--                    <p class="mt-2 text-gray-600">CTO</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">-->
    <!--                <div class="bg-white shadow rounded-lg p-6 text-center">-->
    <!--                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">-->
    <!--                    <h4 class="text-lg font-semibold text-gray-700">Mike Johnson</h4>-->
    <!--                    <p class="mt-2 text-gray-600">COO</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">-->
    <!--                <div class="bg-white shadow rounded-lg p-6 text-center">-->
    <!--                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 rounded-full mx-auto mb-4">-->
    <!--                    <h4 class="text-lg font-semibold text-gray-700">Emily Davis</h4>-->
    <!--                    <p class="mt-2 text-gray-600">CFO</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Customer Testimonials -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-800">What Our Customers Say</h2>
                <p class="mt-4 text-gray-600">Our customers love us! Here's what they have to say:</p>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow rounded-lg p-6">
                        <p class="text-gray-600 mb-4">"Great service and high-quality products. Highly recommended!"</p>
                        <h4 class="text-lg font-semibold text-gray-700">Kigali Nziza</h4>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow rounded-lg p-6">
                        <p class="text-gray-600 mb-4">"Quick delivery and excellent customer support. Will buy again."</p>
                        <h4 class="text-lg font-semibold text-gray-700">Justin</h4>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white shadow rounded-lg p-6">
                        <p class="text-gray-600 mb-4">"The rental service is a game-changer. Very convenient and affordable."</p>
                        <h4 class="text-lg font-semibold text-gray-700">Dushimimana Alexandre</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    
    
    
    

    @include('components.userFooter')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
