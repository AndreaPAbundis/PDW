
  <style>
    html, body {
      position: relative;
      height: 40%;
    }
    body {
      background: #fff;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
      margin-top: 2rem;
      text-align: center;
    }
    .swiper-container img{
      width: 60%;
    }
    .swiper-pagination{
      width: 100%;
      display: flex;
      justify-content: center;
      height: 32px;
      align-items: center;
    }
    .swiper-pagination-clickable .swiper-pagination-bullet{
      margin: 0 4px;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
    }
    .swiper-pagination-bullet-active{
      background: black;
    }
    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction{
      bottom: 2px;
    }
  </style>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
				<img src="https://dummyimage.com/340x267/000/fff">
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/340x267/000/fff">
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/340x267/000/fff">
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/340x267/000/fff">
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/340x267/000/fff">
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/340x267/000/fff">
      </div>
    </div>
    <!-- Add Pagination -->
    <!-- Add Arrows -->
    <!--<div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>-->
  </div>
  <div class="swiper-pagination"></div>

  <!-- Swiper JS -->
  <script src="swiper/dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 50,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
