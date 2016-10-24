function valida_radiobuttons() {
var a = 0, rdbtn=document.getElementsByName("efectomemoria");
for(i=0;i<rdbtn.length;i++) {
if(rdbtn.item(i).checked == false) {
a++;
}
}
if(a == rdbtn.length) {
alert("PORFAVOR, SELECCIONE EFECTO MEMORIA");
document.getElementById("EFECTOMEMORIA").style.border = "2px solid red";
return false;
}
else {
document.getElementById("EFECTOMEMORIA").style.border = "";
}
/////////////////////////////////////////////////////////AQUI EMPIEZA OTRO


//////////////////////////7




}



