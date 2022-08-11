# control-panel-of-robot
Web page to control a bot panel and store moves in a database using php
# Web page :
![1](https://user-images.githubusercontent.com/95648490/184066029-824b7c3e-2069-4e89-8391-0f2e6bd06bf1.png)
# When you press the forward button, it will be added to the database and will print that the move was successful on the web page.
![2](https://user-images.githubusercontent.com/95648490/184066312-1b948ac2-f0ad-4beb-97a7-e4de45cd811f.png)
# When you press the left button, it will be added to the database and will print that the move was successful on the web page.
![3](https://user-images.githubusercontent.com/95648490/184066427-57a2b2b2-81da-404a-a173-3b22159272a7.png)
# When you press the right button, it will be added to the database and will print that the move was successful on the web page.
![4](https://user-images.githubusercontent.com/95648490/184066476-f333164b-163b-4381-b144-a336633ecfd4.png)
# When you press the backward button, it will be added to the database and will print that the move was successful on the web page.
![5](https://user-images.githubusercontent.com/95648490/184066535-5a4c671a-4a1b-41d2-a379-95f8b2bf1e32.png)
# When you press the stop button, it will be added to the database and will print that the move was successful on the web page.
![6](https://user-images.githubusercontent.com/95648490/184066636-bc9beda0-dbb5-4e22-93ca-2e883d9ec190.png)
# database for moves when inserted:
![7](https://user-images.githubusercontent.com/95648490/184067991-647dd01a-9a14-452f-8286-422415172119.png)
# code php to connect with database:
                <?php
                $connention = mysqli_connect('localhost','root','1234','moverobot');
                if (!$connention) { echo "Connection failed";
                }
                ?>

# code html to create web page:
<!DOCTYPE html>
<html lang="en">
<head>
<title>ControlPanel</title>
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
</body>
</html>
# code css to designing:
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
# code php for control and save moves in database:
<?php
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
