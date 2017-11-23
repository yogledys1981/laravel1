/*********************************************************/
/*                ejemplo25.js                           */
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
 	En el codigo, tenemos una ventana Card layout. Esta ventana contiene
    tres componentes con contenido HTML declarados en los puntos de 
    configuracion. Dado que solo un componente se pueden mostrar a la vez,
    la ventana que gestiona el componente se mostrara en primer lugar,
    utilizando la configuracion activeItem. En este ejemplo, cuando nos 
    muestran la ventana, el primer elemento se mostrara en el cuerpo del 
    recipiente (activeItem: 0).
    
	Tambien hemos anadido dos botones para controlar sl asistente de 
	configuracion (proxBoton y prevBoton) por lo que el usuario puede navegar
	a traves de las pantallas. Cuando se muestra el primer paso, solo se
	activara el boton siguiente. Y cuando el usuario hace clic en los botones de
	siguiente o anterior, se ejecutara la funcion navHandler. 
	
	En esta funcion, navHandler, primero obtiene el elemento que se encuentra
	activo. Si el usuario pulsa un boton, ya sea Paso proximo o Paso anterior.
	Si el usuario hace clic en el boton Paso proximo, que se incrementara el
	indice activo porque queremos navegar a la siguiente pagina y disminuir el
	indice activo, si queremos lo contrario, entonces conseguimos una referencia
	para los dos botones, por lo que puede controlar cuando tenemos que 
	desactivar o activar los botones. Vamos a desactivar el boton Paso anterior
	cuando presentamos el Primer paso y y vamos a deshabilitar el boton 
	Proximo paso, cuando presentamos el tercer paso (ultimo); de lo contrario,
	se activan los botones. Es una simple logica para ejemplificar cómo podemos
	gestionar un asistente para Card layout.
 * 
 */
Ext.onReady(function() {
	
	var navHandler = function(btn) {
		var itemActivo = card.layout.activeItem;
		var activo = card.items.indexOf(itemActivo);
		if (btn.id == 'proxBoton') {
			activo += 1;
		}
		else if (btn.id == 'prevBoton') {
			activo -= 1;
		}
		card.layout.setActiveItem(activo);
		var prev = card.dockedItems.items[1].items.items[0];
		var prox = card.dockedItems.items[1].items.items[2];
		if (activo == 0){
			prev.setDisabled(true);
		} else if (activo == 1){
			prev.setDisabled(false);
			prox.setDisabled(false);
		} else if (activo == 2){
			prox.setDisabled(true);
		}
	};
	
	var card = Ext.create('Ext.window.Window', {
		title: 'Card Layout',
		width: 400,
		height: 200,
		layout: 'card',
		activeItem: 0,
		bodyStyle: 'padding:70 50 0 150',
			defaults: {
				border:false
		},
		bbar:
		[{
		  id: 'prevBoton',
		  text: 'Paso previo',
		  handler: navHandler,
		  disabled: true
		 },
		 '->',
		 {
		  id: 'proxBoton',
		  text: 'Paso pr&oacute;ximo',
		  handler: navHandler
		 }
		],
		items: 
		[
		 {
		  html: '<p>Paso 1 de 3</p>'
		 },{
		  html: '<p>Paso 2 de 3</p>'
		 },{
		  html: '<p>Paso 3 de 3</p>'
		 }
		]
	});
	card.show();

	
});



