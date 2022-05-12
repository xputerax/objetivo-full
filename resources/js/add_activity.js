let input = document.getElementById("inputText");
let list= document.getElementById("list");
let minimalValue = 3;
let listNum = 0;

window.addList = function () {
  // get
  let inputText = filterList(input.value);
  // set
  if (inputText) {
    list.innerHTML += ` <li class="list-group-item " id="list${listNum}">
    <div class="row">
    <div class="col-1">
    <input class="" type="checkbox" id="check${listNum}" onclick="done(${listNum})">
    </div>
    <div class="col-10">
    <span class="p" id="text${listNum}"> ${inputText} </span>
    </div>
    </div>
    <button class="btn btn-primary btn-sm mt-2" onclick="deleteList(${listNum})">Delete</button>
    <button class="btn btn-primary btn-sm mt-2" onclick="editList(${listNum})">Edit</button>
    </li> `;
    input.value=" ";
    listNum++;
  }
}

window.done = function (listId) {
  let checkbox = document.getElementById(`check${listId}`);
  let current = document.getElementById(`text${listId}`);
  let classExit=current.classList.contains("text-decoration-line-through");
  if (classExit == true) {
    current.classList.remove("text-decoration-line-through");
  } else {
    current.classList.add("text-decoration-line-through");
  }
}

window.filterList = function (x) {
  if (!x) return false;

  if (x.length >= minimalValue) {
    return x;
  } else {
    alert("Please enter more than 3 words")
  }
}

window.editList = function (listId) {
  let currentText = document.getElementById(`text${listId}`);
  let newText = prompt("Wanna Change list?",currentText.innerHTML);
  if (filterList(newText)) {
    currentText.innerHTML = newText;
  }
}

window.deleteList = function (listId) {
  let current = document.getElementById(`text${listId}`).innerHTML;
  let p = document.getElementById("list")
  let c = document.getElementById(`list${listId}`);
  p.removeChild(c);
}
