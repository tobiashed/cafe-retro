<?php 
    define("PAGE_TITLE", "Cafe retro");
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
            <li class="nav-item active px-lg-4">
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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Besök oss</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Bästa caféet</span>
              <span class="section-heading-lower">Dagens första kopp hos oss</span>
            </h2>
            <p class="mb-3">
              Oavsett om du föredrar kaffe eller te: <br>
              Varje kopp vi serverar, utgår från bönor och blad av högsta kvalitet, från noga utvalda producenter. <br>
              Prova en kopp - vi törs lova att det kommer att bli något att se fram emot som morgonrutin!
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="store.php">Besök oss idag!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Vår vision</span>
                <span class="section-heading-lower">Vår ambition</span>
              </h2>
              <p class="mb-0">
                När du besöker oss ligger vårt fokus på att du skall få ett trevligt bemötande med god service, 
                 en vänlig miljö, och framförallt förstklassiga produkter ingredienser av högsta kvalitet. 
                 Vi lägger stor vikt vid att samarbeta med små, medvetna producenter och leverantörer, 
                 och strävar alltid efter att ha ekologi och rättvisemärkning i fokus.
                  Skulle det vara något du inte är nöjd med, säg till så lovar vi att göra allt vi kan för att åtgärda det. 
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>

      <?php include "footer.php" ?>
      </html>