/*********************************************************/
/*                ejemplo27.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  :14 de septiembre del 2016
*/

/*
 * Comentario:
 * 
 	Las regiones norte y sur pueden cambiar de tamano y las regiones del oeste
 	y este puede ser encogidas o expandidas. Estas cuatro regiones son 
 	opcionales en un esquema de Border layout. El centro es la unica region que 
 	requiere de un contenedor mientras se utiliza el Border layout. No es 
 	necesario especificar la anchura y la altura de la region central, ya que es
 	tomado del espacio restante del cuerpo del contenedor.
 * 
 */
Ext.onReady(function() {
	
	var border = Ext.create('Ext.window.Window', {
		width: 600,
        height: 500,
		title: 'Border Layout',
		layout: 'border',
		closeAction :'hide',
        plain       : true,
        closable    : true,
        minimizable : false,
        maximizable : true,
		defaults:{
			xtype: 'panel'
		},
		items: [{
				 title: 'Region Norte, redimensionable',
				 region: 'north',
				 height: 100,
				 split: true
				},{
				 title: 'Region Sur, redimensionable',
				 region: 'south',
				 height: 100,
				 split: true
				},{
				 title: 'Region Oeste, redimensionable',
				 region:'west',
				 width: 250,
				 collapsible: true,
				 layout: 'fit'
				},{
				 title: 'Region Este, redimensionable',
				 region:'east',
				 width: 250,
				 collapsible: true,
				 layout: 'fit'
				},{
				 title: 'Region Cental',
				 region: 'center',
				 layout: 'fit'
				}
			   ]
	});
	border.show();
	
	
});



