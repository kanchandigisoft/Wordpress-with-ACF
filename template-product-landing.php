<?php
/*
Template Name: Product Landing Page
*/
get_header();
?>





<style>
    @font-face {
    font-family: 'graphikbold';
    src: url('../fonts/graphikbold-webfont.woff2') format('woff2'),
        url('../fonts/graphikbold-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

.crousel_arrow_box {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    grid-gap: 8px;
}

.bg_off_white {
    background: #F7F5F1;
}

.crousel_wrapper {
    max-width: 1440px;
    margin: 0 auto;
}

.crousel_content h1 {
    color: #123B38;
    font-size: 34px;
    font-family: 'graphikbold';
    font-style: normal;
    font-weight: 600;
    line-height: 44.2px;
    letter-spacing: -0.68px;
    margin: 0;
}

.people_info h2 {
    color: #123B38;
    font-size: 16px;
    font-style: normal;
    font-family: 'graphik';
    font-weight: 400;
    line-height: 30px;
    margin-bottom: 0;
}

.people_info img {
    width: 40px;
    border-radius: 100px;
    object-fit: cover;
}

.people_info h4 {
    color: #123B38;
    font-size: 12px;
    font-style: normal;
    font-family: 'graphik';
    font-weight: 400;
    line-height: 22px;
    letter-spacing: 0.192px;
    margin-bottom: 0;
}

.crousel_right_img img {
    border-radius: 0px 20px 20px 0px;
    width: 650px;
    max-width: 100%;
    object-fit: cover;
}
</style>






<section class="vast_crousel bg_off_white">
  <div class="crousel_wrapper">
    <div class="vast__crousel">
      <div class="crousel_arrow_box">
        <div class="arrow__previous">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="20" transform="matrix(-1 0 0 1 40 0)" fill="white" />
            <path
              d="M10.8623 20.9131C10.604 20.6547 10.604 20.2298 10.8623 19.9714L18.1956 12.6381C18.454 12.3798 18.879 12.3798 19.1373 12.6381C19.3956 12.8964 19.3956 13.3214 19.1373 13.5798L12.9415 19.7756H28.6665C29.0331 19.7756 29.3331 20.0756 29.3331 20.4423C29.3331 20.8089 29.0331 21.1089 28.6665 21.1089H12.9415L19.1373 27.3048C19.3956 27.5631 19.3956 27.9881 19.1373 28.2464C18.879 28.5047 18.454 28.5047 18.1956 28.2464L10.8623 20.9131Z"
              fill="#EF525B" />
          </svg>
        </div>
        <div class="arrow__next">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="20" fill="#EF525B" />
            <path
              d="M29.1377 20.9131C29.396 20.6547 29.396 20.2298 29.1377 19.9714L21.8044 12.6381C21.546 12.3798 21.121 12.3798 20.8627 12.6381C20.6044 12.8964 20.6044 13.3214 20.8627 13.5798L27.0585 19.7756H11.3335C10.9669 19.7756 10.6669 20.0756 10.6669 20.4423C10.6669 20.8089 10.9669 21.1089 11.3335 21.1089H27.0585L20.8627 27.3048C20.6044 27.5631 20.6044 27.9881 20.8627 28.2464C21.121 28.5047 21.546 28.5047 21.8044 28.2464L29.1377 20.9131Z"
              fill="white" />
          </svg>
        </div>
      </div>
      <div class="vast_slider" id="crousel_1">
        <div class="row">
          <div class="col-md-3">
            <div class="crousel_content">
              <h1>“Such a vast improvement to speed and conversion!”</h1>
              <div class="people_info">
                <figure>
                  <img
                    src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/portrait-headshot-of-a-40-year-old-woman.png"
                    alt="">
                </figure>
                <h2>Olivia Martinez</h2>
                <h4>E-commerce Brand Manager</h4>
              </div>
              <div class="crousel_button">
                <a href="#" class="crousel_red_btn">See Pricing</a>
                <a href="#" class="crousel_white_btn">Visit Store</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="crousel_right_img">
              <figure>
                <img src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/Rectangle-3418.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="crousel_content">
              <h1>“Such a vast improvement to speed and conversion!”</h1>
              <div class="people_info">
                <figure>
                  <img
                    src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/portrait-headshot-of-a-40-year-old-woman.png"
                    alt="">
                </figure>
                <h2>Olivia Martinez</h2>
                <h4>E-commerce Brand Manager</h4>
              </div>
              <div class="crousel_button">
                <a href="#" class="crousel_red_btn">See Pricing</a>
                <a href="#" class="crousel_white_btn">Visit Store</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="crousel_right_img">
              <figure>
                <img src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/Rectangle-3418.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="crousel_content">
              <h1>“Such a vast improvement to speed and conversion!”</h1>
              <div class="people_info">
                <figure>
                  <img
                    src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/portrait-headshot-of-a-40-year-old-woman.png"
                    alt="">
                </figure>
                <h2>Olivia Martinez</h2>
                <h4>E-commerce Brand Manager</h4>
              </div>
              <div class="crousel_button">
                <a href="#" class="crousel_red_btn">See Pricing</a>
                <a href="#" class="crousel_white_btn">Visit Store</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="crousel_right_img">
              <figure>
                <img src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/Rectangle-3418.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="crousel_content">
              <h1>“Such a vast improvement to speed and conversion!”</h1>
              <div class="people_info">
                <figure>
                  <img
                    src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/portrait-headshot-of-a-40-year-old-woman.png"
                    alt="">
                </figure>
                <h2>Olivia Martinez</h2>
                <h4>E-commerce Brand Manager</h4>
              </div>
              <div class="crousel_button">
                <a href="#" class="crousel_red_btn">See Pricing</a>
                <a href="#" class="crousel_white_btn">Visit Store</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="crousel_right_img">
              <figure>
                <img src="https://staging.wholedesignstudios.com/wp-content/uploads/2024/11/Rectangle-3418.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








<script>
jQuery(document).ready(function(){ 


  $('.vast_slider').flickity({
    prevNextButtons: false,
    pageDots: true,
    groupCells: true,
    cellAlign: 'left',
    adaptiveHeight: true,
    imagesLoaded: true,
    wrapAround: true,
    autoPlay: 10000,
    pauseAutoPlayOnHover: false,
    draggable: true
});
  

});	
</script>


<?php get_footer(); ?>