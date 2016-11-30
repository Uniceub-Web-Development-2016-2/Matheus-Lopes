<?php
include("httpful.phar");
include_once ('../events/database/db_manager.php');


$link = mysqli_connect("localhost","root","","database");

if(isset($_POST['upload'])){
  $dir = "upload/".basename($_FILES['img']['name']);

  $img = $_FILES['img']['name'];
  $information = $_POST['information'];
  $categoria = $_POST['categoria'];
  $horario = $_POST['horario'];
  $local = $_POST['local'];
  $name = $_POST['name'];
  
  $name = str_replace("á", "a", $name);
  $name = str_replace("ã", "a", $name);
  $name = str_replace("â", "a", $name);
  $name = str_replace("à", "a", $name);
  $name = str_replace("ó", "o", $name);
  $name = str_replace("õ", "o", $name);
  $name = str_replace("ô", "o", $name);
  $name = str_replace("í", "i", $name);
  $name = str_replace("é", "e", $name);
  $name = str_replace("ú", "u", $name);
  $name = str_replace("' ", " ", $name);
  //$name = str_replace(" ", "", $name);
  $name = str_replace("ç", "c", $name);

  $local = str_replace("á", "a", $local);
  $local = str_replace("ã", "a", $local);
  $local = str_replace("â", "a", $local);
  $local = str_replace("à", "a", $local);
  $local = str_replace("ó", "o", $local);
  $local = str_replace("õ", "o", $local);
  $local = str_replace("ô", "o", $local);
  $local = str_replace("í", "i", $local);
  $local = str_replace("é", "e", $local);
  $local = str_replace("ú", "u", $local);
  $local = str_replace("' ", "_", $local);
  $local = str_replace("ç", "c", $local);

  $information = str_replace("á", "a", $information);
  $information = str_replace("ã", "a", $information);
  $information = str_replace("â", "a", $information);
  $information = str_replace("à", "a", $information);
  $information = str_replace("ó", "o", $information);
  $information = str_replace("õ", "o", $information);
  $information = str_replace("ô", "o", $information);
  $information = str_replace("í", "i", $information);
  $information = str_replace("é", "e", $information);
  $information = str_replace("ú", "u", $information);
  $information = str_replace("' ", "_", $information);
  $information = str_replace("ç", "c", $information);

  $categoria = str_replace("á", "a", $categoria);
  $categoria = str_replace("ã", "a", $categoria);
  $categoria = str_replace("â", "a", $categoria);
  $categoria = str_replace("à", "a", $categoria);
  $categoria = str_replace("ó", "o", $categoria);
  $categoria = str_replace("õ", "o", $categoria);
  $categoria = str_replace("ô", "o", $categoria);
  $categoria = str_replace("í", "i", $categoria);
  $categoria = str_replace("é", "e", $categoria);
  $categoria = str_replace("ú", "u", $categoria);
  //$categoria = str_replace(" ", "", $categoria);
  $categoria = str_replace("ç", "c", $categoria);

  $horario = str_replace("á", "a", $horario);
  $horario = str_replace("ã", "a", $horario);
  $horario = str_replace("â", "a", $horario);
  $horario = str_replace("à", "a", $horario);
  $horario = str_replace("ó", "o", $horario);
  $horario = str_replace("õ", "o", $horario);
  $horario = str_replace("ô", "o", $horario);
  $horario = str_replace("í", "i", $horario);
  $horario = str_replace("é", "e", $horario);
  $horario = str_replace("ú", "u", $horario);
  $horario = str_replace("' ", "_", $horario);
  $horario = str_replace("ç", "c", $horario);


  
  $query = "INSERT INTO `eventos`(`name`, `information`, `categoria`, `horario`, `local`, `img`) VALUES ('$name', '$information', '$categoria', '$horario', '$local', '$img')";
  mysqli_query($link, $query);

  if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)){
    echo '<script> alert("Arquivo inserido com Sucesso!"); window.location.href = "../../eventShare/dispatch.php"; </script>';
  }
  else{
    echo '<script> alert("Falha ao enviar o arquivo!"); window.location.href = "../../eventShare/dispatch.php"; </script>';
  }
  
}
     