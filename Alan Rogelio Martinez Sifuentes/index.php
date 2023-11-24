
<h4>Actividades de Rogelio:<?php ?></h4>
<ul><?php

$archivos = scandir("./");

$pdfs = array_filter($archivos, function ($archivo) {
    return pathinfo($archivo, PATHINFO_EXTENSION) === "pdf"; 
});

foreach($pdfs as $pdf){
    echo "<li><a href='$pdf' download>$pdf</a></li>";
}
?>
</ul>