<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>WT-K class</title>
    <style>
       .form{
            padding-left:80px;
            border:3px solid black;
            border-radius:5px;
        }
        input[type='submit']{
            background-color:purple;
            color:white;
        }
        h{
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <center>
        <h1>wellcome to Blood Management System </h1>
</center>
 
<div class="form">
      <center>
        <h2>
              Registration Form
        </h2>
      </center>

    Enter donor's full name :
    <input type="text" placeholder="your name"><br>
<br>
     Enter your age :
    <input type="text" placeholder="your age"><br>
<br>
      Enter your dob :
    <input type="date"><br>
<br>
     Enter your Gender :
    <input type="radio" name="gender">male
    <input type="radio" name="gender">female
    <input type="radio" name="gender">others
<br>
<br>
      <div>
         Blood Group :
        <select>
          <option >Select group</option>
          <option>A+</option><option>A-</option>
          <option>B+</option><option>B-</option>
          <option>O+</option><option>O-</option>
          <option>AB+</option><option>AB-</option>
        </select>
      </div>
<br>
<br>
     Enter your phone number :
     <input type="tel" placeholder="your phone number ">
<br>
<br>
     Enter your pref language  :
    <input type="radio" name="lang">bangla
    <input type="radio" name="lang">english
<br><br>
     Enter your Area :
     <select>
          <option >Select Area</option>
          <option>Dhaka</option><option>BArishal</option>
          <option>Rangpur</option><option>Chittagang</option>
          <option>Comilla</option><option>Sylhet</option>
         
    </select>

    <center>
    <input type="submit">
    </center>
    <br>
</div>

</body>
</html>

