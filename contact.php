<?php  
    if(isset($_POST['btn-send'])){
        $UserName = $_POST['uName'];
        $UserEmail = $_POST['uEmail'];
        $UserSubject = $_POST['uSubject'];
        $UserMassage = $_POST['uMassage'];

        if(empty($UserName) || empty($UserEmail) || empty($UserSubject) || empty($UserMassage)){
            header('location:index.php?error');
        }
    }



?>