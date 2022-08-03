<?php
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";


addTodoList("Belajar");
addTodoList("PHP");
addTodoList("Dasar");
addTodoList("PZN");

showTodoList();

viewRemoveTodoList();

showTodoList();