function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
        if (tecla==8 || tecla==0) return true;
	    else  return false;
    }
}

function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}


function confirmasenha() {
    var senha1 = document.getElementById("txtSenha");
    var senha2 = document.getElementById("txtConfirma");
    if(senha1 !== senha2){
        alert("Senhas não conferem");
    }
    else{
        alert("Senhas conferem");
    }
        
}

function expand(obj){ 
    obj.height=obj.height*2.4; 
    obj.width=obj.width*2.4; 
}

function shorten(obj){ 
    obj.height=obj.height/2.4; 
    obj.width=obj.width/2.4; 
}