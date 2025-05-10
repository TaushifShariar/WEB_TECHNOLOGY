<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- // if (isset($_POST['submit']))
// {
//     echo $_POST[''] . "<br>" ;
//     echo $_POST['password'] ." <br>" ;
//     echo $_POST['email']    ." <br>" ;
//     echo $_POST['Birthdate']. " <br>" ;
//     echo $_POST['country']  ."<br>" ;
//     echo $_POST['gender']  ."<br> ";

// }
// else
// {
//     echo "no data to show";
// }
// 
   -->
   <div style = " text align: center; height: 60px; width: 50px" >

<div style = "background-color:green; height: max-content; width: max-content ">
<h1 style = "color: cyan"><?php echo $_POST['Full_Name']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['password']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['email']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['Birthdate']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['country']; ?> </h1>
<h1 style = "color: cyan"><?php echo $_POST['gender']; ?> </h1>
<button type="button" style="background-color: chocolate;text-align: center;"><b>Confirm</b></button>

</div>
</div>
</body>
</html>


