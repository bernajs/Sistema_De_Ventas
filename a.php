<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.post("http://localhost/sistema_de_ventas/index.php/Puntuacion/guardar",
        {'data':[{
	          name: "Donald Duck",
	          city: "Duckburg"
        	},
        	{
	          name: "Pepe Duck",
	          city: "hola"
        	}
        	]
    	},
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>