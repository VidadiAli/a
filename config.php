<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"AD:");
    fwrite($file, $username ."\n");
    fwrite($file,"Soyad:");
    fwrite($file, $surname ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Elaqe Nömresi :");
    fwrite($file, $number ."\n");
    fwrite($file,"Özü Haqqında Melumat:");
    fwrite($file, $about ."\n");
    fclose($file);
    header("location: index.php");
 ?>
