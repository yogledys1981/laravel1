/*********************************************************/
/*                ejemplo26.js                           */
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
 	La disposicion o Fit layout solo muestra un unico componente en el 
 	contenedor. El componente va rellenar todo el espacio en el cuerpo del
 	contenedor.
 * 
 */
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		bodyStyle: 'padding:15px',
		html: 'Lleno con este contenido. Puede probar agregando mas contenido aca. Perdone que coloque acentos. Voy a colocar un salto de linea en html <br/>Siga probando por favor.<br/>Buenos dias.'
	});
	
	var fit = Ext.create('Ext.window.Window', {
		title: 'Fit Layout',
		width: 100,
		height: 150,
		layout:'fit',
		items: [panel1]
	});
	fit.show();
	
});



