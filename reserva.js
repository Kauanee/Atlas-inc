document.getElementById("Liberar").addEventListener("click", LibrerarPoltronas);
document.getElementById("Calcular").addEventListener("click", CalcularValorTotal);
document.getElementById("Sair").addEventListener("click", Sair);

function LibrerarPoltronas() {
    var imagens = document.getElementsByTagName("img");

    for (var cont in imagens) {
        if (imagens[cont].name == "PoltronaEscolhida") {
            imagens[cont].src = "imagens/pufflivre.png";
            imagens[cont].name = "PoltronaLivre";
        } else if (imagens[cont].name == "PoltronaEscolhidaPreferencial") {
            imagens[cont].src = "imagens/puffdeficiente.png";
            imagens[cont].name = "PoltronaLivrePreferencial";
        }
    }
}

function VerificarPoltronas(name, id) {
    if (name == "PoltronaLivre") {
        OcuparPoltronas(id);
    } else if (name == "PoltronaLivrePreferencial") {
        OcuparPoltronasPreferenciais(id)
    } else {
        if (name == "PoltronaOcupada" || name == "PoltronaOcupadaPreferencial") {
            alert("A Poltrona está Ocupada!");
        }
    }
}

function OcuparPoltronas(id) {
    document.getElementById(id).src = "imagens/puffselecionado.png";
    document.getElementById(id).name = "PoltronaEscolhida";
}

function OcuparPoltronasPreferenciais(id) {
    document.getElementById(id).src = "imagens/puffselecionado.png";
    document.getElementById(id).name = "PoltronaEscolhidaPreferencial";
}

function CalcularValorTotal() {
    debugger;
    var imagens = document.getElementsByTagName("img");
    var acumulador = 0;
    var total = 0;

    for (var cont in imagens) {
        if (imagens[cont].name == "PoltronaEscolhida" || imagens[cont].name == "PoltronaEscolhidaPreferencial") {
            acumulador += 1;
        }
    }

    /*if (acumulador % 2 == 0) {
        var aux = acumulador / 2 - 1;
    } else {
        var aux = acumulador / 2 - 0.5;
    }*/

    total = acumulador * 25;

    if (total > 0)
        alert("Preço do Ingresso Unitário: R$25,00\n" +
            "Quantidade de Assentos Escolhidos: " + acumulador + "\n" +
            "Valor Total: R$" + total.toFixed(2));

    for (var cont in imagens) {
        if (imagens[cont].name == "PoltronaEscolhida") {
            imagens[cont].src = "imagens/puffreservado.png";
            imagens[cont].name = "PoltronaOcupada";
        } else if (imagens[cont].name == "PoltronaEscolhidaPreferencial") {
            imagens[cont].src = "imagens/puffreservado.png"
            imagens[cont].name = "PoltronaOcupadaPreferencial";
        }
    }
}

function Sair() {
    alert("Obrigado por nos visitar, tenha um bom filme!");
    var tab = window.open(window.location, "_self");
    tab.close();
}