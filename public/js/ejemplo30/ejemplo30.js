/*********************************************************/
/*                ejemplo30.js                           */
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
 * Uso de Ext.select

    Este metodo nos permite seleccionar una coleccion de
    nodos DOM basado en el selector CSS.

    Este retornara un objeto de tipo Ext.CompositeElement o Ext.CompositeElementLite.
 	
 * 
 */
Ext.onReady(function() {
	
	Ext.MessageBox.show({
      	 title: "Mensaje",
      	 msg: "Desean desaparecer a los profesores?",
      	 //buttons: Ext.MessageBox.OK,
      	 buttons: Ext.MessageBox.YESNO,
      	 icon: Ext.MessageBox.INFO,
      	 fn: function (id, value, opt) {
      	  if (id === 'yes') {
      		//var profesores = Ext.get('profesores');
      		var profesores = Ext.select('ul#profesores li');  
      		profesores.hide();
      		//profesores.setOpacity(0, {duration: 0.5});
      	  }
      	 }
      });
	
});



