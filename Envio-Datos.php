<?php
    if(isset($_GET["enviar"])){  // La variable $_GET recibe todas las variables del $form 
        echo "Los datos se enviaron por el metodo GET";
        echo "<br><p>Nombre:".$_GET["nombre"]."</p>";
        echo "<p>Password:".$_GET["password"]."</p>";
    }else if(isset($_POST["enviar"])){
        echo "Los datos se enviaron por el metodo POST";
        echo "<br><p>Nombre:".$_POST["nombre"]."</p>";
        echo "<br><p>Edad:".$_POST["password"]."</p>"; 
    }
?>