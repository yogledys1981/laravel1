/*********************************************************/
/*                 ejemplo04.js                          */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {

 alert("Felicitaciones!  La libreria: Extjs 6.2.0 esta instalada correctamente!");

});

Ext.onReady(function() {
 var myDiv = Ext.get('myDiv');
 myDiv.highlight();      // El background de los elementos del myDiv se veran amarillo brillante
 myDiv.setStyle("color","#aa0000",true);  // Adiciona una personalizacion a la clase CSS (definida en micss.css) de color rojo su contenido
 myDiv.center();         // Centraliza el elemento myDiv en el viewport
 myDiv.setOpacity(.25, {duration: 0.5});  // Hace al elemento myDiv parcialmente transparente
});

Ext.onReady(function() {
    Ext.get('myButton').on('click', function(){
        alert("tu has presionado el boton: Mi Boton");
    });
});

Ext.onReady(function() {
	Ext.select('p', true).on('click', function() {
		alert("tu has presionado en el parrafo");
	});
});