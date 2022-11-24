 <?php
include("connectionFactory.php");
$titulo=$_POST['titulo'];
$recado=$_POST['recado'];
$consulta="INSERT INTO recado (titulo, recado, data) VALUES ('$titulo', '$recado', NOW())";
if(!$recado || !$titulo) echo "500 - Internal Server Error";
else{
    $resultado=mysqli_query($link, $consulta) or die("500 - Internal Server Error");
    echo "200 - OK";
    mysqli_close($link);
}

header("Location: index.php");


?> 