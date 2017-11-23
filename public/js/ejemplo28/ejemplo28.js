/*********************************************************/
/*                ejemplo28.js                           */
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
 	En este ejemplo, tenemos una ventana con un titulo, ancho (300 pixeles), 
 	altura (200 pixeles) con una distribucion Absolute layout. Esta ventana solo
  	contiene un panel como elemento secundario.
  	
	El panel que declaramos, sera un item dentro del contenedor Window. 
	Este panel tiene un titulo y un contenido HTML. Hemos establecido 80% de la
	anchura y un 80% de altura. Tambien establecemos la posición del panel1 en
	el cuerpo, que es x = 10 e y = 10. La esquina superior izquierda de la 
	ventana sera: x = 0 e y = 0.
 * 
 */
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: 'x: 10; y: 10 - anchor: 80% 80%', /*
		 										  Esta configuracion mostrara
		 										  el texto dentro del panel.
		 										*/
		anchor:'80% 80%',
		x: 10,
		y: 10
	});
	
	var absolute = Ext.create('Ext.window.Window', {
		title: 'Absolute Layout',
		width: 300,
		height: 200,
		layout:'absolute',
		defaults: {
			bodyStyle: 'padding:10px'
		},
		items: [panel1]
	});
	absolute.show();
	
});



