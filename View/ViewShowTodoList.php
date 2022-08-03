<?php

require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu : " . PHP_EOL;
        echo <<<MENU
        1. Tambah Data
        2. Hapus Data
        0. Keluar
        MENU . PHP_EOL;
        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            viewAddTodoList();
        } else if ($pilihan == "2"){
            viewRemoveTodoList();
        } else if ($pilihan == "0"){
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi . . .";
}