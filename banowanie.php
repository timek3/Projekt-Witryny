<?php    
session_start();
if(isset($_SESSION['typ']))
    if($_SESSION['typ']!='admin' || !isset($_GET['id']))
        header('location: index.php?strona=glowna');
    $id = $_GET['id'];
 $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');

                $sql ="SELECT `ban` FROM `uzytkownicy` where `id_uzytkownika` = '$id'";
                if($rezultat = $polaczenie -> query($sql)){
                    $wiersz = $rezultat -> fetch_assoc();
                    if($wiersz['ban']){
                        $sql ="UPDATE `uzytkownicy`SET `ban` = '0' where `id_uzytkownika` = '$id'";
                        $polaczenie -> query($sql);
                    }else{
                        $sql ="UPDATE `uzytkownicy`SET `ban` = '1' where `id_uzytkownika` = '$id'";
                        $polaczenie -> query($sql);
                    }
                    
                    
                    $polaczenie ->close();
                    header('location: index.php?strona=panelAdmina');
            }else{
                    $polaczenie ->close();
                header('location: index.php?strona=panelAdmina');
            }            
        }else{
                header('location: index.php?strona=panelAdmina');
        }
 
?>