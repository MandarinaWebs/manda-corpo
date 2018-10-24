// When the user clicks on <div>, open the popup
				function myFunction() {
					var popup = document.getElementById("myPopup");
					popup.classList.toggle("show");
				}
				// Get the modal
				var modal = document.getElementById('myModal');
				var bloqueado_menu = document.getElementById('bloqueado_menu');

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];
				var span_2 = document.getElementsByClassName("close")[1];

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
					modal.style.display = "none";
				}
				span_2.onclick = function() {
					bloqueado_menu.style.display = "none";
				}
				document.getElementById("cancela_borrar").onclick  = function() {
					modal.style.display = "none";
				}
				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
				function borrar(id, nombre) {
					document.getElementById("borra_articulo").href = "borrar.php?id=" + id + "&nombre=" + nombre; 
					modal.style.display = "block";
				}
				function bloqueado() {
					bloqueado_menu.style.display = "block";
				}