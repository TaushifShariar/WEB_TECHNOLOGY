
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #last{
    font-size: 20px;
    border-collapse: collapse;
    width: max-content;
    height: 600px;
    text-align: center;

}

#tth th{
    border: 2px solid black;
    background-color: crimson;

    
    
    
}
 #ttd td {
    background-color: rgb(132, 175, 213);  
    border-collapse: collapse;
    border: 2px solid black;
   
 }
    </style>
   
  <?php include 'id.php' ?>
</head>
<body>
   

    <?php

if (isset($_POST["subm"])) {
    $cities = $_POST["city"]; 

    $conn = mysqli_connect('localhost', 'root', '', 'aqi');
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $cityList = "'" . implode("','", $cities) . "'";
    $sql = "SELECT city, country, aqi FROM info WHERE city IN ($cityList)";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
        echo "not connected";
    }
} 
    ?>
     <div style=" display: flex; flex-direction: column; text-align: center; justify-content: center;  align-items: center;">
         <table id="last">
             <thead id="tth">
                 <th>CITY</th>
                 <th>COUNTRY</th>
                 <th>AQI_VALUE</th>
                </thead >
                <tbody id="ttd">
                    
                        <?php
            if (mysqli_num_rows($result) > 0){      
                while ($row = mysqli_fetch_assoc($result)) {
                          
                
                    echo "<tr>";
                
                    echo  "<td>". ($row['city'])."</td>";
                    echo "<td>". ($row['country']). "</td>";
                    echo "<td>" . ($row['aqi']) ."</td>";
                    echo "</tr>";
                }}

                else {
        echo " <tr>No data found for selected cities.</tr>";
        
    }
?>

         
            
        </tbody>
    </table>
    </div>
                    <?php
if ($conn) {
    mysqli_close($conn);
}
?>    
          
<a href="logout.php" style=" display: flex ;text-align: center; justify-content: center;font-weight: bold; font-size: 20px;">DONE</a>


</body>
</html>