function editar(id) {
					document.getElementById("contenido_caja_" + id).style.display = "none";
					document.getElementById("editar_caja_" + id).style.display = "block";
				}
				function cierra_editar(id) {
					document.getElementById("contenido_caja_" + id).style.display = "block";
					document.getElementById("editar_caja_" + id).style.display = "none";
				}