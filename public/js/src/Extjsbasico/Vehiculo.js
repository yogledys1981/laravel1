/*********************************************************/
/*                Vehiculo.js                            */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : egonzale@ucla.edu.ve
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/ 
   //Definicion de clase 'Vehiculo' sobre el namespace 'Extjsbasico'
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