/*********************************************************/
/*                error.js                           */
/*********************************************************/
/*
  Autor  : Edgar Gonzalez
  Web    : http://egonzale.org
  Email  : edgargonzalezmunoz@gmail.com
  Version: 1.0 en javascript 1.2
  Fecha  : 14 de septiembre del 2016
*/
Ext.onReady(function() {
 Ext.MessageBox.show({
	     title:   'Error',
	     msg:     msgerror,
	     width:   400+msgerror.length,
	     icon:    Ext.MessageBox.ERROR,
	     buttons: Ext.MessageBox.YESNO,
	     animEl:  'myDiv',
	     fn:      function (id, value, opt) {
      	      	   if (id === 'yes') {
      	      	   	window.location.href='/';
      	      	   }
      	          }
 });
});



