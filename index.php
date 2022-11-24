
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.php">
    <title>NoteMe</title>

</head>
<body bgcolor="#5f5426">


    <center style="margin-top: 10%;">
        <h1> NoteMe 1.0 </h1>
        <form method="post" action="newrecado.php">
        <label><h2>Criar nova nota</h2></label><br>
        <label> Titulo </label><br>
        <input id="titulo" type="text" name="titulo" placeholder="Insira o titulo do recado...">
        <br><br><br>
            
        <label> Qual o recado ?  </label><br>
        <input id="recado" type="text" name="recado" placeholder="Insira o recado..."><br>
        
        <br>
        <input type="submit" value="Entrar">
        </form>
 
    </center>
</body>
</html>


<?php
include("connectionFactory.php");
$consulta="SELECT * FROM recado";
$resultado=mysqli_query($link, $consulta) or die("500 - Internal Server Error");
while($linha=mysqli_fetch_array($resultado)){
    echo "<hr>";
    echo "<h1>".$linha['titulo']."</h1>";
    echo "<p>".$linha['recado']."</p>";
    echo "<p>".$linha['data']."</p>";

}
mysqli_close($link);
?>