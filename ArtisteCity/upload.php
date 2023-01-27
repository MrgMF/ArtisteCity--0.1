<?php

if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
    
    $expensions= array("jpeg","jpg","png","gif","mp3","mp4");
    
    if(in_array($file_ext,$expensions) === false){
        $errors[]="Extension non autorisée, veuillez choisir un fichier JPEG, JPG, PNG, GIF, MP3 ou MP4.";
    }
    
    if($file_size > 2097152) {
        $errors[]='La taille du fichier ne doit pas dépasser 2 Mo';
    }
    
    if(empty($errors)==true) {
        if($file_type == "image/jpeg" || $file_type == "image/jpg" || $file_type == "image/png"|| $file_type == "image/gif") {
            move_uploaded_file($file_tmp,"Images/".$file_name);
            echo "Le fichier image a été téléchargé avec succès.";
        } elseif ($file_type == "audio/mp3" || $file_type == "audio/mp4") {
            move_uploaded_file($file_tmp,"Audio/".$file_name);
            echo "Le fichier son a été téléchargé avec succès.";
        } else {
            move_uploaded_file($file_tmp,"Images".$file_name);
            echo "Type de fichier non reconnu, le fichier a été téléchargé dans le dossier images.";
        }
    }else{
        print_r($errors);
    }
}
?>
