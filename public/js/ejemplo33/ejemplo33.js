/*********************************************************/
/*                ejemplo33.js                           */
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
 	Ir directo a padres y a los hijos
    
    Podemos demostrar mediante la recuperacion del primer 
    de la etiqueta: ul, que hace rol de padre de la lista contenido,
    mediante el metodo parent de la clase Ext.Element.
   
 * 
 */
Ext.onReady(function() {
	
	//Obtenenos el elemento que deseamos recorrer
	var contenidoEl = Ext.select('ul#contenido li').item(2);
	var padre = contenidoEl.parent().id; 

   
  //Imprimira el padre de: Fundamentos de Desarrollo Web en PHP, es: contenido	
	Ext.MessageBox.show({
      	 title: "Mensaje 1",
      	 msg: "El padre es: "+padre,
      	 buttons: Ext.MessageBox.OK,
      	 //buttons: Ext.MessageBox.YESNO,
      	 icon: Ext.MessageBox.INFO,
      	 fn: function (id, value, opt) {
      	  if (id === 'ok') {
      		//Tambien podemos navegar de la siguiente forma  
      		var contenidoid = Ext.get('contenido');
      	    //Obtenemos el primer hijo <li>  que es Fundamentos de Linux
      	    var primerHijoEl = contenidoid.child('li');
      	    Ext.MessageBox.show({
           	 title: "Mensaje 2",
           	 msg: "El primer hijo de contenido es: "+primerHijoEl.dom.innerHTML,
           	 buttons: Ext.MessageBox.OK,
           	 //buttons: Ext.MessageBox.YESNO,
           	 icon: Ext.MessageBox.INFO,
           	 fn: function (id, value, opt) {
           	  if (id === 'ok') {}
           	 }  
      	    });
      	  }
      	 }
    });
	
});	



