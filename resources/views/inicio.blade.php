
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Red Social</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="iconos/css/all.min.css">
	<link href="img/ico.png" rel="icon" type="img/ico.png"/>	
</head>
<body>
	<!-- Desarrollo para info cabecero-->
	@include('components/header')
	<!--Desarrollo del contenido-->
	<div class="container">
            <!---barra deslizante izquierda--->
            @include('components/sliderLeft')
            <!---barra deslizante central----->
            @include('components/sliderCentral')
            <!---barra deslizante derecho----->
            @include('components/sliderRight')
	</div>


</body>
</html>