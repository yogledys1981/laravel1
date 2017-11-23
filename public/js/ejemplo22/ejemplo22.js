/*********************************************************/
/*                ejemplo22.js                           */
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
 	Para expandir un panel, haga clic en el icono de signo mas
 	(+) para contraer el panel que se muestrando actualmente,
 	haga clic en el signo menos (-). Si tratamos de cambiar el
 	tamano de la ventana, todos los paneles secundarios se
 	cambiaran tambien.
 * 
 */
Ext.onReady(function() {
	
	var panel1 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 1',
		html: '<b>Panel 1</b>'
	});
	
	var panel2 = Ext.create('Ext.panel.Panel', {
		title: 'Panel 2',
		html: '<b>Panel 2</b>'
	});
	
	var panel3 = Ext.create('Ext.panel.Panel', {
			title: 'Panel 3',
			html: '<b>Panel 3</b>'
	});
	
	var panel4 = Ext.create('Ext.panel.Panel', {
			title: 'Panel 4',
			html: '<b>Panel 4</b>'
	});
	
	var panel5 = Ext.create('Ext.panel.Panel', {
			title: 'Panel 5',
			html: '<b>Panel 5</b>'
	});
	
	var accordion = Ext.create('Ext.window.Window', {
			title: 'Accordion Layout',
			margins:'5 0 5 5', // margins o margenes con espacios al top right bottom left
			split:true, /*
							Esta opcion de configuracion se va a aplicar a los
							elementos secundarios que gestiona este diseno.
							Cada region con split:true obtendra un divisor 
							que permite el cambio de tamano manual del
							contenedor. A excepcion de la region central.
							Mas informacion ir a:
							http://docs.sencha.com/extjs/5.0.1/#!/api/Ext.layout.container.Accordion
			               
			            */
			width: 210,
			height:350,
			layout:'accordion',
			defaults: {
			 bodyStyle: 'padding:35 15 0 50' // padding o relleno con espacios al top right bottom left
				                             // Mas informacion de padding ir a
				                             // http://www.w3schools.com/cssref/pr_padding.asp
			},
			items: [panel1, panel2, panel3, panel4, panel5]
	});
	accordion.show();

	
});



