<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    $b = 'kingston';
    $a = '2';
    $sql= "SELECT id, username FROM member WHERE id = '$a' AND username = '$b'";

    $query = mysqli_query($conn, $sql);
    
    echo mysqli_num_rows($query);

?>