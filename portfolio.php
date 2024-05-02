 <?php
include 'common/header.php';
 ?>
 
 <!-- Portfolio Section - Home Page -->
 <section id="portfolio" class="portfolio">

<!--  Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Portfolio</h2>
  <p>It's My Projects</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">App</li>
      <li data-filter=".filter-product">Card</li>
      <li data-filter=".filter-branding">Web</li>
    </ul><!-- End Portfolio Filters -->

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="picture/bulb.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>Bulb Turn ON/OFF</p>
          <a href="picture/bulb.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <img src="picture/car.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Product 1</h4>
          <p>Car Animation</p>
          <a href="picture/car.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <img src="picture/login1.png" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Branding 1</h4>
          <p>Login Registration Form</p>
          <a href="picture/login1.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="picture/weather1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>Weather App API</p>
          <a href="picture/weather1.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <img src="picture/netflix.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Product 2</h4>
          <p>Netflix</p>
          <a href="picture/netflix.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <img src="picture/increment.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Branding 2</h4>
          <p>Increment Counter</p>
          <a href="picture/increment.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="picture/animal.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>Animals Animation</p>
          <a href="picture/animal.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <img src="picture/temprature.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Product 3</h4>
          <p>Teamprature Converter</p>
          <a href="picture/temprature.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <img src="picture/thermometer.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Branding 3</h4>
          <p>Animated Thermometer</p>
          <a href="picture/thermometer.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- End Portfolio Section -->

<?php
include 'common/footer.php';
?>