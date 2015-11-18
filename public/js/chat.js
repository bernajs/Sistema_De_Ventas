function mostrar() {
  loadDoc(null, "<?php echo URL_BASE." / views / Usuario ";?>/mensajes.php", function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("historial").innerHTML = xmlhttp.responseText;
    }
  });
}

setInterval(mostrar, 3000);

function agregar() {
  var u = document.getElementById('nombre').value;
  var c = document.getElementById('contenido').value;

  if (u != "" && c != "") {
    loadDoc("usuario=" + u + "&cont=" + c, "<?php echo URL_BASE." / views / Usuario ";?>/proceso.php", function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("historial").innerHTML = xmlhttp.responseText;
      }
    });

  } else {
    alert("No deje campos vacios");
  }
}