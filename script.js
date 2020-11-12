// HOME 

function mouseOut() {
    document.getElementById("exemplo").innerHTML = "Seja bem vinda(o)!!!";
}

function mouseOver() {
    document.getElementById("exemplo").innerHTML = "Seus Mimos estão aqui!";
}

// PAG CONTATO


function funcao() {
    document.write('Obrigada por enviar mensagem!!! Responderemos em breve.');
}

//PAG PRODUTO

function exibircategoria(categoria) {

    let elementos = document.getElementsByClassName('produtos');
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:block";
        else
            elementos[i].style = "display:none";
    }
}

let exibirtodas = () => {

    let elementos = document.getElementsByClassName('produtos');

    for (var i = 0; i < elementos.length; i++) {

        elementos[i].style = "display:block";

    }

}


function destaque(imagem) {
    console.log(imagem);
    if (imagem.width == 240)
        imagem.width = 140;

    else
        imagem.width = 240;
}