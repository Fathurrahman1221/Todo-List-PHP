<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Dasar");
addTodoList("OOP");
addTodoList("Database");

showTodoList();

removeTodoList(3);

showTodoList();