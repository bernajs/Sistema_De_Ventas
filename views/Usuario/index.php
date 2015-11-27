<!DOCTYPE html>
<html>
<head>

<style>

#historial{
border:1px solid gray;
width:230px;
height:400px;
padding-right: 10px;
overflow:auto;			
}

fieldset{
width:150px;
}

</style>

<script src="ajax.js"></script>
<script>

function mostrar()
{
	loadDoc(null,"mensajes.php",function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("historial").innerHTML=xmlhttp.responseText;
		}
	  });
}

setInterval(mostrar,3000);

function agregar()
{
	var u=document.getElementById('nombre').value;
	var c=document.getElementById('contenido').value;

	if(u!="" && c!=""){
		loadDoc("usuario="+u+"&cont="+c,"proceso.php",function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("historial").innerHTML=xmlhttp.responseText;
			}
		  });
		  
	}else{ alert("No deje campos vacios"); }
}
</script>
</head>

<body>
<hr />

<div id="historial"><img src="ajax-loader.gif" /></div>
<fieldset>
<input type="text" id="nombre" placeholder="usuario" /><br />
<textarea id="contenido" placeholder="mensaje"></textarea><br />
<button onclick="agregar()">Enviar</button>
</fieldset>

<hr />


</body>

</html>