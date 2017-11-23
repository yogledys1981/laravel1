 @include('includes.header')
 <script>
  /* 
   Creamos la variable de javascrit msgerror que lo usara el fuente error.js y que es cargado en
   esta vista error.blade.php. Esta variable msgerror es inicializada por la variable
   $this->msgerror, enviada por el controlador, pero que en la vista es referenciado por 
   $msgerror sin usar el modificador $this.

   El error se mostrara a traves de un Ext.MessageBox.show que esta en error.js.
  */ 
  var msgerror = <?php echo $msgerror; ?>;
 </script>
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/error/error.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">
</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 04</div><br/>
 <div id="myDiv">HAY UN ERROR EN EL SISTEMA.</br></br>VEA EL MENSAJE EN LA</br></br> VENTANA EMERGENTE.</div>
@include('includes.footer')
</body>
</html>
