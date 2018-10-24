function comprueba() {
					if  ("" != document.getElementById("passNew2").value && "" != document.getElementById("passNew").value) {
						if (document.getElementById("passNew").value != document.getElementById("passNew2").value) {
							document.getElementById("coinciden").hidden = true;
							document.getElementById("no_coinciden").hidden = false;
						} else {
							document.getElementById("coinciden").hidden = false;
							document.getElementById("no_coinciden").hidden = true;
						}
					} else {
						document.getElementById("no_coinciden").hidden = true;
						document.getElementById("coinciden").hidden = true;
					}
				}
				function cierra() {
					document.getElementById("no_coinciden").hidden = true;
					document.getElementById("coinciden").hidden = true;
				}
				function escribiendo()	{
					if (document.getElementById("passNew").value == document.getElementById("passNew2").value) {
							document.getElementById("coinciden").hidden = false;
							document.getElementById("no_coinciden").hidden = true;
					} else {
						document.getElementById("no_coinciden").hidden = true;
						document.getElementById("coinciden").hidden = true;
					}					
				}