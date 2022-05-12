/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/add_actions.js ***!
  \*************************************/
var listNum = 0;
var input = document.getElementById("inputAction");

window.addAction = function () {
  actionValue = input.value;

  if (input.value) {
    actionPlans.innerHTML += " <li class=\"list-group-item mt-2\" id=\"list".concat(listNum, "\"><span class=\"p\" id=\"text").concat(listNum, "\"> ").concat(actionValue, " </span></li> ");
    input.value = " ";
    listNum++;
  }

  preventDefault();
};
/******/ })()
;