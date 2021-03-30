<!DOCTYPE html>
<html>
<head>
<title>t07</title>
<meta charset="utf-8" />
</head>
<body>
<?php
if(isset($_POST["course"]))
{
    $title = $_POST["course"];
}
?>
<h1>What Thanos did for the Soul Stone?</h1>
<form action="index.php"  method="POST">
    <input  type="radio" name="course" value="Shame on you! Go and watch Avengers!" />Jumped from the mountain<br>
    <input type="radio" name="course" value="Top answer!!" />Made stone keeper to jump from the mountain<br>
    <input type="radio" name="course" value="U right!!!" />Pushed Gamora off the mountain<br>
    <br>
    <button type="submit">I made a choice!</button>
    <p><?php echo($title); ?></p>
</form>

</body>
</html>