<?php

    include_once 'index.php';
    $mai = $_POST['mail'];
    $nam = $_POST['name'];
    $subjec = $_POST['subject'];
    $commen = $_POST['comment'];
    $sql = "INSERT INTO hack(mail, name, subject, comment)
    VALUES ('$mai','$nam','$subjec','$commen');";
    mysqli_query($conn, $sql);

    header("Location: ../question.php");

?>
