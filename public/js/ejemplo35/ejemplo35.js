/*********************************************************/
/*                ejemplo35.js                           */
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
 
  Insertando un nuevo elemento antes o despues de un elemento existente
         		
   El metodo insertBefore de Ext.core.DomHelper nos permite insertar un nuevo elemento
   antes de un elemento existente, como un hermano a el. Por ejemplo, podemos insertar una nueva
   nidad a la lista de contenido en la parte superior de la lista (es decir, antes de la
   primera unidad existente que es Fundamentos de Linux, la nueva unidad se llamara Introduccion
   a la Asignatura.)
   
 * 
 */

Ext.onReady(function() {
	//Texto del elemento agregar
  var texto = 'Introducci&oacute;n a la Asignatura';

	var contenidoEl = Ext.get('contenido');
	Ext.MessageBox.show({
     	 title: "Mensaje",
     	 msg: "Note que al darle al boton Ok <br/>Ver&aacute; que se agregar&aacute; el nuevo nodo al principio:<br/>"+texto,
     	 buttons: Ext.MessageBox.OK,
     	 //buttons: Ext.MessageBox.YESNO,
     	 icon: Ext.MessageBox.INFO,
     	 fn: function (id, value, opt) {
     	  if (id === 'ok') {
     	   //Agregamos el nuevo elemento a la lista contenido al principio
     	   Ext.core.DomHelper.insertBefore(contenidoEl.first(), {
     		tag: 'li',
     		html: texto
     	   });
     	  }
     	 }  
	});
	
	
});	



