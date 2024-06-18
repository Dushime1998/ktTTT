<template>
    <div>

                <!-- show on only small screen -->



                <div class="bg-red-100 md:hidden">

                  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                      <div class="">
                          <div class=" text-white">
                               <svg class="w-2 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                  <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                              </svg>07831592933
                          </div>
                      </div>

                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                      <a href="#" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                    </div>


                </div>



          </div>

          <!-- end of searchbar -->



          <div class="navbar bg-gray-900 text-neutral-content">
              <div class="w-full flex justify-center text-white" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-900 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-red-700 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center justify-center text-center">

                  <li>
                    <a href="#" class="block py-2 px-3 text-gray-100  rounded md:bg-transparent md:text-white md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                  </li>

                  <li>
                    <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Add product</a>
                </li>

                  <li>
                      <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Requested Suport</a>
                  </li>

                  <li>
                    <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sold Product</a>
                  </li>

                  <li>
                    <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ordered Product</a>
                  </li>

                  <li>
                    <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Feedback</a>
                  </li>

                    <li>
                      <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Edit About Us</a>
                    </li>

                    <li>
                      <a href="#" class="block py-2 px-3 text-gray-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-200 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Edit Contact us</a>
                    </li>

                  </ul>
              </div>
            </div>

          <!-- boby divs -->

          <!-- Item form -->
          <div class="h-full">
          <div v-if="appLoading" role="status" class=" w-full h-full flex justify-center items-center bg-gray-700 bg-opacity-50">
            <svg aria-hidden="true" class="w-8 h-ful text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
            <span class="sr-only">Loading...</span>
          </div>


        <div v-else>
          <div class="mt-5">
            <h1 class="text-center font-semibold text-gray-950">Add New Items</h1>
        </div>
          <div class="justify-center flex mt-4 ">



            <form class="ml-10 ms-10 w-96 justify-items-center" @submit.prevent="submitForm">
                <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
        <input type="text" v-model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required />
    </div>
<div class="mb-6">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
    <input type="number" v-model="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Product price" required />
</div>
<div class="mb-6">

    <label for="saleType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Sale Type</label>
    <select id="saleType" v-model="saleType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

      <option value="yes">On promotion</option>
      <option value="not">Not Promotion</option>
    </select>
</div>


<div class="mb-6">

    <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping method</label>
    <select id="shipping" v-model="shipping" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      <option selected>Free</option>
      <option value="pay">Payed</option>
    </select>
</div>
    <div class="mb-6">

            <label for="ProductType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Type</label>
            <select id="ProductType" v-model="ProductType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

              <option value="tv">TV</option>
              <option value="Radio">Radio</option>
              <option value="decoder">Decoder</option>
              <option value="dish">Dish</option>
              <option value="sound">Sound</option>
              <option value="other">Other</option>
            </select>
    </div>

    <div class="mb-6 ">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Write Product Description</label>
        <textarea id="description" v-model="description" rows="4" class=" border border-gray-300 rounded-lg w-full px-0 text-sm text-gray-900 bg-white  dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write product description..." required></textarea>

    </div>



    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Product Images</label>
        <input @change="handleFileUpload" ref="fileInput" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" multiple required name="file_input[]">

      </div>

      <div v-if="files.length > 0" class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selected Images:</label>
        <div class="">
          <div v-for="(file, index) in files" :key="index" class="w-1/4 p-2">
            <div class="grid grid-cols-5 gap-4">
                <div>
            <img :src="file.url" :alt="'Selected Image ' + (index + 1)" class="w-full h-auto">
            <button @click="removeImage(index)" class="mt-2 bg-red-500 text-white px-3 py-1 rounded-lg">Delete</button>
                </div>
            </div>
        </div>
        </div>
      </div>


    <button type="submit" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit Product</button>
</form>

</div></div>
          </div>
          <!-- end of search input -->
          </div>

</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      files: [],
      appLoading: false,
    };
  },
  methods: {
    handleFileUpload(event) {
      this.files = [];
      const files = event.target.files;
      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const url = URL.createObjectURL(file);
        this.files.push({ file, url });
      }
    },
    removeImage(index) {
      this.files.splice(index, 1);
    },

    submitForm() {
      this.appLoading = true;
      let formData = new FormData();
      formData.append('name', this.name);
      formData.append('price', this.price);
      formData.append('saleType', this.saleType);
      formData.append('shipping', this.shipping);
      formData.append('productType', this.ProductType);
      formData.append('description', this.description);
      this.files.forEach((file, index) => {
        formData.append(`file`, file.file);
        // formData.append(`file${index + 1}`, file.file);
      });
      axios.post('/products', formData)
        .then(response => {
          console.log(response.data.message);
          console.log(response.data.data);
          this.resetForm();
        })
        .catch(error => {
          console.error(error);
        })
        .finally(() => {
          this.appLoading = false;
        });
    },

    resetForm() {
      this.name = '';
      this.price = '';
      this.saleType = '';
      this.shipping = '';
      this.ProductType = '';
      this.description = '';
      this.files = [];
      this.$refs.fileInput.value = '';
    }
  }
};
</script>




