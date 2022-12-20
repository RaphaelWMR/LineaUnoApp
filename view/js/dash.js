function hideShowCardMoney(id, label1, label2) {
    var money = document.getElementById("card-" + id + "-money");
    var button = document.getElementById("card-" + id + "-button");
    if (money.style.display == "none") {
        money.style.display = "block";
        button.innerHTML = label1;
    } else {
        money.style.display = 'none';
        button.innerHTML = label2;
    }
}

/*  hideShow form*/
function hideShowForm(id, label1, label2) {
    var form = document.getElementById('rechargeForm-' + id);
    var button = document.getElementById('buttonRecharge-' + id);
    if (form.style.display == "none") {
        form.style.display = "block";
        button.innerHTML = label1; //recharge
    } else {
        form.style.display = "none";
        button.innerHTML = label2; //cancel
    }
}

/*HideShowOther */
function hideShowOther() {
    var card = document.getElementById('otherCardType');
    var name = document.getElementById('otherCardOwner');
    var button = document.getElementById('buttonRecharge-other');
    if (card.style.display == "none") {
        card.style.display = "block";
        name.style.display = "block";
        button.style.display = "block";
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