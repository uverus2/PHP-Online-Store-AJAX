function mainOne() {

    document.getElementById("search").addEventListener("keyup", ajaxrequest);
    userB();
}

function ajaxrequest() {

    var xhr2 = new XMLHttpRequest();

    var a = document.getElementById("search").value;

    xhr2.addEventListener("load", responseReceived);

    xhr2.open('GET', 'searching.php?search=' + a);


    xhr2.send();

}


function responseReceived(e) {
    document.getElementById('response').innerHTML = e.target.responseText;
}

function userB() {
    var xhr2 = new XMLHttpRequest();

    xhr2.addEventListener("load", responses);
    xhr2.open('GET', 'ajaxbasket3.php');
    xhr2.send();
}

function responses(e) {
    document.getElementById("userB").innerHTML = e.target.responseText;
}

function add(id) {

    var xhr2 = new XMLHttpRequest();
    var qty = document.getElementById('qty' + id).value;

    xhr2.open('GET', 'ajaxbasket2.php?ID=' + id + '&qty=' + qty);
    xhr2.addEventListener("load", responseS);
    xhr2.send();
}

function responseS(e) {
    document.getElementById("userB").innerHTML = e.target.responseText;

}


function remove(id) {

    var xhr2 = new XMLHttpRequest();
    xhr2.open('GET', 'ajaxRemoveBasket.php?ID=' + id);
    xhr2.addEventListener("load", removing);
    xhr2.send();
}

function removing(e) {
    document.getElementById("userB").innerHTML = e.target.responseText;
}