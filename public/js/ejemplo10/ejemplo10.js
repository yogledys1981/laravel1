/*********************************************************/
/*                ejemplo10.js                           */
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
	    //Definiendo propiedades de la clase
		Fabricante: 'Chevrolet',
		Modelo: 'Optra',
		
		//Defininiendo métodos de la clase
		getFabricante: function() {
		 return this.Fabricante;
		},
		setFabricante: function(valor) {
		 this.Fabricante = valor;
		},
		resetFabricante: function(){
		 this.setFabricante('Chevrolet');
		},
		aplicarFabricante: function(Fabricante) {
		 //Ejecuta una accion para aplicar algun valor (ejemplo actualizar un elemento DOM)
		 Ext.get('Fabricante').update(Fabricante);
		 return Fabricante;
		},
		
		getModelo: function() {
		 return this.Modelo;
		},
		setModelo: function(valor) {
		 this.Modelo = valor;
		},
		resetModelo: function() {
		 this.setModelo('Optra');
		},
		aplicarModelo: function(Modelo) {
		 //Ejecuta una accion para aplicar algun valor (ejemplo actualizar un elemento DOM)
		 Ext.get('Modelo').update(Modelo);
		 return Modelo;
		},
		
		getDetalles: function() {
		 alert('El fabricante es ' + this.Fabricante + ' y el modelo es ' + this.Modelo);
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



