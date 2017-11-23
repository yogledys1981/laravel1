/*********************************************************/
/*                ejemplo37.js                           */
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
 
  Cargando datos con AJAJ
  
  Con este ejemplo, veremos como cargar los datos de forma asincrona
  usando la clase Ext.Ajax.
  
  Ademas, veremos como utilizar el metodo Ext.Ajax.request para el 
  envio de los datos, y como procesar la respuesta del XMLHttpRequest.
  Como tambien, vamos aprender a controlar los errores.
  
  Antes de ejecutar este javascript, haga los siguientes dos pasos:
  
  - Crear una carpeta data, desde extjs-basico en la carpeta public
  - Crear el archivo texto: preparadores.json en la carpeta public/data
  
     {
      "id": 1,
      "Nombre": "Maria",
      "Apellido": "Bolivar",
      "Mensaje": "echame una ayudaita..."
     }
     
   Leer: 
        -Documentacion de Ext.Ajax            : https://goo.gl/dhfXnc
        -¿Que hace callback en vez de success?: https://goo.gl/aJnozb
 * 
 */

Ext.onReady(function() {
	Ext.Ajax.request({
		              url: "data/preparadores.json",
		              success: function(response, opts) {
		              //callback: function(options, success, response){
			          Ext.MessageBox.show({
		     	       title: "Mensaje",
		     	       /*msg: "El callback fue llamado"+"<br/>"+
		     	              "La repuesta del parametro success es: "+ success,*/
		     	       msg: response.responseText,
		     	       buttons: Ext.MessageBox.OK,
		     	       //buttons: Ext.MessageBox.YESNO,
		     	       icon: Ext.MessageBox.INFO,
		     	       fn: function (id, value, opt) {
		     	        if (id === 'ok') {
		     	        }
		     	       }  
			          });
		             },
		             failure: function(response, options){
			          Ext.MessageBox.show({
		     	       title: "Error",
		     	       msg: "El codigo del status del error es : "+response.status+"<br/>"+
		     	            "El texto del status del error es: "+response.statusText,
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