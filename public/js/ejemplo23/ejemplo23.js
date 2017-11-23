/*********************************************************/
/*                ejemplo23.js                           */
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
 	En este ejemplo, se establece el diseno de la ventana tipo
 	Table layout. Dentro de la configuracion de diseno, disponemos
 	el numero de columnas para crear la tabla (contenedor). 
 	Tambien establecemos la configuracion de tableAttrs , en la
 	que podemos establecer las propiedades que se aplicaran a
 	la tabla HTML, tal como la anchura y la altura. Establecemos
 	el ancho y alto de la tabla con un 100%, lo que significa
 	que los componentes utilizaran todo el espacio disponible
 	de forma horizontal como vertical.
 * 
 */
Ext.onReady(function() {
	
	var table = Ext.create('Ext.window.Window', {
		title: 'Table Layout',
		width: 250,
		height: 200,
		layout: {
			type: 'table',
			columns: 3,
			tableAttrs: {
				style: {
					width: '100%',
					height: '100%'
				}
			}
		},
		defaults: {
			bodyStyle: 'padding:10px'
		},
		items:[
		    {
			 html:'Celda 1',
				rowspan: 3 //Esta celda sera dividida en 3 filas
			},{
			 html:'Celda 2'
			},{
			 html:'Celda 3'
			},{
			 html:'Celda 4'
			},{
			 html:'Celda 5'
			},{
			 html:'Celda 6',
			 colspan: 2 //Esta celda sera dividida en 2 columnas
			},{
			 html:'Celda 7'
			},{
			 html:'Celda 8'
			},{
			 html:'Celda 9'
			}
		]
	});
	table.show();
	
});



