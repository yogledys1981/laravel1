/*********************************************************/
/*                ejemplo31.js                           */
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
 	Ext.query

    Ext.query, un alias para Ext.DomQuery.select, el mimso, selecciona 
    un conjunto de nodos DOM basados en el selector:
    
                        CSS/XPath 
    
    Este metodo es ideal cuando se requiere un rendimiento 
    rapido y solo tendra que acceder a los nodos DOM directamente 
    sin usar una clase de tipo envoltura dentro de un marco y/o
    funcionalidad.
    
    Este ejemplo puede reescribirse utilizando Ext.DomQuery.select
    y la salida usando cualquiera de las dos sera por consola de
    javascript, mostrando una gran variedad de referencias de nodos DOM.
 * 
 */
Ext.onReady(function() {
	console.log(Ext.query('ul#profesores li'));
	//console.log(Ext.DomQuery.select('ul#profesores li'));

	
	Ext.MessageBox.show({
      	 title: "Mensaje",
      	 msg: "Vea la consola para ver el Array y su contenido",
      	 buttons: Ext.MessageBox.OK,
      	 //buttons: Ext.MessageBox.YESNO,
      	 icon: Ext.MessageBox.INFO,
      	 fn: function (id, value, opt) {
      	  if (id === 'ok') {
    
      	  }
      	 }
      });
	
});



