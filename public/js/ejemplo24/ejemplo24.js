/*********************************************************/
/*                ejemplo24.js                           */
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
 	En el codigo, tenemos una ventana con el diseno de Column layout
 	con tres paneles configurado con sus elementos secundarios.
 	Cada panel tiene un contenido de titulo y HTML. Tambien configurado
 	con un columnWidth para cada uno. En el primer panel, hemos
 	establecido un columnWidth de 0.25, lo que significa que
 	este panel obtendrá 25% del espacio horizontal ventana. Lo
 	mismo sera para el segundo panel. El tercer panel tiene un
 	columnWidth de la mitad, lo que significa que este panel
 	recibira el 50% del espacio horizontal de la ventana. Tenga
 	en cuenta que se puede establecer el columnWidth de dos
 	maneras diferentes 
 * 
 */
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: '.25',
		columnWidth: .25 //equivale a 25%
	});
	
	var panel2 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 2',
		html: '.25',
		columnWidth: .25 //equivale a 25%
	});
	
	var panel3 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 3',
		html: '1/2',
		columnWidth: 1/2 //equivale a 50%
	});
	
	var column = Ext.create('Ext.window.Window', {
		title: 'Column Layout',
		width: 400,
		layout:'column',
		defaults: {
			height: 80,
			bodyStyle: 'padding:10px'
		},
		items: [panel1, panel2, panel3]
	});
	column.show();
	
});



