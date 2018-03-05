<?php 
    define("PAGE_TITLE", "Produkter");
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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Produkter</a>
            </li>
            <li class="nav-item px-lg-4">
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
                <span class="section-heading-upper">Vi är återförsäljare till Retrobutiken</span>
                <span class="section-heading-lower">Produkter</span>
              </h2>
              <?php

              // Hämta data (JSON) via en webshopens endpoint
              $data = file_get_contents(
              "http://localhost/Backend/Modul-3-API/retrobutiken/products/api/index.php"
             
);

// Kontrollera data
if(empty($data)){
  echo "<h2>Problem med att hämta data!</h2>";
  exit;
}

// Konvertera JSON-data till en PHP-array
$array = json_decode($data, true);

// Testa arrayen.
if(!is_array($array)){
echo "<h2>Problem med att skapa en array!</h2>";
exit;
}

// Välj data att presentera/skriva ut (som en tabell)
echo "<div class='table-responsive-sm'>";
echo "<table class='table table-bordered table-striped'>";
echo "<tr><th>Artikelnr</th><th>Namn</th><th>Beskrivning</th><th>Pris</th><th>Bild</th></tr>";
foreach ($array as $key => $value) {
  echo "<tr>";
  echo "<td>" . $value['artikelnr'] . "</td>";
  echo "<td>" . $value['namn'] . "</td>";
  echo "<td>" . $value['beskrivning'] . "</td>";
  echo "<td>" . $value['pris'] . "</td>";
  echo "<td><img src='../../retrobutiken/Bilder/" . $value['bild'] . "' alt='' class='img-thumbnail' width='80px' height='80px'></td>";
  echo "</tr>";
  
}
echo "</table>";
echo "</div>";

?>
            </div>
          </div>
        </div>
      </div>
    </section>



<?php include "footer.php" ?>
</html>

