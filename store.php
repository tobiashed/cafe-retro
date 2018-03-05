<?php 
    define("PAGE_TITLE", "Besök oss");
    include "header.php";
?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">Café retro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Hem
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">Om oss</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Produkter</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Besök oss</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Välkommen in!</span>
                <span class="section-heading-lower">Vi har öppet</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Söndag
                  <span class="ml-auto">Stängt</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Måndag
                  <span class="ml-auto">10:00 till 17:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tisdag
                  <span class="ml-auto">10:00 till 17:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Onsdag
                  <span class="ml-auto">10:00 till 17:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Torsdag
                  <span class="ml-auto">10:00 till 17:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Fredag
                  <span class="ml-auto">10:00 till 17:00</span>
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Lördag
                  <span class="ml-auto">11:00 till 16:00</span>
                </li>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>Storgatan 1</strong>
                  <br>
                  Stockholm
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Ring oss</em>
                </small>
                <br>
                (08) 123456
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                  <span class="section-heading-lower">About Our Cafe</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in
                  <em>lust</em>
                  with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include "footer.php" ?>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
