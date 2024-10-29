<?php

include "Soporte.php";

    $soporte1 = new Soporte("Tenet", 22, 3);
    echo "<strong>" . $soporte1->titulo . "</strong>";
    echo "<br>Precio: " . $soporte1->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros <br>";
    echo $soporte1->muestraResumen();

include "cintavideo.php";

    $miCinta = new Cintavideo("Los cazafantasmas", 23, 3.5, 107);
    echo "<br><br><strong>" . $miCinta->titulo . "</strong>";
    echo "<br>Precio: " . $miCinta->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros<br>";
    echo $miCinta->muestraResumen();

include "dvd.php";
    $miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
    echo "<br><br><strong>" . $miDvd->titulo . "</strong>";
    echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIva() . " euros<br>";
    echo $miDvd->muestraResumen();

?>