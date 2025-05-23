
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .container {
        
    display: flex;
    gap: 40px;
    font-size: 20px;
    font-weight:bold ;
  }

  .side {
    display: flex;
    flex-direction: column;
  }

  .side label {
    margin-bottom: 5px;
  }
  

</style>
<?php
$bgcolor = $_COOKIE['bgcolor'] ?? '#ffffff';

echo "<body style='background-color: $bgcolor;'>";

?>
 <?php include 'id.php' ?>
</head>
<body>
  <form action="showaqi.php" method="post">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
   
    <div class="container">
      
        <div class="side">
         
    <label for="country"></label>
   <label><input type="checkbox" name="city[]" value="San Francisco"> San Francisco</label><br>
<label><input type="checkbox" name="city[]" value="New York"> New York</label><br>
<label><input type="checkbox" name="city[]" value="Shanghai"> Shanghai</label><br>
<label><input type="checkbox" name="city[]" value="Mumbai"> Mumbai</label><br>
<label><input type="checkbox" name="city[]" value="Manchester"> Manchester</label><br>
<label><input type="checkbox" name="city[]" value="Lyon"> Lyon</label><br>
<label><input type="checkbox" name="city[]" value="Osaka"> Osaka</label><br>
<label><input type="checkbox" name="city[]" value="Alexandria"> Alexandria</label><br>
<label><input type="checkbox" name="city[]" value="Guadalajara"> Guadalajara</label><br>
<label><input type="checkbox" name="city[]" value="Saint Petersburg"> Saint Petersburg</label><br>
</div>
  
<div class="side">
<label><input type="checkbox" name="city[]" value="Melbourne"> Melbourne</label><br>
<label><input type="checkbox" name="city[]" value="Hamburg"> Hamburg</label><br>
<label><input type="checkbox" name="city[]" value="Vancouver"> Vancouver</label><br>
<label><input type="checkbox" name="city[]" value="Surabaya"> Surabaya</label><br>
<label><input type="checkbox" name="city[]" value="Chiang Mai"> Chiang Mai</label><br>
<label><input type="checkbox" name="city[]" value="Abu Dhabi"> Abu Dhabi</label><br>
<label><input type="checkbox" name="city[]" value="Naples"> Naples</label><br>
<label><input type="checkbox" name="city[]" value="Rio de Janeiro"> Rio de Janeiro</label><br>
<label><input type="checkbox" name="city[]" value="Ankara"> Ankara</label><br>
<label><input type="checkbox" name="city[]" value="Abuja"> Abuja</label><br>

</div>


     </div>
      
     <button type="submit" name="subm[]" onclick="return validation()" style=" font-size: 15px;color: wheat;  background-color: rgb(49, 37, 174)";>confirm</button> 
     <p id="p" style=" font-size: 15px; font-weight: bold;"></p>
     </form>
      </div>
        



<a href="logout.php" style=" display: flex ;text-align: center; justify-content: center;font-weight: bold; font-size: 20px;">Logout</a>


<script>
function validation()
{
   
    var tick= document.querySelectorAll('input[name="city[]"]:checked');
    var count = tick.length; 
    if (count > 10 || count < 10 ) {
      document.getElementById('p').innerHTML = 'you must select exact 10 cities'
      return false;
      
    } else {
      return true;
    }
  
}

</script>


</body>
</html>