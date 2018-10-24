function etiquetas() {
	if (document.getElementById("etiquetas_text").value != "")
		document.getElementById('lista_etiquetas').innerHTML += "<li><a  onclick='parentNode.parentNode.removeChild(parentNode)'>" + document.getElementById('etiquetas_text').value + "</a><input type='hidden' name='etiquetas[]' value='" + document.getElementById('etiquetas_text').value + "'/></li>";
	document.getElementById("etiquetas_text").value = "";
}