/*********************************************************/
/*                ejemplo12.js                           */
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
	 //Definiendo propiedades de la clase
	 config: {
	  Fabricante: 'No definido',
	  Modelo: 'No definido',
	  TopeVelocidad: 0
	 },
	 //Definiendo el Constructor
	 constructor: function(fabricante, modelo, topevelocidad) {
	  //inicializa nuestro objeto con el config (las propiedades del objeto)
	  this.initConfig();
	  if(fabricante){
	   this.setFabricante(fabricante);
	  }
	  if(modelo){
	   this.setModelo(modelo);
	  }
	  if(topevelocidad){
	   this.setTopeVelocidad(topevelocidad);
	  }
	 },
	 Viajes: function(distancia){
	  alert('El ' + this.getFabricante() + ' ' + this.getModelo() + ' ha viajado una distancia de ' + distancia + ' kms. a una velocidad de ' + this.getTopeVelocidad() + ' kms./h');
	 }
	}, function(){
		console.log('Extjsbasico.Vehiculo definida la clase');
       });

   //Crea una instancia de la clase Extjsbasico.Vehiculo
   var miVehiculo = Ext.create('Extjsbasico.Vehiculo', 'Chevrolet', 'Optra', 60);
   miVehiculo.Viajes(100); // Imprime 'El Chevrolet Optra ha viajado una distancia de 100 kms. a una velocidad de 60 kms./h
	
   //Definimos una segunda clase llamada Avion que herede de Vehiculo
   Ext.define('Extjsbasico.Avion', {
	 extend: 'Extjsbasico.Vehiculo',
	  config: {
	   maxAltitud: 0
	  },
	  constructor: function(fabricante, modelo, topevelocidad, maxaltitud) {
	   //inicializa nuestro objeto con el config (las propiedades del objeto)
	   this.initConfig();
	   if (maxaltitud) {
		this.setMaxAltitud(maxaltitud);
	   }
	   //Llama al constructor del Padre
	   this.callParent([fabricante, modelo, topevelocidad]);
	  },
	 }, function(){
		 console.log('Extjsbasico.Avion definida la clase');
        });

   //Crea una instancia de la clase Extjsbasico.Avion
   var avion = Ext.create('Extjsbasico.Avion', 'Boeing', '747', 500, 30000);
   avion.Viajes(800);
   
});



