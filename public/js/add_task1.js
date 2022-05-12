/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/add_task1.js ***!
  \***********************************/
var taskInput = document.querySelector(".task-input input");
var localTodoList = JSON.parse(localStorage.getItem("todo-list"));
var taskList_arr = [];
var current_index = 0;
$(document).ready(function () {
  if (localTodoList) {
    for (var i in localTodoList) {
      taskList_arr.push(localTodoList[i]);
    }

    loadTasks();
  }
});
taskInput.addEventListener("keyup", function (e) {
  var userTask = taskInput.value;

  if (e.key == "Enter" && userTask) {
    var obj = {};
    obj["id"] = current_index;
    obj["task"] = userTask;
    obj["completed"] = false;
    taskList_arr.push(obj);
    localStorage.setItem("todo-list", JSON.stringify(taskList_arr));
    taskInput.value = "";
    loadTasks();
  }
});

function toggleComplete(listId) {
  var current = document.getElementById("task".concat(listId));
  var isChecked = $('#completed' + listId).is(":checked");

  if (!isChecked) {
    current.classList.remove("text-decoration-line-through");
  } else {
    current.classList.add("text-decoration-line-through");
  }

  updateTask(listId);
}

function loadTasks() {
  current_index = taskList_arr.length;
  taskLists.innerHTML = "";

  for (var index = 0; index < taskList_arr.length; index++) {
    taskLists.innerHTML += "\n    <li class=\"task mt-2\" onclick=\"toggleComplete(".concat(taskList_arr[index]['id'], ")\">\n    <label for=\"1\">\n    <input id=\"completed").concat(taskList_arr[index]['id'], "\" type=\"checkbox\">\n    <p id=\"task").concat(taskList_arr[index]['id'], "\">").concat(taskList_arr[index]['task'], "</p>\n    </label>\n    <div class=\"settings\">\n    <i class=\"bi bi-three-dots\"></i>\n    <ul class=\"task-menu\">\n    <li>Edit</li>\n    <li>Delete</li>\n    </ul>\n    </div>\n    </li>");
    var check_is_completed = taskList_arr[index]['completed'];

    if (check_is_completed) {
      $('#task' + taskList_arr[index]['id']).attr('class', 'text-decoration-line-through');
      $('#completed' + taskList_arr[index]['id']).attr('checked', 'checked');
    }
  }
}

function updateTask(id) {
  taskList_arr[id].completed = $('#completed' + id).is(":checked");
  localStorage.setItem("todo-list", JSON.stringify(taskList_arr));
  loadTasks();
}
/******/ })()
;