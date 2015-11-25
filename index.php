<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu Dinamis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="GET">
    <ul>
        <li><a href="/menu-dinamis" title="">Home</a></li>
        <li><a href="?page=data" title="">Data</a>
            <ul>
                <li><a href="?page=data&action=tambah" title="">Tambah Data</a></li>
                <li><a href="?page=data&action=edit" title="">Edit Data</a></li>
                <li><a href="?page=data&action=hapus" title="">Hapus Data</a></li>
            </ul>
        </li>
        <li><a href="?page=profil" title="">Profil</a></li>
        <li><a href="?page=contact" title="">Contact</a></li>
        <li><a href="?page=help" title="">Help</a></li>
    </ul>
    </form>
</body>
</html>

<?php
    // konfigurasi menu
    $page = @$_GET["page"];
    $action = @$_GET["action"];

    if ($page == "profil") {
        echo "Menu Profil";
    } else if ($page == "data") {
        if($action == "") { // jika kosong kembalikan ke home
            echo "home";
        } else if ($action == "tambah"){
            echo "Ini Submenu menu tambah";
        } else if($action == "edit") {
            echo "Ini Submenu menu edit";
        } else if ($action == "hapus") {
            echo "Ini Submenu menu hapus";
        } else {
            echo "4041 Page Not Found"; // jika terjadi hal yang tidak diinginakan
        } // end menu dari sub menu
    } else if ($page == "contact") {
        echo "Menu Contact";
    } else if ($page == "help") {
        echo "Menu help";
    }
 ?>
