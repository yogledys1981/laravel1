/*********************************************************/
/*                ejemplo21.js                           */
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
 	Al igual que en el ejemplo HBox, establecemos las propiedades 
 	flex para cada panel. El primer panel tiene una configuracion
 	de flex de 2 y el segundo panel un flex de 1. Esto significa
	que panel1 obtiene un tercio (33%) del espacio vertical de la
	ventana y panel2 recibe dos tercios (66%) del espacio vertical
	de la ventana.
 * 
 */
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: 'Panel 1',
		flex: 1
	});
	
	var panel2 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 2',
		html: 'Panel 2',
		flex: 2
	});
	
	var vbox = Ext.create('Ext.window.Window', {
		title: 'VBox Layout',
		width: 120,
		height: 300,
		layout: {
		 type: 'vbox',
		 align: 'stretch'
		},
		defaults: {
		 bodyStyle: 'padding:15px'
		},
		items: [panel1, panel2]
	});
	vbox.show();

	
});



