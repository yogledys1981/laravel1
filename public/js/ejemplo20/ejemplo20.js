/*********************************************************/
/*                ejemplo20.js                           */
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
 	Cada panel tiene su titulo y contenido HTML. Cada uno tambien tiene 
 	una configuracion flex (flexible). El primer panel configurado con flex 1 
 	y el segundo panel con flex 3. La ventana se resumen a estas configuraciones
	(en este ejemplo, el total sera de 4) y se distribuye horizontalmente
	el espacio en relacion a cada hijo. El primer panel tendra una cuarta parte
	(25%) de la ventana de espacio horizontal y el segundo panel recibiran tres
	cuartas partes (75%) de la ventana de espacio horizontal.

	En la declaracion de la ventana, tenemos la configuracion de diseno. Indicamos
	que va a usar el diseno hbox y alinear sus hijos (items), y ajustara (strech)
	o utilizara toda la altura del espacio vertical de la ventana.
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
		flex: 3
	});
	
	var hbox = Ext.create('Ext.window.Window', {
		title: 'HBox Layout',
		width: 400,
		height:140,
		layout: {
			type: 'hbox',
			align: 'stretch'
		},
		defaults: {
		 bodyStyle: 'padding:10px'
		},
		items: [panel1, panel2]
	});
	hbox.show();
	
});



