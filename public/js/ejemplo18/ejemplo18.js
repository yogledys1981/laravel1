/*********************************************************/
/*                ejemplo18.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016

/*
 * Comentario:
 *
	En el siguiente codigo, tenemos cuatro paneles simples, cada uno tiene un
	titulo, un contenido HTML, la altura y la anchura. Entonces, tenemos un 
	objeto Window, con un layout: auto, que tiene un titulo, altura y anchura. 
	Queremos que cada panel hijo (items o paneles que declararemos) tenga su
	relleno o espacio de 15 pixeles. El layout auto y la opcion por defecto
	(bodyStyle: 'padding:15px') se aplica a todas las configuraciones de los
	items: panel1, panel2,panel3 y panel4, como tambien a futuros items que
	podrian ser anadidos con el metodo: add.
*
*/
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: 'Panel 1',
		height: 60,
		width: 100
	});
		
	var panel2 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 2',
		html: 'Panel 2',
		height: 80,
		width: 60
	});
	
	var panel3 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 3',
		html: 'Panel 3',
		height: 65,
		width: 100
	});
	
	var panel4 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 4',
		html: 'Panel 4',
		height: 70,
		width: '90%'
	}).show();
	
	var auto = Ext.create('Ext.window.Window', {
		title: 'Auto Layout',
		width: 150,
		height: 320,
		layout:'auto',
		defaults: {
	 	 bodyStyle: 'padding:15px'
		},
		items: [panel1, panel2, panel3, panel4]
		
	}).show();

});



