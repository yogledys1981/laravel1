/*********************************************************/
/*                ejemplo34.js                           */
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
 
    Creando un nuevo elemento DOM
 	
 	Despues de trabajar a traves de ejemplos de seleccion,
 	recorrido y manipulacion de elementos DOM, ahora vamos a
 	pasar a la creacion de un elemento DOM en nuestro diseno.
 	
    Inicialmente, vamos a demostrar como crear un elemento
    simple a la lista de contenido con una configuracion basica.
    
    Para ello, vamos a pasar a explorar como controlar la
    posicion de nuestro nuevo elemento para luego agregarlo.
   
 * 
 */
Ext.onReady(function() {
  //Texto del elemento agregar
	var texto = 'Inteligencia de Negocios usando Hadoop';

	//Configuracion basica del elemento agregar
	var nuevoElemento = {
			tag: 'li',
			html: texto
	};
  
	//Nos posicionamos en el elemento
	var contenidoid = Ext.get('contenido');
	
	Ext.MessageBox.show({
      	 title: "Mensaje",
      	 msg: "Note que al darle al boton OK </br>Ver&aacute; que se agregar&aacute; el nuevo nodo:<br/>"+texto,
      	 buttons: Ext.MessageBox.OK,
      	 //buttons: Ext.MessageBox.YESNO,
      	 icon: Ext.MessageBox.INFO,
      	 fn: function (id, value, opt) {
      	  if (id === 'ok') {
      	   //Agregamos el nuevo elemento a la lista contenido
      	   var nuevoEl = Ext.core.DomHelper.append(contenidoid,nuevoElemento);
      	  }
      	 }  
 	});
	
	
});	



