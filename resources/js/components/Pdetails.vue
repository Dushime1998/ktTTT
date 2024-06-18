<template>

  </template>
  <script>
export default {
  data() {
    return {
      imageUrl: '/image/logo.jpg',
      ServiceUrl: '/image/services.jpg',
      BannerUrl: '/image/banner.jpg',
      TechUrl:'/image/tech.jpeg',
      TvUrl:'/image/tv/tv.jpeg',

      Accessories1:'/image/accessories/adapter1.jpeg',
      Accessories2:'/image/accessories/adapter2.jpeg',
      Accessories3:'/image/accessories/adapter3.jpeg',
      Accessories4:'/image/accessories/remote1.jpeg',
      Accessories5:'/image/accessories/remote2.jpeg',



      Radio1Url:'/image/radio/radio1.jpeg',
      Radio2Url:'/image/radio/radio2.jpeg',
      Radio3Url:'/image/radio/radio3.jpeg',
      Radio4Url:'/image/radio/radio4.jpeg',

      Decoder1Url:'/image/decoder/decoder.jpeg',
      Decoder2Url:'/image/decoder/decoder1.jpeg',
      Decoder3Url:'/image/decoder/decoder2.jpeg',
      Decoder4Url:'/image/decoder/decoder3.jpeg',
      Decoder5Url:'/image/decoder/decoder4.jpeg',
      Decoder6Url:'/image/decoder/decoder5.jpeg',


      images: [
        'sound1.jpeg',
        'sound2.jpeg',
        'sound3.jpeg',
        'sound4.jpeg'
      ],

      dstv: [
        'canal1.jpeg',
        'canal2.jpeg',
        'canal3.jpeg',
        'dstv1.jpeg',
        'dstv2.jpeg',
        'dstv3.jpeg',
        'dstv4.jpeg',
      ],
      currentIndexSound: 0,
      intervalIdSound: null,
      currentIndexTv: 0,
      intervalIdTv: null,

      intervalDuration: 3000, // Change image every 3 seconds
      relateProduct:[],
      choosenProduct:[],
      fetchedData: null,

    };
  },
  computed: {
    currentImageSound() {
        return `/image/${this.images[this.currentIndexSound]}`;
    },

    currentImageTv() {
        return `/image/dstv/${this.dstv[this.currentIndexTv]}`;
    }
  },
  mounted() {
    this.startSlidingSound();
    this.startSlidingTv();

    this.fetchData(); // Initial fetch
    this.pollingInterval = setInterval(() => {
      this.fetchData();
    }, 2000);
  },
  methods: {

    fetchData() {
      axios.get('/productDetail')
        .then(response => {
          this.choosenProduct = response.data.result;
          this.currentData = response.data.data;
          this.relateProduct = response.data.relate;
          console.log('choosen Product', this.choosenProduct);
          console.log('Related Product', this.relateProduct);
        })
        .catch(error => {
          console.error('Error fetching data', error);
        });
    },

    startSlidingSound() {
      this.intervalIdSound = setInterval(() => {
        this.currentIndexSound = (this.currentIndexSound + 1) % this.images.length;
      }, this.intervalDuration);
    },
    stopSlidingSound() {
      clearInterval(this.intervalIdSound);
    },

    startSlidingTv() {
      this.intervalIdTv = setInterval(() => {
        this.currentIndexTv = (this.currentIndexTv+ 1) % this.images.length;
      }, this.intervalDuration);
    },

    stopSlidingTv() {
      clearInterval(this.intervalIdTv);
    },

  },




    beforeDestroy() {
    this.stopSlidingSound();
    this.stopSlidingTv();
    clearInterval(this.pollingInterval);
  },
};
</script>


