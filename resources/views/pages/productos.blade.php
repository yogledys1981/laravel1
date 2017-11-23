 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/productos/productos.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 04</div><br/>
 <div id="myDiv1"><strong>E</strong>EJERCICIO EVALUADO<br/>
 <ul>
   <li>Actualizaci&oacute;n de datos (CRUD) con AJAX/AJAJ, en Laravel y ExtJS</li>
   <li>Sesiones en Laravel</li>
   <li>Localizaci&oacute;n en Laravel</li>
 </ul>

 Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/Productos/Productos.js.<br/></div><br/>
 <div id="myDiv1">
  <h2>{{ __('labels.title5') }}: {{ $usuario }}</h2><br>
  <form name="form1" method="" action="">
   <table width="35%" border="0">
    <tr> 
     <td>{{ __('labels.code') }}:</td>
     <td><input type="text" name="code" value=""></td>
    </tr>
    <tr> 
     <td>{{ __('labels.name') }}:</td>
     <td><input type="text" name="name" value=""></td>
    </tr>
    <tr> 
     <td>{{ __('labels.stock') }}:</td>
     <td><input type="text" name="stock" value=""></td>
    </tr>
    
   </table><br/>
   <table width="100%" border="0">
    <tr>
     <td><input type="button" id="buscar"   value={{ __('buttons.find') }}   onClick="Validar(this.form,'buscar');"></td>
     <td><input type="button" id="grabar"   value={{ __('buttons.save') }}   onClick="Validar(this.form,'grabar');"></td>
     <td><input type="button" id="limpiar"  value={{ __('buttons.clear') }}  onClick="Validar(this.form,'limpiar');"></td>
     <td><input type="button" id="eliminar" value={{ __('buttons.delete') }} onClick="Validar(this.form,'eliminar');"></td>
     <td><input type="button" id="imprimir" value={{ __('buttons.print') }} onClick="Validar(this.form,'imprimir');"></td>
    <td><input type="button" id="cerrar" value={{ __('buttons.close') }} onClick="Validar(this.form,'cerrar');"></td>
    </tr>
   </table>
  </form>
  <script language="JavaScript1.2">
   document.form1.usuario.select();
   document.form1.usuario.focus();
  </script>
 </div>

 @include('includes.footer')

</div>
</body>
</html>
