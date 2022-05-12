let listNum = 0;
let input = document.getElementById("inputAction");

window.addAction = function() {
    actionValue = input.value;

    if (input.value) {
        actionPlans.innerHTML += ` <li class="list-group-item mt-2" id="list${listNum}"><span class="p" id="text${listNum}"> ${actionValue} </span></li> `;
        input.value = " ";
        listNum++;
    }

    preventDefault();
}
