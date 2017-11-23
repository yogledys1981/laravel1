/*********************************************************/
/*                ejemplo16.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {
 
 //Declaramos un boton
 var boton1 = Ext.create('Ext.button.Button', {
         text: 'Boton1',
         renderTo: 'boton1',
		 listeners: {
		  click: function(button, e, options) {
		   alert(this.text);
		  }
		 }
 });
 boton1.show();
 
 //Ext.bind parte 2
 var textObj = {
  text: 'Prueba de boton2 usando Ext.bind'
 };
 //Ahora usando Ext.bind
 var boton2 = Ext.create('Ext.button.Button', {
	     text: 'Boton2',
	     renderTo: 'boton2',
	     listeners: {
		  click: Ext.bind(function(button, e, options) {
		   alert(this.text);
		  }, textObj) 
	     }      
 });
 boton2.show();
 
//Ahora usando scope
 var textObjscope = {
  text: 'Prueba de boton3 usando scope'
 };
 var boton3 = Ext.create('Ext.button.Button', {
	     text: 'Boton3',
	     renderTo: 'boton3',
	     listeners: {
		  click: function(button, e, options) {
		   alert(this.text);
		  }, 
		  scope: textObjscope 
	     }      
 });
 boton3.show();
 
});



