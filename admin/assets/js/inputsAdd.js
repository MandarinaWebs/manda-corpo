
var inputs = document.querySelectorAll( '.inputfile' );
				Array.prototype.forEach.call( inputs, function( input )
				{
					var label	 = input.nextElementSibling,
						labelVal = label.innerHTML;

					input.addEventListener( 'change', function( e )
					{
						var fileName = '';
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
			        var inputs = document.querySelectorAll( '.inputfile' );
					Array.prototype.forEach.call( inputs, function( input ){

						var label	 = input.nextElementSibling,
							labelVal = label.innerHTML;

						var fileName = 'Añadir foto';
						label.querySelector( 'span' ).innerHTML = fileName;
					});
			    }
				
function validarImagen() {
   var fileSize = $('#file')[0].files[0].size;
   var siezekiloByte = parseInt(fileSize / 1024);
   if (siezekiloByte >  2048) {
       alert("La Foto de portada excede el límite de tamaño establecido (2MB). Seleccione otra foto de menor tamaño. La foto tiene un tamaño de: " + siezekiloByte + "kb");
       return false;
   }
}