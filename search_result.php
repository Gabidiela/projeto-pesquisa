<?php

if($_POST['pesquisar'] == '1'){
    $NomePesquisa = "https://www.google.com/search?q=".$_POST['search']."";
    header('Location:'.$NomePesquisa.'');
}else if($_POST['pesquisar'] == '2'){
    $NomePesquisa = "https://www.youtube.com/results?search_query=".$_POST['search']."";
    header('Location:'.$NomePesquisa.'');
}

?>