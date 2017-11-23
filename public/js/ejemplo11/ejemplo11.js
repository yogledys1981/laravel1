/*********************************************************/
/*                ejemplo11.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {

	//Definir una nueva clase 'Vehiculo' sobre el namespace 'Extjsbasico'
	Ext.define('Extjsbasico.Vehiculo', {
		//Definiendo propiedades de la clase con el modificador config
		//Con config implicitamente estan los metodos get y set de las propiedades o atributos de la clase
		config: {
		 Fabricante: 'Chevrolet',
		 Modelo: 'Optra'
		},

		//Definiendo el Constructor pasando la configuracion: config
		constructor: function(config) {
		 //inicializa nuestro objeto con el config (las propiedades del objeto)
		 this.initConfig(config);
		},
	
		aplicarFabricante: function(Fabricante) {
		 //Ejecuta una accion para aplicar algun valor (ejemplo actualizar un elemento DOM)
		 Ext.get('Fabricante').update(Fabricante);
		 return Fabricante;
		},

		aplicarModelo: function(Modelo) {
		 //Ejecuta una accion para aplicar algun valor (ejemplo actualizar un elemento DOM)
		 Ext.get('Modelo').update(Modelo);
		 return Modelo;
		},
		
		//Defininiendo métodos de la clase
		getDetalles: function() {
		 alert('El fabricante es ' + this.getFabricante() + ' y el modelo es ' + this.getModelo());
	    }
	}, function() {
		console.log('Extjsbasico.Vehiculo definida la clase');
	});

	//Crea una instancia de la clase Extjsbasico.Vehiculo
	var miVehiculo = Ext.create('Extjsbasico.Vehiculo');
	
    //Muestra los detalles del vehiculo
	miVehiculo.getDetalles(); 
	
	//Actualiza los detalles del vehiculo
	miVehiculo.setFabricante('Volkswagen');
	miVehiculo.setModelo('Golf');
	
	//Muestra los detalles del vehiculo actualizado
	miVehiculo.getDetalles();
	
	//Muestra las actualizaciones en los elementos Dom span
	miVehiculo.aplicarFabricante(miVehiculo.getFabricante());
	miVehiculo.aplicarModelo(miVehiculo.getModelo());

});



