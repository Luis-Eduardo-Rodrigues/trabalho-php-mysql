<?php
    include "conexao.php";

    $id = $_GET["id"];

    $sql = "DELETE FROM conteudos WHERE id = $id";

    $res = $conn->query($sql);

    if($res){
       header("location: professor.php");
    }

?>
