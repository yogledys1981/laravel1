/*********************************************************/
/*                ejemplo08.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {

	// Definir una nueva clase 'Vehiculo' sobre el namespace 'Extjsbasico'
	Ext.define('Extjsbasico.Vehiculo', {
	    //Definiendo las propiedades de la clase
		Fabricante: 'Chevrolet',
		Modelo: 'Optra',
		//Defininiendo los métodos de la clase
		getDetalles: function(){
		 alert('El fabricante es ' + this.Fabricante + ' y el modelo es ' + this.Modelo);
	    }
	}, function() {
		console.log('Extjsbasico.Vehiculo definida la clase');
	});

	//Crea una instancia de la clase Extjsbasico.Vehiculo
	var miVehiculo = Ext.create('Extjsbasico.Vehiculo');
	alert(miVehiculo.Fabricante); // Imprime Chevrolet
	miVehiculo.getDetalles(); // Imprime El fabricante es Chevrolet y el modelo es Optra

});



