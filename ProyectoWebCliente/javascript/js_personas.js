
function validar() {

if(document.frm_personas.txt_numTar.value.length==0){
	alert("Debe ingresar una Tarjeta");
	document.frm_personas.txt_numTar.focus();

	return 0;
}

if(document.frm_personas.txt_Mven.value.length==0){
	alert("Debe ingresar el mes de vencimiento");
	document.frm_personas.txt_Mven.focus();

	return 0;
}

if(document.frm_personas.txt_Aven.value.length==0){
	alert("Debe ingresar el año de vencimiento");
	document.frm_personas.txt_Aven.focus();

	return 0;
}

if(document.frm_personas.txt_codigo.value.length==0){
	alert("Debe ingresar el codigo de seguridad");
	document.frm_personas.txt_codigo.focus();

	return 0;
}else{
	alert("Informacion Procesada");
}


var nt= document.frm_personas.txt_numTar.value;
var mes=document.frm_personas.txt_Mven.value;
var año=document.frm_personas.txt_Aven.value;
var codigo=document.frm_personas.txt_codigo.value;
var tipo= document.frm_personas.tipo.getElementById();







}
function enviar(){



}