var usrinp = document.getElementById("usrinp").value;
var emainp = document.getElementById("emainp").value;
var pswinp = document.getElementById("pswinp").value;
var psw2inp = document.getElementById("psw2inp").value;
var subinp = document.getElementById("subinp").value;
var allowed = false

if ( usrinp.length == 0 ) {
	invalidUSR = true
} else if ( usrinp.match(/^[a-zA-Z0-9]+$/) ) {
	invalidUSR = false
}

if ( emainp.length == 0 ) {
	invalidEMA = true
} // else if

if ( pswinp.length == 0 || psw2inp.length == 0 ) {
	invalidPSW = true
} else if ( pswinp.match(/^[a-zA-Z0-9]+$/) && psw2inp.match(/^[a-zA-Z0-9]+$/) && pswinp == psw2inp ) {
	invalidPSW = false
}


