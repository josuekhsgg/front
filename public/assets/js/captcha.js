
	function Captcha(mainCaptcha) {
	var alpha4 = new Array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
    var alpha3 = new Array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
    var i;
    for (i = 0; i < 4; i++) {
        var a = alpha4[Math.floor(Math.random() * alpha4.length)];
        var b = alpha3[Math.floor(Math.random() * alpha3.length)];
        var c = alpha3[Math.floor(Math.random() * alpha3.length)];
        var d = alpha3[Math.floor(Math.random() * alpha3.length)];
        var e = alpha3[Math.floor(Math.random() * alpha3.length)];
        
    }
    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' ' ;
    var campo = document.getElementById(mainCaptcha);
    document.getElementById("txtCode").value="";
    document.getElementById("txtCode").classList.remove('bueno');
	document.getElementById("txtCode").classList.remove('malo');
    campo.value=code;

     CreaIMG(code);   
    //setElementValue(mainCaptcha, code);
}

function ValidCaptcha(mainCaptcha, txtInput) {
    //var string1 = removeSpaces(getElementValue(mainCaptcha));
    //var string2 = removeSpaces(getElementValue(txtInput));

    var string1 = removeSpaces(document.getElementById(mainCaptcha).value);
    var string2 = removeSpaces(document.getElementById(txtInput).value);

    if (string1 == string2) {
    	//alert("es igual");
        return true;
    }
    else {
    	//alert("no es igual");
        //Captcha(mainCaptcha);
        return false;
    }
}
function removeSpaces(string) {
    return string.split(' ').join('');
}	

function CreaIMG(texto) {
    var ctxCanvas = document.getElementById('mainCaptcha').getContext('2d');
    var fontSize = "30px";
    var fontFamily = "Arial";
    var width = 200;
    var height = 50;
    //tamaño
    ctxCanvas.canvas.width = width;
    ctxCanvas.canvas.height = height;
    //color de fondo
    ctxCanvas.fillStyle = "white";
    ctxCanvas.fillRect(0, 0, width, height);
    //puntos de distorsion
    //ctxCanvas.setLineDash([0, 10]); //fondo unicolor
       ctxCanvas.setLineDash([7, 0]); //lineas completas
    ctxCanvas.lineDashOffset = 50;
    ctxCanvas.beginPath();
    var line;
    for (var i = 0; i < (width); i++) {
        line = i * 5;
        ctxCanvas.moveTo(line, 0);
        ctxCanvas.lineTo(0, line);
    }
    ctxCanvas.stroke();
    //formato texto
    ctxCanvas.direction = 'ltr';
    ctxCanvas.font = fontSize + " " + fontFamily;
    //texto posicion
    var x = (width / 5);
    var y = (height / 3) * 2;
    //color del borde del texto
    ctxCanvas.strokeStyle = "black";
    ctxCanvas.strokeText(texto, x, y);
    //color del texto
    ctxCanvas.fillStyle = "#555";
    ctxCanvas.fillText(texto, x, y);
}
function ValidCodigo() {
	
	var cod = document.getElementById("txtCode");
    var strCod = cod.value; 
	var valCapt=ValidCaptcha('mainCaptcha', 'txtCode');
	if(valCapt==true){
		cod.classList.remove('malo');
		cod.classList.add('bueno');
        cod.readOnly = true;

		revisar(document.getElementById('formulario-persona'));
	}else{
        //alert(strCod.length);
        
		cod.classList.remove('bueno');
		cod.classList.add('malo');
        if(strCod.length==5){

            Captcha('mainCaptcha');
        }
	}
//	alert(valCapt);
}
