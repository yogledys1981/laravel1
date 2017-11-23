<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Edgar Gonzalez">

<title>...::Laravel 5 y ExtJS 6.2.0 B&aacute;sico::...S</title>
<head>
<!-- Incluya los javascripts y css del framework Extjs 6.2.0 Desktop o Mobile -->
    <!-- http://docs.sencha.com/extjs/6.2.0/ -->
    <!-- Comparacion de Sencha con otras: http://tiny.cc/ibeo1x -->
    
    <!-- Ir a: http://tiny.cc/eb2o1x para ver Classic vs Modern -->
    <!-- Classic-Sencha-Desktop - Extjs 5 para Desktop, Tablets y Laptos Tactil -->
    <!-- Ver Apis: http://docs.sencha.com/extjs/6.2.0/-->
    <script type="text/javascript" src="js/ext/build/ext-all.js"></script>

    <!-- Modern-Sencha Touch - Html5 Universal para Browsers Desktop y Mobile  -->
    <!-- Guia: http://docs.sencha.com/extjs/6.2.0/guides/whats_new/whats_new.html -->
    <!-- Ver Apis: http://docs.sencha.com/extjs/6.2.0/modern/Ext.html -->
    <!--script type="text/javascript" src="../public/js/ext/build/ext-modern-all.js">
    </script-->

    <!-- Tema Trinton - Sencha - Desktop >
    <script type="text/javascript" src="js/ext/build/classic/theme-triton/theme-triton.js"></script>
    <link rel="stylesheet" type="text/css" href="js/ext/build/classic/theme-triton/resources/theme-triton-all.css"-->

    <!-- Tema Neptune - Sencha - Desktop -->
    <script type="text/javascript" src="js/ext/build/classic/theme-neptune/theme-neptune.js"></script>
    <link rel="stylesheet" type="text/css" href="js/ext/build/classic/theme-neptune/resources/theme-neptune-all.css">

   
    <!-- Tema Cupertino - Sencha Touch - Mobile -->
    <!--script type="text/javascript" src="js/ext/build/modern/theme-cupertino/theme-cupertino.js"></script>
    <link rel="stylesheet" type="text/css" href="js/ext/build/modern/theme-cupertino/resources/theme-cupertino-all.css"-->

    <script>
     //Escoger el idioma para los mensajes emergentes, ya que Extjs maneja i18n
     //Para mas informacion del numeronimo ir a:
     //http://es.wikipedia.org/wiki/Internacionalizaci%C3%B3n_y_localizaci%C3%B3n
     /*
     var s = document.createElement("script");
     s.type = 'text/javascript';
     s.src = "js/ext/classic/locale/overrides/es/ext-locale-es.js";
     //s.src = "js/ext/build/classic/locale/locale-es.js";
     s.charset = 'ascii';
     document.getElementsByTagName("head")[0].appendChild(s);
     */

     /* Por el error: Middleware\VerifyCsrfToken.php line 67" ondblclick="var
        Crear una variable _token global  y usarla o pasarlas en los posts o gets de Ext.Ajax.Request, ver ejemplo38.js
        Basado en: http://stackoverflow.com/questions/30257229/laravel-post-token-missmatch-exception-file-upload
     */
     var _token = '<?php echo csrf_token(); ?>';

     //Home app url
     var home_url = '<?php echo url('/'); ?>' + '/';

     //Locale Frontend
     var dir_locale_extjs = "js/ext/build/classic/locale/locale-en.js";
     var dir_locale_frontend  = "data/locale/en/locale-en.json";
     switch(localStorage.getItem("index")) {
      case "0":
        dir_locale_extjs = "js/ext/build/classic/locale/locale-en.js";
        dir_locale_frontend = "data/locale/en/locale-en.json";
        break;

      case "1":
        dir_locale_extjs = "js/ext/build/classic/locale/locale-es.js";
        dir_locale_frontend = "data/locale/es/locale-es.json";
        break;
         case "1":
        dir_locale_extjs = "js/ext/build/classic/locale/locale-fr.js";
        dir_locale_frontend = "data/locale/es/locale-al.json";
        break;
      default:
        dir_locale_extjs = "js/ext/build/classic/locale/locale-en.js";
        dir_locale_frontend = "data/locale/en/locale-en.json";
     }
     var s = document.createElement("script");
     s.type = 'text/javascript';
     s.src = dir_locale_extjs;
     s.charset = 'ascii';
     document.getElementsByTagName("head")[0].appendChild(s);

     //cargar localizacion de la app a nivel del frontend
     var appLocale=null;
     Ext.onReady(function() {
      Ext.Ajax.request({
        url: dir_locale_frontend ,
        callback: function(options, success, response){
            appLocale=Ext.JSON.decode(response.responseText);
        },
        failure: function(response, options) {
                  var msg = "El codigo del status del error es : "+response.status+"<br/>"+
                            "El texto del status del error es: "+response.statusText;
                  console.log(msg);
        },
        timeout: 60000 //60 segundos de espera (por defecto es 30)
      });
     }); 
    </script>
</head>
