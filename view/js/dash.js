function hideShowCardMoney(id) {
    var money = document.getElementById("card-" + id + "-money");
    var button = document.getElementById("card-" + id + "-button");
    if (money.style.display == "none") {
        money.style.display = "block";
        button.innerHTML = "Ocultar saldo";
    } else {
        money.style.display = 'none';
        button.innerHTML = "Ver saldo";
    }
}

/*  hideShow form*/
function hideShowForm(id) {
    var form = document.getElementById('rechargeForm-' + id);
    var button = document.getElementById('buttonRecharge-' + id);
    if (form.style.display == "none") {
        form.style.display = "block";
        button.innerHTML = "Cancelar";
    } else {
        form.style.display = "none";
        button.innerHTML = "Recargar";
    }
}

/* Recharge form */

function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}

function execmascara() {
    v_obj.value = "S/ " + v_fun(v_obj.value);
}

function cpf(v) {
    v = v.replace(/([^0-9\.]+)/g, '');
    v = v.replace(/^[\.]/, '');
    v = v.replace(/[\.][\.]/g, '');
    v = v.replace(/\.(\d)(\d)(\d)/g, '.$1$2');
    v = v.replace(/\.(\d{1,2})\./g, '.$1');
    v = v.toString().split('').reverse().join('').replace(/(\d{3})/g, '$1,');
    v = v.split('').reverse().join('').replace(/^[\,]/, '');
    return v;
}