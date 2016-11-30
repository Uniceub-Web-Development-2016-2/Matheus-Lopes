<?php
include_once ('../events/database/db_manager.php');
include('httpful.phar');

/*$get_request = 'http://127.0.0.1/aula8/user/search?first_name="'.$_GET['search'].'"';

$response2 = \Httpful\Request::get($get_request)->send();

echo  $response->body;
*/

function search(){

$uri = 'http://localhost/events/user/search?fullname="'.$_GET["fullname"].'"';

$response = \Httpful\Request::get($uri)->send();

$array = json_decode($response->body, true);

foreach ($array as $key => $value) {
    echo  '<table>
          <link href="../../eventShare/css/table.css" rel="stylesheet">
          <tr>
          <th>fullname</th>
          <th>email</th>
          <th>gender</th>
          <th>age</th>
        </tr>
        <tr>
          <td>'.$value['fullname'].'</td>
          <td>'.$value['email'].'</td>
          <td>'.$value['gender'].'</td>
          <td>'.$value['age'].'</td>
        </tr>
         </table>';

}

}


function info(){


  $link = mysqli_connect("localhost","root","","database");
  $categoria = $_GET['categoria'];

 $query = mysqli_query($link, "SELECT * FROM eventos WHERE categoria LIKE '%".$categoria."%' ");

//
//$variable = json_decode($response->body, true);
$row = $query;
foreach ($row as $key => $value) {
  echo  "<div class='eventos' >
           <h1> Dados do Evento</h1>
           <br>
         <img src='upload/".$value["img"]."' alt=''/>  
         <p>Nome: ".$value["name"]."</p>
         <p>Categoria: ".$value["categoria"]."</p>
         <p>Local: ".$value["local"]."</p>
         <p>Horário: ".$value["horario"]."</p>
        <p>information: ".$value["information"]."</p>
         </div>";

}  
}




function update(){
	$id = $_SESSION['id'];
	$uri = 'http://localhost/events/user/search?id='.$id;
	
	$response = \Httpful\Request::get($uri)->send();
	
	$array = json_decode($response->body, true);

	foreach ($array as $value => $key) {
	  echo ' <h2 class="form-signup-heading">Update Information</h2>
         <label for="inputName" class="sr-only">Id</label>
        <input id="id" name="id" class="form-control" value="'.$id.'" type="hidden">
          <br>
        <label for="inputName class="sr-only">Name</label>
        <input id="fullname" name="fullname" class="form-control" value="'.$key['fullname'].'" required="required"  type="text">
          <br>
        <label for="inputGender" class="sr-only">Gender</label>
        <input id="gender" name="gender" class="form-control" value="'.$key['gender'].'" required="required" type="text">
          <br>
        <label for="inputAge" class="sr-only">Age</label>
        <input id="age" name="age" class="form-control" value="'.$key['age'].'" required="required"  type="text">
          <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" name="email" class="form-control" value="'.$key['email'].'" required="required" type="email">
          <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="password" name="password" class="form-control" value="'.$key['password'].'" required="required" type="text">
          <br>';
 }         

}

function update_event(){

  $link = mysqli_connect("localhost","root","","database");

   //$uri = 'http://localhost/events/eventos/search?id='.$_GET["id"];
 
  if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($link, $_GET['id']);
  $query = mysqli_query($link, "SELECT image FROM image WHERE id = '$id'");
  $response = \Httpful\Request::get($query)->send();
  
  $array = json_decode($response->body, true);

  foreach ($array as $value => $key) {
    echo ' <h2 class="form-signup-heading">Update Information</h2>
         <label for="inputName" class="sr-only">Id</label>
        <input id="id" name="id" class="form-control" value="'.$id.'" type="hidden">
          <br>
        <label for="inputName class="sr-only">Name</label>
        <input id="fullname" name="name" class="form-control" value="'.$key['name'].'" required="required"  type="text">
          <br>
        <label for="inputGender" class="sr-only">Gender</label>
        <input id="gender" name="information" class="form-control" value="'.$key['information'].'" required="required" type="text">
          <br>';
 }         

}
}

function exibe(){
 $link = mysqli_connect("localhost","root","","database");
  $name = $_GET['name'];

 $query = mysqli_query($link, "SELECT * FROM eventos WHERE name LIKE '%".$name."%' ");

  $row = $query;

foreach ($row as $key => $value) {
  echo  "<div class='eventos' >
           <h1> Dados do Evento</h1>
           <br>
         <img src='upload/".$value["img"]."' alt=''/>  
         <p>Nome: ".$value["name"]."</p>
         <p>Categoria: ".$value["categoria"]."</p>
         <p>Local: ".$value["local"]."</p>
         <p>Horário: ".$value["horario"]."</p>
        <p>information: ".$value["information"]."</p>
         </div>";

}


 /* $link = mysqli_connect("localhost","root","","database");

$path = "upload/";

  $query = "SELECT `id`, `name`, `information`, `categoria`, `img` FROM `eventos`";
  $result = mysqli_query($link, $query);
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
    $img = $path.$row["img"];
     
    echo "<div class='eventos' >";
      echo "<h1> Dados da Imagem</h1>";
      echo "<p>Nome:".$row["name"]."</p>";
      echo "<p>information:".$row["information"]."</p>";
      echo "<img src='$img' alt=''/>Categoria:".$row["categoria"].
         "</div>";

*/
}


?>