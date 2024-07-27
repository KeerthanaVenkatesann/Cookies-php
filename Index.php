<?php 
$name=null;
if(isset($_POST["name"])&&!empty($_POST["name"])){
    $name=$_POST["name"];
    setcookie("name",$_POST["name"],time()+3600,"/");
}
if(isset($_COOKIE["name"])&&!empty($_COOKIE["name"])){
    $name=$_COOKIE["name"];
}
?>
<html>
    <head></head>
    <body>
        <?php if(!$name){?>
        <form action="" method="post">
            <input type="text" name="name">
            <button>Submit</button>
        </form>
        <?php }else{?>
        <h1>hi, <?php echo $name;?></h1>
        <a href="logout.php">logout</a>
        <?php }?>
    </body>
</html>