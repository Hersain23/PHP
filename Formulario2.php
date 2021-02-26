<!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8">
    
    <title>Validacion de datos con PHP</title>
</head>
    <body>
    <form method="get" action="Validacion.php" id="formulario1" enctype="application/x-www-form-urlencoded" name="valida-Datos-Get">
    <label>Nombre</label>
            <input type="text" name="nombre" class="valores" class="valores">
            <br><br>
            <label>Password</label>
            <input type="password" name="password" class="valores" class="valores">
            <br><br>
            Masculino<input type="radio" name="sexo" value="M" id="m">
            <br>
            Femenino <input type="radio" name="sexo" value="F" id="f">
            <br><br>
            <input type="hidden" name="enviar_hdn">
            <input type="submit" name="enviar" value="EnvioGet" id="envio-Get">
  </form>

<script>
  //const $form = document.valida-Datos-Get;
  const $valores = document.querySelectorAll(".valores");
  window.addEventListener('DOMContentLoaded',inicio);

  function inicio() {
    document.getElementById("formulario1").addEventListener('submit', validar);
  }

  function validar(evt) {
    for(let i=0;i<$valores.length;i++){
        if($valores[i].value == ""){
            $valores[i].style.border="1px red solid";
            evt.preventDefault();
        }
        else{
            $valores[i].style.border="1px black solid";
            document.valida-Datos-Get.submit();
        }
      }
    }
  
</script>
    </body>
</html>