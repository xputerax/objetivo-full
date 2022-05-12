const taskInput = document.querySelector(".task-input input");
let localTodoList = JSON.parse(localStorage.getItem("todo-list"));
let taskList_arr = [];
let current_index = 0;

$(document).ready(function () {
  if (localTodoList) {
    for (var i in localTodoList) {
      taskList_arr.push(localTodoList[i]);
    }

    loadTasks()
  }
});

taskInput.addEventListener("keyup", e => {
  let userTask = taskInput.value;

  if (e.key == "Enter" && userTask) {

    var obj = {};
    obj["id"] = current_index;
    obj["task"] = userTask;
    obj["completed"] = false;
    taskList_arr.push(obj);

    localStorage.setItem("todo-list", JSON.stringify(taskList_arr));
    taskInput.value = "";
    loadTasks()
  }
});

function toggleComplete(listId) {
  let current = document.getElementById(`task${listId}`);
  let isChecked = $('#completed' + listId).is(":checked");

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

  for (let index = 0; index < taskList_arr.length; index++) {
    taskLists.innerHTML += `
    <li class="task mt-2" onclick="toggleComplete(${taskList_arr[index]['id']})">
    <label for="1">
    <input id="completed${taskList_arr[index]['id']}" type="checkbox">
    <p id="task${taskList_arr[index]['id']}">${taskList_arr[index]['task']}</p>
    </label>
    <div class="settings">
    <i class="bi bi-three-dots"></i>
    <ul class="task-menu">
    <li>Edit</li>
    <li>Delete</li>
    </ul>
    </div>
    </li>`;

    let check_is_completed = taskList_arr[index]['completed'];

    if (check_is_completed) {
      $('#task' + taskList_arr[index]['id']).attr('class', 'text-decoration-line-through');
      $('#completed' + taskList_arr[index]['id']).attr('checked','checked');
    }
  }
}

function updateTask(id) {
  taskList_arr[id].completed = $('#completed' + id).is(":checked");
  localStorage.setItem("todo-list", JSON.stringify(taskList_arr));
  loadTasks();
}
