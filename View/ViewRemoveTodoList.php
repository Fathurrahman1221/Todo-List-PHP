<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor(0 untuk batal)");
     
    if ($pilihan == 0){
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $succes = removeTodoList($pilihan);
        if ($succes){
            echo "Sukses menghapus todo no $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus todo no $pilihan" . PHP_EOL;
        }
    }
}