/*********************************************************/
/*                ejemplo15.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {
	
 //Definimos la clase gato
 var gato = {
  sonido: 'maulla',
  dice: function() {
   alert("El gato "+this.sonido);
  }
 };
	
 //Definimos la clase perro
 var perro = {
  sonido: 'ladra',
  dice: function() {
   alert("El perro "+this.sonido);
  }
 };
	
 gato.dice(); //Imprime el gato maulla
 perro.dice(); //Imprime el perro ladra
 //Usando Ext.bind para modificar el comportamiento del metodo "dice" del perro 
 //por el metodo "dice" del gato en tiempo de ejecucion, pero modifica segun sea el mismo nombre del atributo
 //en este caso sonido. Si el nombre de los atributos son diferentes no hace el enlace o bind
 Ext.bind(perro.dice, gato)(); //Imprime el perro maulla
 
});



