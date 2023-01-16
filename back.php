<?php
require_once 'connectdb.php';
if($_POST){
    $name=trim(htmlspecialchars($_REQUEST['name'], ENT_QUOTES));
    $email=filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
    $description=trim(htmlspecialchars($_REQUEST['description'], ENT_QUOTES));
    $city=$_REQUEST['city'];
    $checkbox=$_REQUEST['checkbox'];
    $radio=$_REQUEST['radio'];
    $filetype=$_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/png';
    $filesize=$_FILES['file']['size'];
    if ($filetype && $filesize<=512000){
        $apend= $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];
        $path=move_uploaded_file($filetmp, './img/'.$apend);
        try{
            $stmt=$mysqli->prepare("INSERT INTO userforms (name, email, description, city, checkbox, radio, filepath) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss",$name, $email, $description, $city, $checkbox, $radio, $apend);
            $stmt->execute();
            require_once 'mail.php';
        } catch (Exception $e){
            echo $e;
        }  
        header('Location:/backlist.php');
    }else{
        echo '<div id="files" class="invalid-feedback">
        Поддерживаются форматы jpg/png. Файлы не более 15мб!!!
    </div>';
    }
}