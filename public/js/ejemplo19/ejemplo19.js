/*********************************************************/
/*                ejemplo19.js                           */
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
	Volviendo al principio del codigo, declaramos cuatro paneles. Cada uno tiene
 	un titulo y el contenido HTML. Tambien establecemos una regla de anchura 
 	(anchor) para cada uno:
 	
	- El primer panel (panel 1) tiene un vinculo, especificado con el 100% de 
	  de anchura (anchor 100%, 250 pixeles, originalmente) y 30% de altura (30% de
	  300 = 90 pixels)
	- El segundo panel (panel 2) tiene un vinculo, especificado con el 80% 
	  de anchura (anchor 80%, de 300 = 200 pixeles) y 25% de la altura (25% de
	  300 = 75 pixeles)
	- El tercer panel (panel3) tiene un vinculo  especificado de -70 pixeles
	  de desplazamiento, que significa que este panel dejara el 70 pixeles de
	  espacio en el lado derecho del cuerpo, y 20% de la altura (20% de 
	  300 = 60 pixeles)
	- El cuarto panel (panel4) tiene un vinculo  especificado de -30 pixeles 
	  que significa este panel dejara el 30 pixeles de espacio al lado derecho
	  de la matriz del cuerpo, y 25% de la altura (25% de 300 = 75 pixeles)
*
*/
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: '100% 30%',
		anchor:'100% 30%'
	});
	
	var panel2 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 2',
		html: '80% 25%',
		anchor:'80% 25%'
	});
	
	var panel3 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 3',
		html: '-70 20%',
		anchor:'-70 20%'
	});
	
	var panel4 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 4',
		html: '-30 25%',
		anchor:'-30 25%'
	});
	
	var anchor = Ext.create('Ext.window.Window', {
		title: 'Anchor Layout',
		width: 250,
		height:300,
		layout:'anchor',
		defaults: {
	 	 bodyStyle: 'padding:10px'
		},
		items: [panel1, panel2, panel3, panel4]
	});
	anchor.show();

});



