 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/acceso/acceso.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">
 <script>
 var primeravez = <?php echo $primeravez; ?>;
 if (primeravez) {
  localStorage.clear();
  primeravez = false;
 }
 function setLocalizacion() {
   location.href="accesolocale?locale="+document.getElementById("myLocale").value;
   localStorage.setItem("index", document.getElementById("myLocale").selectedIndex);
  }
 </script>
</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 04</div><br/>
 <div id="myDiv1"><strong>A</strong>cceso<br/>
  <ul>
   <li>Acceder con AJAX/AJAJ, en Laravel y ExtJS</li>
   <li>Sesiones en Laravel</li>
   <li>Localizaci&oacute;n en Laravel</li>
 </ul>
 Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/acceso/acceso.js.<br/></div><br/>
 <div id="myDiv1">
  <h2>{{ __('labels.title1') }} - {{ __('labels.title3') }}
   <select id="myLocale" onchange="setLocalizacion();">
    <option value="en">English</option>
    <option value="es">Espa&ntilde;ol</option>
    <option value="al">Alemán</option>
   </select>
   <script>
    if (localStorage.getItem("index")!="") {
     document.getElementById("myLocale").selectedIndex=localStorage.getItem("index");
    }
   </script>
  </h2><br>
  <form name="form1" method="" action="">
   <table width="35%" border="0">
    <tr> 
     <td>{{ __('labels.user') }}:</td>
     <td><input type="text" name="usuario" value=""></td>
    </tr>
    <tr> 
     <td>{{ __('labels.pwd') }}:</td>
     <td><input type="password" name="clave" value="" onKeyPress="return handleTecla(event,this.form);"></td>
    </tr>
   </table><br/>
   <table width="100%" border="0">
    <tr>
     <td><input type="button" id="Enviar"   value={{ __('buttons.send') }}   onClick="Validar(this.form,'enviar');"></td>
     <td><input type="button" id="Cancelar"   value={{ __('buttons.cancel') }}  onClick="Validar(this.form,'cancelar');"></td>
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
