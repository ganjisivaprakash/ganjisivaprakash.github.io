<?php
$number = $_GET['number'];
$link = mysqli_connect('localhost', 'u999389855_app', 'ganji93!@' , 'u999389855_mobo');
if($link){
  $stmt = "SELECT * FROM info WHERE number='$number'";
  $query = mysqli_query($link,$stmt);
  if($query){
    $result = mysqli_fetch_array($query);
    if($result == null){
      echo json_encode(["message"=>"Number Unavailable"]);
    }
    else {
      echo json_encode($result);
      mysqli_free_result($result);
    }
  }
  else{
    echo json_encode(["message"=>"Data Unavailable"]);
  }
}
else {
  echo json_encode(["message"=>"Server not Responding"]);
}
mysqli_close($link);
?>
