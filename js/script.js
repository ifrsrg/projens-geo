var projetos = localStorage.length;

function enviar() {
	proj_documentos = document.getElementById("projeto").value;
	alert("oi");

	localStorage[localStorage.length] = JSON.stringify(proj_documentos);
	listar();
}

function listar() {
	document.getElementById("projeto").innerHTML = "";
	alert("Oi");
	for (var chave = 0; chave < localStorage.length; chave++) {
		var proj_documentos = JSON.parse(localStorage.getItem(chave));
		document.getElementById("projeto").innerHTML += proj_documentos;
	}
}