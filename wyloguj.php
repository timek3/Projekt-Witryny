<?php
    session_start();
    if(isset($_SESSION['zalogowany'])){
        unset($_SESSION['zalogowany']);
        unset($_SESSION['id']);
        unset($_SESSION['login']);
        unset($_SESSION['typ']);
        
    }
    if(!isset($_GET['strona'])){
    header('location: index.php');
    }else if(!isset($_GET['ksiazka'])){
        $strona = $_GET['strona'];
        header("location: index.php?strona=$strona");   
    }else{
        $strona = $_GET['strona'];
        $ksiazka = $_GET['ksiazka'];
        header("location: index.php?strona=$strona&ksiazka=$ksiazka");      
    }
        
?>