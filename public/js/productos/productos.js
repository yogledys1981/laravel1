/*********************************************************/
/*                Productos.js                           */
/*********************************************************/
/*
  Autor  : Yogledis Herrera
  Web    : 
  Email  : yherrera@yavirac.edu.ec
  Version: 1.0 en javascript 1.2
  Fecha  : 19 de Noviembre del 2017
*/

/*
 * Comentario:
 * 
 
  Actualizacion de datos con AJAX/AJAJ
  
  En este ejemplo vamos hacer un formulario de actualizacion de datos
  o un CRUD.
  
  Para ello, nos comunicamos con el servidor a traves de una pagina
  servidora llamada: ProductosController.php. Esta pagina, recibira los
  parametros vía post usando este javascript que hara el request a esta
  pagina servidora usando Ext.Ajax.request y Ext.JSON.decode
   
 * 
 */
//Contiene el url de la pagina servidora
var url_ajax = 'Productos1';

//variable global para las acciones de los botones
var funcion = null;
var validado = false;

//funcion que valida la entrada y carga la variable global funcion
function Validar(form,opcion) {
 funcion = opcion;
 if (funcion=="imprimir" || funcion=="limpiar" || funcion=="cerrar") {
  validado = false;
  acciones();
  return;
 }
 if (form.code.value=="" && (funcion=="buscar" || funcion=="eliminar"))
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
  if ((form.code.value=="" || form.name.value=="" || form.stock.value=="") && funcion=="grabar")
  {
   validado = true;
   Ext.MessageBox.show({
	     	 title: appLocale.title01,
	     	 msg: appLocale.msg03,
	     	 buttons: Ext.MessageBox.OK,
	     	 //buttons: Ext.MessageBox.YESNO,
	     	 icon: Ext.MessageBox.ERROR,
	     	 fn: function (id, value, opt) {
	     	  if (id === 'ok') {
	     	  }
	     	 }  
   });
  } else {
  	 validado = false;
     acciones();
  }
 }
}

function acciones() {

 switch (funcion)
 {
  case "buscar" :
   Ext.getBody().mask(appLocale.msg04);
   Ext.onReady(function() {
	 Ext.Ajax.request({
		url: url_ajax,
	    //Enviando los parametros a la pagina servidora
	    params: {
	     funcion: 'buscar',
	     code: document.getElementsByName("code")[0].value,
	     _token: _token
	    },
		callback: function(options, success, response){
			Ext.getBody().unmask();
            datos=Ext.JSON.decode(response.responseText);
            if (datos.exito=='true') {
             Ext.MessageBox.show({
		   		     	 title: appLocale.title02,
		   		     	 msg: datos.msg,
		   		     	 //msg: response.responseText,
		   		     	 buttons: Ext.MessageBox.OK,
		   		     	 //buttons: Ext.MessageBox.YESNO,
		   		     	 icon: Ext.MessageBox.INFO,
		   		     	 fn: function (id, value, opt) {
		   		     	  if (id === 'ok') {
		   		     	  }
		   		     	 }  
		   	 });
             document.getElementsByName("stock")[0].value=datos.stock;
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
		     	 title: appLocale.title01,
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
  
  case "grabar":
	   Ext.getBody().mask(appLocale.msg05);
	   Ext.onReady(function() {
		 Ext.Ajax.request({
			url: url_ajax,
		    //Enviando los parametros a la pagina servidora
		    params: {
		     funcion: 'grabar',
		     code: document.getElementsByName("code")[0].value,
		     name: document.getElementsByName("name")[0].value,
		     stock: document.getElementsByName("stock")[0].value,
		     _token: _token
		    },
			callback: function(options, success, response){
				Ext.getBody().unmask();
	            datos=Ext.JSON.decode(response.responseText);
	            if (datos.exito=='true') {
	            	Ext.MessageBox.show({
		   		     	 title: appLocale.title02,
		   		     	 msg: datos.msg,
		   		     	 //msg: response.responseText,
		   		     	 buttons: Ext.MessageBox.OK,
		   		     	 //buttons: Ext.MessageBox.YESNO,
		   		     	 icon: Ext.MessageBox.INFO,
		   		     	 fn: function (id, value, opt) {
		   		     	  if (id === 'ok') {
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
			failure: function(response, options){
				Ext.getBody().unmask();
				Ext.MessageBox.show({
			     	 title: appLocale.title01,
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
   break;
   
  case "limpiar":
   limpiarProductos();
   document.form1.code.select();
   document.form1.code.focus();
   break;
   
  case "eliminar":
	   Ext.getBody().mask(appLocale.msg06);
	   Ext.onReady(function() {
		 Ext.Ajax.request({
			url: url_ajax,
		    //Enviando los parametros a la pagina servidora
		    params: {
		     funcion: 'eliminar',
		     usuario: document.getElementsByName("code")[0].value,
		     //clave: document.getElementsByName("nombres")[0].value,
		     _token: _token
		    },
			callback: function(options, success, response){
				Ext.getBody().unmask();
	            datos=Ext.JSON.decode(response.responseText);
	            if (datos.exito=='true') {
	            	Ext.MessageBox.show({
		   		     	 title: appLocale.title02,
		   		     	 msg: datos.msg,
		   		     	 //msg: response.responseText,
		   		     	 buttons: Ext.MessageBox.OK,
		   		     	 //buttons: Ext.MessageBox.YESNO,
		   		     	 icon: Ext.MessageBox.INFO,
		   		     	 fn: function (id, value, opt) {
		   		     	  if (id === 'ok') {
		   		     		limpiarProductos();
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
			failure: function(response, options){
				Ext.getBody().unmask();
				Ext.MessageBox.show({
			     	 title: appLocale.title01,
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
	break;

  case "imprimir":
	   Ext.getBody().mask(appLocale.msg07);
	   Ext.onReady(function() {
		 Ext.Ajax.request({
			url: url_ajax,
		    //Enviando los parametros a la pagina servidora
		    params: {
		     funcion: 'imprimir',
		     _token: _token
		    },
			callback: function(options, success, response){
				Ext.getBody().unmask();
	            datos=Ext.JSON.decode(response.responseText);
	            if (datos.exito=='true') {
	             //Parametros de la ventana emergente que abriremos
                 var opciones="left=200,top=100,width=550,height=450";
                 //Con window.open abriremos dado el URL al archivo usuarios.pdf 
                 //Siempre y cuando el navegador tenga el plugin para ver archivos pdf
                 //De lo contrario lo tomara como un archivo para descargar
                 mi_ventana = window.open(home_url+"pdfs/productos.pdf","",opciones); 
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
			failure: function(response, options){
				Ext.getBody().unmask();
				Ext.MessageBox.show({
			     	 title: appLocale.title01,
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
	break;

	case "cerrar":
	   Ext.getBody().mask(appLocale.msg07);
	   Ext.onReady(function() {
		 Ext.Ajax.request({
			url: url_ajax,
		    //Enviando los parametros a la pagina servidora
		    params: {
		     funcion: 'cerrar',
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
			failure: function(response, options){
				Ext.getBody().unmask();
				Ext.MessageBox.show({
			     	 title: appLocale.title01,
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
	break;

 }
}

function limpiarProductos() {
 document.getElementsByName("code")[0].value="";
 document.getElementsByName("name")[0].value="";
 document.getElementsByName("stock")[0].value="";
 return true;
}


