 @include('includes.header')
 <!-- Incluya los javascripts y css propios -->
 <script type="text/javascript" src="js/ejemplo37/ejemplo37.js"></script>
 <link rel="stylesheet" type="text/css" href="css/micss.css">

</head>
<body>
<h1><?php echo Config::get('constants.version_curso'); ?></h1>
<div id="intro">Sesi&oacute;n 04</div><br/>
<div id="myDiv">E</strong>jemplo 37<br/>AJAX(AJAJ)</div><br/>
 <div id="myDiv1">
    <strong>Cargando datos con AJAX</strong><br/><br/>
  
        Con este ejemplo, veremos como cargar los datos de forma asincrona<br/>
        usando la clase: <strong>Ext.Ajax</strong>.<br/><br/>
  
        Ademas, veremos como utilizar el metodo Ext.Ajax.request para el<br/> 
        envio de los datos, y como procesar la respuesta del XMLHttpRequest.<br/>
        Como tambien, vamos aprender a controlar los errores.<br/><br/>
        
        Antes de ejecutar este javascript, haga los siguientes dos pasos:<br/><br/>
  
        - Crear una carpeta data, en el directorio Laravel5.4-Extjs6.2-basico/public<br/>
        - Crear el archivo texto: preparadores.json en la carpeta public/data, con los siguientes datos:<br/><br/>

  
        {<br/>
        &nbsp;&nbsp;"id": 1,<br/>
        &nbsp;&nbsp;"Nombre": "Maria",<br/>
        &nbsp;&nbsp;"Apellido": "Bolivar",<br/>
        &nbsp;&nbsp;"Mensaje": "echame una ayudaita..."<br/>
        }<br/><br/>
     
        Leer: 
        <ul>
         <li><a target="_bkank" href="https://goo.gl/dhfXnc">Documentaci&oacute;n de Ext.Ajax </a></li>
         <li><a target="_bkank" href="https://goo.gl/aJnozb">¿Qu&eacute; hace callback en vez de success?</a></li>
        </ul>
        
        Para m&aacute;s informaci&oacute;n ver el fuente ubicado en public/js/ejemplo37/ejemplo37.js.<br/>    
     
 </div>

 @include('includes.footer')

</div>
</body>
</html>
