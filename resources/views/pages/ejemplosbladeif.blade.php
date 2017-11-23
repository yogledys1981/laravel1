 @include('includes.header')
 <link rel="stylesheet" type="text/css" href="css/micss.css">
</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 03  {{ $mensaje[0] }} </div><br/>
<div>
 {{ $mensaje[1] }}
 @if ($contador === 1)
  Nada que mostrar, aun.
 @elseif ($contador === 0)
   Nada que mostrar, aun.
   @else
     Contador es: {{ $contador }}
 @endif
 </div><br/>
 @include('includes.footer')
</div>
</body>
</html>
