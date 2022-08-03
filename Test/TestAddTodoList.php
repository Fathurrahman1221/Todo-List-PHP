<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Ibnu");
addTodoList("Fathoni");

var_dump($todoList);