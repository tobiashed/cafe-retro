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
              <a class="nav-link text-uppercase text-expanded" href="products.php">Second hand</a>
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2034.2616036130335!2d18.021236615823554!3d59.3452808816644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssv!2sse!4v1520258429160" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
