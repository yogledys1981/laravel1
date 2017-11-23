/*********************************************************/
/*                ejemplo17.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {
	
    //Configuramos el path relativo del namespace
	Ext.Loader.setConfig({
		enabled: true,
		paths: {
		 'Extjsbasico': 'js/src/Extjsbasico'
		}
	});
	
	//Ahora la cargamos dinamicamente usando Ext.require
	Ext.require('Extjsbasico.Vehiculo', function() {
	 //Instancioamos un nuevo vehiculo	
	 var carro = Ext.create('Extjsbasico.Vehiculo', 'Ford', 'Fiesta',60);
	 carro.Viajes(200);
	});
 
});



