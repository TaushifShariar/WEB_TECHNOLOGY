<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <?php include 'id.php' ?>
</head>
<body>

  

<div style = "background-color:green; height: max-content; width: max-content ">
<h1 style = "color: cyan"><?php echo $_POST['Full_Name']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['password']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['email']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['Birthdate']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['country']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['gender']; ?> </h1>
<form action="index.php" method="post">
   <button type="submit" style="background-color: chocolate;text-align: center;"   ><b>Confirm</b></button>
      <button type="submit" style="background-color: chocolate;text-align: center;"   ><b>Cancel</b></button>

   </form>
</div>

</body>
</html>


