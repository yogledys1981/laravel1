/*********************************************************/
/*                ejemplo29.js                           */
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
 *      Al crear aplicaciones web interactivas y sensibles, es vital poder
 		acceder elementos DOM para la manipulacion y procesamiento.
 		 
 		ExtJS ofrece multiples metodos para recuperar referencias
 		a los elementos DOM, que vamos a explorar en esta sesion.
 		 
		ExtJS envuelve elementos basicos DOM en una clase llamada Ext.Element,
		y es la que	generalmente se usa para recuperar elementos DOM y manipularlos.
		
		La misma, proporciona un gran numero de metodos utiles
		que hace la vida mas facil para nosotros.
 * 
 	
 * 
 */
Ext.onReady(function() {
	
	var introduccion = Ext.get('intro');
	alert('El id de la introduccion es: ' + introduccion.id);
	
});



