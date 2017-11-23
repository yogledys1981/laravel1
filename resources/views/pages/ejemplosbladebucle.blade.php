 @include('includes.header')
 <link rel="stylesheet" type="text/css" href="css/micss.css">
</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03  {{ $mensaje[0] }} </div><br/>
<div>
 <!--Ejemplo Bucle for en Blade  -->
 {{ $mensaje[1] }}<br/>
 @for ($i = 0; $i < 3; $i++)
  El numero es: {{ $i }}<br/>
 @endfor<br/>

 <!--Ejemplo Bucle: foreach en Blade -->
 {{ $mensaje[2] }}<br/>
 @foreach ($edades as $nombre => $edad)
  Nombre: {{ $nombre }} tiene {{ $edad }} a&ntilde;os<br/>
 @endforeach<br/>

 <!--Ejemplo Bucle: while en Blade -->
 {{ $mensaje[3] }}<br/>
 <?php $i=0; ?>
 @while ($i<$j)
  {{ $i }}.- Pag&oacute;: Bs. {{ $pagos[$i] }}<br/>
  <?php $i++; ?>
 @endwhile<br/>
 </div><br/>
 @include('includes.footer')
</div>
</body>
</html>
