/*********************************************************/
/*                ejemplo36.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/

/*
 * Comentario:
 * 
 
  Uso de plantillas para insertar elementos
  
  Las plantillas nos permiten crear cadenas de HTML que contienen 
  marcadores de posicion de datos. Estas plantillas se pueden combinar
  con un objeto de datos que nos de una cadena HTML con sus marcadores
  de posicion reemplazados con los valores del objeto de datos.
  
  La clase Ext.Template se puede usar para anadir
  (insertBefore / InsertAfter) la salida de este proceso de combinacion
  de un elemento existente. Podemos utilizar el metodo:
  
             Ext.core.DomHelper.createTemplate
  
  para generar inicialmente esta plantilla. Comenzamos creando una 
  plantilla usando la misma sintaxis de objeto de configuracion que 
  hemos utilizado anteriormente. Nuestra plantilla tiene un marcador 
  de posicion, llamada: nuevaUnidad.
   
 * 
 */

Ext.onReady(function() {
  //Texto del elemento agregar
  var texto =	'Implementaci&oacute;n de una Nube en Intranet';

	Ext.MessageBox.show({
     	 title: "Mensaje",
     	 msg: "Note que al darle al boton Ok"+'<br/>'+
     	      "Ver&aacute; que se agregar&aacute; la nueva unidad usando:<br/>Ext.Template:<br/>"+texto,
     	 buttons: Ext.MessageBox.OK,
     	 //buttons: Ext.MessageBox.YESNO,
     	 icon: Ext.MessageBox.INFO,
     	 fn: function (id, value, opt) {
     	  if (id === 'ok') {
     	   //Creamos la plantilla
     	   var itemTpl = Ext.core.DomHelper.createTemplate({
     		                tag: 'li',
     		                html: '{nuevaUnidad}'
     	                 });
     	   //
     	  itemTpl.append('contenido', {nuevaUnidad: texto});
     	  }
     	 }  
	});
	
	
});	



