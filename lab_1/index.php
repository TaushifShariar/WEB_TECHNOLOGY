<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
    <style>
     


     .qw{
        display: flex;
    justify-content: center;
     }
    .container{
       
       display: flex;
       width: max-content;
       height: max-content; 
       background-color: rgb(64, 112, 119);
       border-style: solid;
    border-color:orange;
    line-height: 20px;
    
       

       
    }
    .box_1{
        font-size: 20px;
        position: relative;
        background-color: rgb(162, 157, 103);
        width: 400px;
        height: max-content;
        z-index: 2;
        border-style: solid;
       border-color: black;
       
       
        
        

    }
 .box_2{
    
font-size: 20px;
    background-color: rgb(175, 126, 222);
    position: relative;
    line-height: 40px;
    width: 400px;
text-align: left;
    height: 180px;
    z-index: 1;
    border-style: solid;
    border-color:navy;
    
 }

   
   
 #submit{
    background-color: rgb(238, 108, 38); 
    font-weight: 700;
    text-align: center;
    
 }
 .circle_container{

  display: flex;
  justify-content: center;


 }
 .circle{
  display: flex;
   background-color: brown;
    height: 70px; width: 70px;
    border-radius: 50% ; 
    
   
   
    
 }
    </style>
     <link rel="stylesheet" href="api1.css">

     <?php include 'id.php' ?>
</head>
<body style="background-color: bisque; ">



    <div class="circle_container"><div class="circle"></div></div>
   <h1 style="text-align: center;">REGISTRATION FORM</h1>
   <div class="qw">
    

  <div class="container">
    
    <form action="process_div1.php" method="post" id="regform" >
<div class="box_1">
    <label for="Name" style="color: bisque;">Full Name:   </label><br>
    <input type="text" id="Name" placeholder="Enter full name" name="Full Name"><br>
    <b id="output" style=" color:rgb(9, 6, 57) ; font-size: 15px;"></b><br><br>
   <label for="pasword" style="color: bisque;">Enter password  </label> <br>
    <input type="text" id="password" placeholder="Enter password" name="password" minlength="8" maxlength="16" ><br>
    <b id="pass" style=" color:rgb(9, 6, 57) ; font-size: 15px;"></b><br><br>
    <label for="repeat" style="color: bisque;">Retype password  </label><br>
    <input type="text" id="repeat" placeholder="Repeat password" name="Password"><br>
    <b id="repass" style=" color:rgb(9, 6, 57) ; font-size: 15px;"></b><br><br>
    <label for="email" style="color: bisque;">Enter email   </label> <br>
    <input type="email" id="email" placeholder="Enter email" name="email"><br>
    <b id="outrage" style=" color:rgb(11, 5, 77) ; font-size: 15px;"></b><br><br>
  
    


    

        <label for="DOB">Date of Birth:   </label><b id="outrage" style=" color:rgb(11, 5, 77) ; font-size: 15px;"></b> <br>
        <input type="date" id="DOB" placeholder="Enter Date of Birth" name="Birthdate">
        <b id="DB" style=" color:rgb(11, 5, 77) ; font-size: 15px;"></b><br>
        <label for="country">Country:  </label> <b id="CT" style=" color:rgb(11, 5, 77) ; font-size: 15px;"></b><br>
        <select name="country" id="country">
            <option value="default" disabled selected>Select a country</option>
            <option value="bangladesh">bangladesh</option>
            <option value="india">india</option>
            <option value="bhutan">bhutan</option>
            <option value="china">china</option>
        </select><br>
        <label for>Gender:  </label><b id="GN" style=" color:rgb(11, 5, 77) ; font-size: 15px;"></b><br>
        <input type="radio" id="male" name="gender" value="male" placeholder="male">
        <label for="male">male</label><br>
        <input type="radio" id="female" name="gender" value="female" placeholder="female">
        <label for="female">Female </label><br>
        <input type="submit" id="submit" name="submit" value="submit" onclick=" return validate()" > 
    </form> 

    
    
    
        <div class="box_2">
            <form action="process_div2.php" method="post">
           <label for="uname">Username</label> 
      <input type="text" name="uname" id="uname"><br>
      <label for="Pass">Password </label> 
      <input type="text" name="password" id="password"><br>
      <input type="color" id="color" name="color"><br>
      
    <button type="submit" name="submit" style= "height: 30px; color: wheat; text-align: center; background-color: rgb(49, 37, 174);"><b>LOG IN</b></button>
    </div>
    </form>
      <script>

            
        function validate()
        {
            let x = document.getElementById('Name');
            let y= /\d/.test(x.value);
            let z= /[^a-zA-Z0-9]/.test(x.value);
            let isvalid= true;
        
            if(y||z)
        {
            document.getElementById('output').innerHTML= " *alphanumeric or special character not allowed";
            isvalid= false;
            

        }

        else if(x.value.trim() == ""){
            document.getElementById('output').innerHTML= "*type something";
            isvalid= false;

        }
            else{document.getElementById('output').innerHTML= "✅";
            
            }


          let email= document.getElementById('email') ;
          let emailregex= /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email.value);

          if(email.value.trim()=="")
          {
            document.getElementById('outrage').innerHTML="*enter  email";
            isvalid= false;

          } 
          else if(!emailregex)
          {
            document.getElementById('outrage').innerHTML="enter correct email";
            isvalid= false;

          }
          else{
            document.getElementById('outrage').innerHTML="✅";
          }

          let pass = document.getElementById('password');
