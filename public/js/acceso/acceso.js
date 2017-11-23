/*********************************************************/
/*                acceso.js                              */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : egonzale@ucla.edu.ve
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/

/*
 * Comentario:
 * 
 
  Aceeso con AJAX/AJAJ
  
  En este ejemplo vamos hacer un formulario de Acceso.
  
  Para ello, nos comunicamos con el servidor a traves de una pagina
  servidora llamada: acceso_controlador.php. Esta pagina, recibira los
  parametros vía post usando este javascript que hara el request a esta
  pagina servidora usando Ext.Ajax.request y Ext.JSON.decode
   
 * 
 */
//Contiene el url de la pagina servidora
var url_ajax = 'accesocrud';

//variable global para las acciones de los botones
var funcion = null;
var validado = false;

//funcion que valida la entrada y carga la variable global funcion
function Validar(form,opcion) {
 funcion = opcion;
 if (funcion=="cancelar") {
  validado = false;
  acciones();
  return;
 }
 if (form.usuario.value=="" || form.clave.value=="" && (funcion=="enviar"))
 {
  validado = true;
  Ext.MessageBox.show({
     	 title: appLocale.title01,
     	 msg: appLocale.msg01,
     	 buttons: Ext.MessageBox.OK,
     	 //buttons: Ext.MessageBox.YESNO,
     	 icon: Ext.MessageBox.ERROR,
     	 fn: function (id, value, opt) {
     	  if (id === 'ok') {
     	  }
     	 }  
	});
 }
 else
 { 
  validado = false;
  acciones();
 }
}

function handleTecla(e,form) {
 if (e.which == 13 || e.keyCode == 13) {
  Validar(form,'enviar');
  return false;
 }
}

function acciones() {

 switch (funcion)
 {
  case "enviar" :
   
   Ext.onReady(function() {
    Ext.getBody().mask(appLocale.msg01);
	  Ext.Ajax.request({
	 	     url: url_ajax,
	       //Enviando los parametros a la pagina servidora
	       params: {
	        funcion: 'buscar',
	        usuario: document.getElementsByName("usuario")[0].value,
	        clave: document.getElementsByName("clave")[0].value,
	        _token: _token
	       },
		     callback: function(options, success, response){
			         Ext.getBody().unmask();
               datos=Ext.JSON.decode(response.responseText);
               if (datos.exito=='true') {
                Ext.MessageBox.show({
		   		     	 title: appLocale.title02,
		   		     	 msg: datos.msg+datos.url,
		   		     	 //msg: response.responseText,
		   		     	 buttons: Ext.MessageBox.OK,
		   		     	 //buttons: Ext.MessageBox.YESNO,
		   		     	 icon: Ext.MessageBox.INFO,
		   		     	 fn: function (id, value, opt) {
		   		     	  if (id === 'ok') {
                   location.href=home_url+datos.url;
		   		     	  }
		   		     	 }  
		   	        });
               }
               else {
                Ext.MessageBox.show({
   		     	     title: appLocale.title01,
   		     	     msg: datos.msg,
   		     	     //msg: response.responseText,
   		     	     buttons: Ext.MessageBox.OK,
   		     	     //buttons: Ext.MessageBox.YESNO,
   		     	     icon: Ext.MessageBox.ERROR,
   		     	     fn: function (id, value, opt) {
   		     	      if (id === 'ok') {
   		     	      }
   		     	     }  
   			        });
               }
		  },
		  failure: function(response, options) {
		    Ext.getBody().unmask();
			   Ext.MessageBox.show({
		     	 title: "Error",
		     	 msg: appLocale.msg98+response.status+"<br/>"+
		     	      appLocale.msg99+response.statusText,
		     	 buttons: Ext.MessageBox.OK,
		     	 //buttons: Ext.MessageBox.YESNO,
		     	 icon: Ext.MessageBox.ERROR,
		     	 fn: function (id, value, opt) {
		     	  if (id === 'ok') {
		     	  }
		     	 }  
			});
		},		
		timeout: 60000 //60 segundos de espera (por defecto es 30)
	 });	
  });
  break
     
  case "cancelar":
   limpiarUsuarios();
   document.form1.usuario.select();
   document.form1.usuario.focus();
   break;

 }
}

function limpiarUsuarios() {
 document.getElementsByName("usuario")[0].value="";
 document.getElementsByName("clave")[0].value="";
 return true;
}



