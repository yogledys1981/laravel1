/*********************************************************/
/*                ejemplo32.js                           */
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
 	Recorriendo a elementos DOM
 	
 	Es importante ser capaz de movernos por el DOM en funcion 
 	del contexto actual y recuperar referencias a los elementos
 	que lo rodean. En este ejemplo, vamos a descubrir como 
 	utilizar Ext JS para recorrer el DOM y a los elementos de
 	acceso, basado en el contexto del elemento actual que se
 	esta trabajando.

    
 * 
 */
Ext.onReady(function() {
	
	//Obtenenos el elemento que deseamos recorrer
    var contenidoEl = Ext.select('ul#contenido li').item(2);
    
    //Actual nodo o Unidad actual es: Fundamentos de Desarrollo Web en PHP
    //var unidadActual = contenidoEl; //Puede sustituirlo en el msg
    
    //Obtenemos la segunda unidad del contenido
    var unidad2 = contenidoEl.prev();
   
    //Imprimira la segunda unidad: Metodologias Agil y UML	
	Ext.MessageBox.show({
      	 title: "Mensaje 1",
      	 msg: unidad2.dom.innerHTML,
      	 buttons: Ext.MessageBox.OK,
      	 //buttons: Ext.MessageBox.YESNO,
      	 icon: Ext.MessageBox.INFO,
      	 fn: function (id, value, opt) {
      	  if (id === 'ok') {
      		  
      		//Obtenemos la cuarta unidad del contenido
      	    var unidad4 = contenidoEl.next();
      	    
      		//Imprimira la cuarta unidad: Marcos de Trabajos en PHP y Web 2.0	
      		Ext.MessageBox.show({
      	      	 title: "Mensaje 2",
      	      	 msg: unidad4.dom.innerHTML,
      	      	 //buttons: Ext.MessageBox.OK,
      	      	 buttons: Ext.MessageBox.YESNO,
      	      	 icon: Ext.MessageBox.INFO,
      	      	 fn: function (id, value, opt) {
      	      	  if (id === 'yes') {}
      	      	 }
      	    });
      	  }
      	 }
    });
	
});	



