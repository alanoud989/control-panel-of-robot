<?php

$connention = mysqli_connect('localhost','root','1234','moverobot');
if (!$connention) {
    echo "Connection failed";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>ControlPanel</title>
<style>

 h1 {
  color: white;
  text-align: center;
  margin-top: 80px;
  margin-bottom: -100px;
  margin-left: -50px;
  font-size: 55px;
  font-family: initial;
  font-style: italic;
  
}

body{
    background-color: peachpuff;
    
  
}   
   
   
   
.btn{
    border: 1px solid rosybrown;
    background: none;
    padding: 20px;
    font-size: 35px;
    font-family: initial;
    font-style: italic;
    cursor: pointer;
    margin: 20px; 
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    min-width: 200px;
    margin-top: -190px;
    margin-bottom: 30px;
    
}

.btn1, .btn2, .btn3, .btn4, .btn5{
    color: #fff;
    background-color: rgb(0, 88, 145);
}   
   
 
   
.btn1:hover, .btn2:hover, .btn3:hover, .btn4:hover, .btn5:hover{
    color:#3498db;
}   
   
.btn3{
      top: 250px;
      
      left: 15px;
  
}
  
.btn1{
      top: 250px;
      left: 280px;
      
}
 
.btn2{
      top: 150px;
      bottom: 0px;
      left: 260px;
}

.btn4{
      top: 250px;
      left: -4px;
}
.btn5{
      top: 350px;
      left: -472px;
}
   
.btn::before{
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background:#2d3436;
    z-index: -1;
    transition: 0.8s;
    overflow: hidden;
}

.center {
        padding: 4%;
        text-align: center;
        margin-left: -70px;
        margin-right: 60px;
        font-size: 19px;

}

</style>

</head>
<body>

<h1>Robot Control Panel</h1>
<div class="center">

<form action='' method='POST'>
   
 <button type="submit"  name="left" class="btn btn1" >Left</button>
 <button type="submit"  name="forward" class="btn btn2">Forward</button>
 <button type="submit"  name="stop" class="btn btn3">STOP</button>
 <button type="submit"  name="right" class="btn btn4">Right</button>
 <button type="submit"  name="backward" class="btn btn5">Backward</button>

  </form>






<?php
    // write to database
    if (isset($_POST['left'])) {
        $query = "INSERT INTO moves (VALUEMOVE) VALUES ('left') ";
        $result =  mysqli_query($connention, $query);
        echo "Robot Left move successed ";
                
        if (!$result) {
            echo '<script>alert("<< error in inserted database >>");</script>';
        }
    }


    if (isset($_POST['right'])) {
        $query = "INSERT INTO moves (VALUEMOVE) VALUES ('right') ";
        $result =  mysqli_query($connention, $query);
        echo "Robot Right move successed";

        if (!$result) {
            echo '<script>alert("<< error in inserted database >>");</script>';
        }
    }



    if (isset($_POST['forward'])) {
        $query = "INSERT INTO moves (VALUEMOVE) VALUES ('forward') ";
        $result =  mysqli_query($connention, $query);
        echo "Robot Forward move successed";

        if (!$result) {
            echo '<script>alert("<< error in inserted database >>");</script>';
        }
    }




    if (isset($_POST['backward'])) {
        $query = "INSERT INTO moves (VALUEMOVE) VALUES ('backward') ";
        $result =  mysqli_query($connention, $query);
        echo "Robot Backward move successed";

        if (!$result) {
            echo '<script>alert("<< error in inserted database >>");</script>';
        }
    }



    if (isset($_POST['stop'])) {
        $query = "INSERT INTO moves (VALUEMOVE) VALUES ('stop') ";
        $result =  mysqli_query($connention, $query);
        echo "The robot has been successfully stopped";

        if (!$result) {
            echo '<script>alert("<< error in inserted database >>");</script>';
        }
    }





    ?>

</div>

</body>
</html>