let repass = document.getElementById('repeat');

let alphaN = /\d/.test(pass.value);

if (pass.value.trim() === "") {
  document.getElementById('pass').innerHTML = "*type password";
  isvalid = false;
} else if (!alphaN) {
  document.getElementById('pass').innerHTML = "*at least one number";
  isvalid = false;
} else if (pass.value.length < 8 || pass.value.length > 16) {
  document.getElementById('pass').innerHTML = "*password should be between 8 to 16 characters";
  isvalid = false;
} else {
  document.getElementById('pass').innerHTML = "";
}

if (repass.value.trim() === "") {
  document.getElementById('repass').innerHTML = "*retype password";
  isvalid = false;
} else if (repass.value !== pass.value) {
  document.getElementById('repass').innerHTML = "*password not matched";
  isvalid = false;
} else {
  document.getElementById('repass').innerHTML = "";
}

         let DOB= document.getElementById('DOB');
         let birthdate= new Date(DOB.value);
         let c_date= new Date();

         let age = c_date.getFullYear()- birthdate.getFullYear();
         let monthgap= c_date.getMonth()- birthdate.getMonth();
         

         if(DOB.value.trim()=="")
         {
            document.getElementById('DB').innerHTML= "*Enter date of birth";
            isvalid=false;


     
        }

         if(monthgap > 0 || (monthgap==0 && c_date.getDate() < birthdate.getDate()))
         
         {
             if(monthgap<0)
        {
            monthgap +=12;
        }
            age--;
        }
        
         if(age<18)
         {


            document.getElementById('DB').innerHTML= "*must be above 18";
            isvalid=false;
         }
           

         let country= document.getElementById('country');
         if(country.value=="default")
         {
            document.getElementById('CT').innerHTML= "*select a country";
            isvalid=false;
         }

         else
         {
            document.getElementById('CT').innerHTML= " ";
         }
        

         
         let gender= document.querySelector('input[name="gender"]:checked');
         if(!gender)
         {
            document.getElementById('GN').innerHTML= "*select gender";
            isvalid=false;
         }

        //  if(isvalid)
        //  {
        //     console.log("form is valid");
        //     document.getElementById('regform').submit();
        //  }
        //  else
        //  {
        //     console.log("form is invalid");
        //  }
     
          return isvalid;
    }
    </script>


</div>
<div>
<table  id="table">
<thead id="th">
    
    
        <th>column1</th>
        <th>column2</th>

    
</thead >
<tbody id="td">
    <tr  >
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</tbody>
</table>

</div>


</div>
    


</body>
</html> 

    