function comprueba() {
					if  ("" != document.getElementById("passNew2").value && "" != document.getElementById("passNew").value) {
						if (document.getElementById("passNew").value != document.getElementById("passNew2").value) {
							document.getElementById("no_coinciden").hidden = false;
						} else {
							document.getElementById("no_coinciden").hidden = true;
						}
					} else {
						document.getElementById("no_coinciden").hidden = true;
					}
				}
				function cierra() {
					document.getElementById("no_coinciden").hidden = true;
				}
				
				function escribiendo(){
					document.getElementById("no_coinciden").hidden = true;
				}


var inputs = document.querySelectorAll( '.inputfile' );
				Array.prototype.forEach.call( inputs, function( input )
				{
					var label	 = input.nextElementSibling,
						labelVal = label.innerHTML;



					input.addEventListener( 'change', function( e )
					{
						var fileName = '';
						document.getElementById("actualizarFoto").value = 1;
						document.getElementById('botonBorrar').style.display = 'inline';
						if( this.files && this.files.length > 1 )
							fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
						else
							fileName = e.target.value.split( '\\' ).pop();

						if( fileName )
							label.querySelector( 'span' ).innerHTML = fileName;
						else
							label.innerHTML = labelVal;
					});
				});


				function limpiarInputFile() {
			        var file = document.getElementById("file");
			        file.value = '';
			       	document.getElementById('botonBorrar').style.display = 'none';
			       	document.getElementById('fotoUser').style.display = 'none';
			        var inputs = document.querySelectorAll( '.inputfile' );
					Array.prototype.forEach.call( inputs, function( input ){

						var label	 = input.nextElementSibling,
							labelVal = label.innerHTML;

						var fileName = 'Añadir foto';
						label.querySelector( 'span' ).innerHTML = fileName;
					});
					 limpiarFoto(2);
			    }

			    function limpiarFoto(input){
					document.getElementById("actualizarFoto").value = input;
					}
					
function validarImagen() {
   var fileSize = $('#file')[0].files[0].size;
   var siezekiloByte = parseInt(fileSize / 1024);
   if (siezekiloByte >  2048) {
       alert("La Foto de portada excede el límite de tamaño establecido (2MB). Seleccione otra foto de menor tamaño. La foto tiene un tamaño de: " + siezekiloByte + "kb");
	   return false;
   }
}