<?php
$informacion_basica =  ["Nombre"=>$_GET["nombre"],"Altura"=>$_GET["altura"],"Email"=>$_GET["email"],"Fecha de nacimiento"=>$_GET["fecha"]];

echo "<h2>Informacion basica</h2>";

foreach ($informacion_basica as $key => $value) {
    echo "<b>$key</b>: $value <br><br>";
}

echo "<h2>Nacionalidad</h2>";
$nacionalidad = $_GET["nacionalidad"];
echo "<b>Nacionalidad</b>: $nacionalidad";

echo "<h2>Estudios</h2>";
$estudios = $_GET["estudios"];
echo "<b>Estudios</b>: $estudios";

echo "<h2>Idiomas</h2>";
$idiomas = $_GET["idiomas"];
$idiomas_seleccionados="";
foreach ($idiomas as $idioma) {
     $idiomas_seleccionados.="<li>$idioma</li>";
}
echo "<ul>$idiomas_seleccionados</ul>";



echo '<img src="ok.gif" alt="Todo correcto" width="300px" height="300px">';

?>
