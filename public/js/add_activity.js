/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/add_activity.js ***!
  \**************************************/
var input = document.getElementById("inputText");
var list = document.getElementById("list");
var minimalValue = 3;
var listNum = 0;

window.addList = function () {
  // get
  var inputText = filterList(input.value); // set

  if (inputText) {
    list.innerHTML += " <li class=\"list-group-item \" id=\"list".concat(listNum, "\">\n    <div class=\"row\">\n    <div class=\"col-1\">\n    <input class=\"\" type=\"checkbox\" id=\"check").concat(listNum, "\" onclick=\"done(").concat(listNum, ")\">\n    </div>\n    <div class=\"col-10\">\n    <span class=\"p\" id=\"text").concat(listNum, "\"> ").concat(inputText, " </span>\n    </div>\n    </div>\n    <button class=\"btn btn-primary btn-sm mt-2\" onclick=\"deleteList(").concat(listNum, ")\">Delete</button>\n    <button class=\"btn btn-primary btn-sm mt-2\" onclick=\"editList(").concat(listNum, ")\">Edit</button>\n    </li> ");
    input.value = " ";
    listNum++;
  }
};

window.done = function (listId) {
  var checkbox = document.getElementById("check".concat(listId));
  var current = document.getElementById("text".concat(listId));
  var classExit = current.classList.contains("text-decoration-line-through");

  if (classExit == true) {
    current.classList.remove("text-decoration-line-through");
  } else {
    current.classList.add("text-decoration-line-through");
  }
};

window.filterList = function (x) {
  if (!x) return false;

  if (x.length >= minimalValue) {
    return x;
  } else {
    alert("Please enter more than 3 words");
  }
};

window.editList = function (listId) {
  var currentText = document.getElementById("text".concat(listId));
  var newText = prompt("Wanna Change list?", currentText.innerHTML);

  if (filterList(newText)) {
    currentText.innerHTML = newText;
  }
};

window.deleteList = function (listId) {
  var current = document.getElementById("text".concat(listId)).innerHTML;
  var p = document.getElementById("list");
  var c = document.getElementById("list".concat(listId));
  p.removeChild(c);
};
/******/ })()
;