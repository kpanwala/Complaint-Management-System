<!DOCTYPE html>
<head>

<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "12345";
$db="stpro";

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  if(isset($_SESSION["id"]))
  {
      session_destroy();
  }
?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<style>

.modal-body {
  display: flex;
  padding: 0;
  border-radius: 4rem;
  font-family: 'PT Sans', sans-serif;
}

.modal-content {
  border-radius: 4rem;
  width: 140%;
  -webkit-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
  -moz-box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
  box-shadow: -1px -2px 42px -19px rgba(0,0,0,0.74);
}
.modal-content h1, .modal-content h2, .modal-content h3 {
    text-align: center;
}

.modal-content h1 {
  font-size: 1.3em;
  text-transform: uppercase;
}

.modal-content h2 {
    font-size: 1.1em;
}

.modal-content h3 {
  font-size: .8em;
  letter-spacing: 2px;
}

form {
    font-size: .8em;
}
.column {
  /* flex: 50%; */
  display:inline-block;
  padding: 10px;
}

.column#main {
  /* flex: 75%; */  
  width:40vw;
  padding: 50px;
  margin-top: 30px;
  margin-left:10vw;
}

#secondary {
  display:inline-block;
  height:94.1vh;
  /* width:35vw; */
  background-color: #F9BC35;
  border-radius: 0rem 0rem 4rem 0;
  text-align: center;
}


#secondary1 {
  display:inline-block;
  height:93.2vh;
  width:35vw;
  background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
  border-radius:0rem 0rem 0rem 4rem;
  text-align: center;
}


#main .form-control {
  border-radius: 0;
  font-size: .9em;
}

.btn {
  text-transform: uppercase;
  border-radius: .15rem;
  width: 200px;
  padding: .150rem .75rem;
  margin: 30px auto;
  font-family: 'PT Sans', sans-serif;
  letter-spacing: 2px;
}

.btn-primary {
  border-color: rgba( 255, 255, 255, 0);
  background: #f1da36; /* Old browsers */
  background: -moz-linear-gradient(left, #f1da36 0%, #fca86c 99%); /* FF3.6-15 */
  background: -webkit-linear-gradient(left, #f1da36 0%,#fca86c 99%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, #f1da36 0%,#fca86c 99%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
}

.btn-primary:hover {
  border-color: rgba( 255, 255, 255, 0);
}

#main .btn-primary {
  width: 35%;
}
#secondary .btn-primary,#secondary1 .btn-primary {
  background: #f8f9fa4f;
  color: #000;
}
.modal-body label {
  margin-bottom: 0;
  
}

.sec-content {
  margin-top: 50%;
  
}

.card1{
  border-radius: 4rem 0rem 4rem 0;
  border:none;  
  margin-top:2.4vh;
  margin-left:4vw;
  width:90vw;
}


.card2{
  display:inline-block;
  height:93.1vh;
  transform:translate(120%,-100%);
  border-radius: 0rem 4rem 0rem 4rem;
  margin-left:2vw;
  width:90vw;
  border:none;  
}

#title{
  font-size:1.3em;
  font-weight: bold;
}

#uname,#pass{
  border:none;
  border-bottom:2px solid #eba434; 
}

input[type=text], input[type=password] {
  width: 50%;
  outline:none;
  padding: 12px 20px;
  border: none;
  border-bottom: 2px solid red;
  margin: 8px 0;
  display: inline-block;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus,input[type=password]:focus {
  width: 93%;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

select{
  height:4vh;
}

select:focus > option:checked { 
    background: #FF416C;
    color:white;
}

button{
  outline:none;
  border:none;
}

.first{
  display:inline-block;
}

.baap{
  display:inline-block;
}

.trans{
  -webkit-transition:0.5s; /* Safari */
  -webkit-transition-timing-function: linear; /* Safari */
  transition:0.5s;
  transition-timing-function: linear;
  transform:translateX(-74%);
}

.trans1{
  -webkit-transition:0.5s; /* Safari */
  -webkit-transition-timing-function: linear; /* Safari */
  transition:0.5s;
  transition-timing-function: linear;
  transform:translateX(0%);
}

select option{
  padding:20px;
  font-size:1.2em;
}


body{
  overflow:hidden;
}
</style>

</head>
<body>
<div class="baap">
        <div class="card1" style="box-shadow:0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
            <div class="modal-body">
                <div class="column" id="main">
                    <h1><center>Sign In </center></h1>
                    <br>        
                    <br>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
                      <div class="input-container">
                        <label id="title">User Name:</label><br>
                          <input type="text" name="uname" id="uname" placeholder="User Name">
                        <br>
                      </div>
                      <br>
                      <div class="input-container">
                        <label id="title">Password:</label><br>
                        <input type="password" name="pass" id="pass" placeholder="Password">
                      </div>
                      <input type="submit" name="sub" value="Sign In" style="height:40px;" class="btn btn-primary">  
                    </form>
                </div>
              
                  <?xml version="1.0" encoding="UTF-8"?>
                  <svg width="82px" height="580px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#F9BC35"></path>
                        </g>
                  </svg>
                  <div class="column" id="secondary">
                    <div class="sec-content">
                      <h3>Just enter your details and create your account :)</h3>
                      <input type="button" name="signup" id="signup" value="Sign Up" style=" height:40px" class="btn btn-primary">
                    </div>
                  </div>
                </div>
        </div>
            
        <div class="modal-body">        
            <div class="card card2" style="box-shadow:0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
                    <div class="column" id="secondary1" >
                        <div class="sec-content">
                        <h3>Welcome Back! </h3>
                        <h5>To keep connected with us please login with your personal info</h5>
                          <input type="button" name="signin" id="signin" value="Sign In" style=" height:40px" class="btn btn-primary">
                        </div>
                    </div>
                    <?xml version="1.0" encoding="UTF-8"?>
                      <svg style="transform:rotate(180deg); margin-top:-27.5vh; margin-left:-0.4vw;" width="67px" height="574px" viewBox="0 0 67 578" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <path d="M11.3847656,-5.68434189e-14 C-7.44726562,36.7213542 5.14322917,126.757812 49.15625,270.109375 C70.9827986,341.199016 54.8877465,443.829224 0.87109375,578 L67,578 L67,-5.68434189e-14 L11.3847656,-5.68434189e-14 Z" id="Path" fill="#FF416C"></path>
                          </g>
                      </svg>
            </div>

            <div class="column" id="main" style="transform:translate(135%,-105%);">
                        <h1><center>Sign Up </center></h1>
                        <br>                                
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
                          <div class="input-container">
                            <label id="title">Name:</label><br>
                            <input type="text" name="name" id="name" placeholder="Full Name">
                          </div>
                          <div class="input-container">
                            <label id="title">User Name:</label><br>
                              <input type="text" name="unameup" id="unameup" pattern=".{6,}" title="Six or more characters" placeholder="User Name">
                            <br>
                          </div>                          
                          <div class="input-container">
                            <label id="title">Password:</label><br>
                            <input type="password" name="passup" id="passup" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="At least 1 num ,1 uppercase letter and 6 or more characters" placeholder="At least 1 num ,1 uppercase letter and 6 or more characters">
                          </div>                    
                          
                          <br>
                          <label id="title">Designation:</label>&emsp;&emsp;
                          <select id="designation" name="designation">
                            <option selected disabled>Choose an option</option>
                            <option value="hod">HOD</option>
                            <option value="student">Student</option>
                            <option value="professor">Professor</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="dean">Dean Academics</option>
                            <option value="student welfare in charge">Students Welfare In Charge</option>
                          </select>
                          <br>
                          <br>
                          <label id="title">Department:</label>&emsp;&emsp;
                          <select id="department" name="department">
                            <option selected disabled>Choose an option</option>
                            <option value="admin">Administration</option>
                            <option value="computer">Computer</option>
                            <option value="civil">Civil</option>
                            <option value="electrical">Electrical</option>
                            <option value="electronics">Electronics</option>
                            <option value="chemical">Chemical</option>
                            <option value="mechanical">Mechanical</option>
                            <option value="water related">Water related</option>
                            <option value="environment">Environment</option>
                            <option value="infra-structure">Infra-Structure</option>
                            <option value="ragging">Ragging</option>
                            <option value="plumbing">Plumbing</option>
                            <option value="boys hostel">Boys Hostel</option>
                            <option value="girls hostel">Girls Hostel</option>
                          </select>
                          
                          <br><br>
                          <input type="submit" name="sub1" value="Sign Up" style="height:40px; background-color:#FF4B2B;" class="btn">  
                        
                        </form>
              </div>

          </div>

</div>
<script>

$(document).ready(function(){
    $("#signup").click(function(){
      $(".baap").removeClass("trans");
      $(".baap").removeClass("trans1");
      $(".baap").addClass("trans");
    });

    $("#signin").click(function(){
      $(".baap").removeClass("trans1");
      $(".baap").removeClass("trans");
      $(".baap").addClass("trans1");
    });


  $('#designation').on('change', function() {
      <?php
          echo "document.cookie = 'desig = '+this.value;";
      ?>
  });

  $('#department').on('change', function() {
      
      <?php
          echo "document.cookie = 'depart = '+this.value;"; 
      ?>
  });
});


</script>
<?php



$us=$pass=$name="";
if(isset($_POST["sub1"]))
{
  
  $us=test_input($_POST["unameup"]);
  $pass=$_POST["passup"];
  $name=test_input($_POST["name"]);
  $desig=$_COOKIE["desig"];
  $depart=$_COOKIE["depart"];
  $_COOKIE['desig']="";
  $_COOKIE['depart']="";

  if($us!="" && $pass!="" && $name!="" && $desig!="" && $depart!=""){ 

      $conn = new mysqli($servername, $username, $password,$db);
      $sql="select * from login where uname='$us'";
      $result=$conn->query($sql);

      if(strcmp($desig,"maintenance")==0 || strcmp($desig,"hod")==0  || strcmp($desig,"student welfare in charge")==0 || strcmp($desig,"dean")==0 || strcmp($desig,"professor")==0){
        if($result->num_rows==0)
        {
          $sql="insert into request (name,uname,pass,designation,department) values ('$name','$us','$pass','$desig','$depart')";
          if ($conn->query($sql) === TRUE) {
            $conn->close();
              echo "<script>alert('Account given as request to admin.. On acceptance of account you will get the access to your account. Till then you will not able to access your account ..')</script>";
              echo "<script>";
              echo "window.open('login.php','_self');";
              echo "</script>";
          }
          else {
            echo "<script>alert('Failed to create account')</script>";
          }
          $conn->close();
        }
        else{
            echo "<script>alert('Please choose a diff username')</script>";  
            $conn->close();
        }
      }
      else
      {
        if($result->num_rows==0)
        {
          $sql="insert into login (name,uname,pass,designation,department) values ('$name','$us','$pass','$desig','$depart')";
          if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo "<script>alert('Account created successfully')</script>";
              echo "<script>";
              echo "window.open('login.php','_self');";
              echo "</script>";
          }
          else {
            echo "<script>alert('Failed to create account')</script>";
          }
          $conn->close();
        }
        else{
            echo "<script>alert('Please choose a diff username')</script>";  
            $conn->close();
        }
      }
  }
  else{
    echo "<script>alert('Please enter all details correctly !')</script>";
  }
  
}

if(isset($_POST["sub"]))
{
  
  $us=$_POST["uname"];
  $pass=$_POST["pass"];
  
  if($us!="" && $pass!="")
  {
    $conn = new mysqli($servername, $username, $password,$db);
    $sql="select * from login where uname='$us' and pass='$pass'";
    $result=$conn->query($sql);
    $conn->close();

    if($result->num_rows==1)
    {
      while($row=$result->fetch_assoc())
      {
        $_SESSION["id"]=$row["id"];
        $_SESSION["name"]=$row["name"];
        $_SESSION["designation"]=$row["designation"];
        $_SESSION["department"]=$row["department"];
        $_SESSION["image"]=$row["image"];
        $_SESSION["uname"]=$us;
        $_SESSION["pass"]=$pass;
        echo "<script>";
        if($_SESSION["designation"]=='student'){
          echo "window.open('admin1.php','_self');";
        }
        else{
          echo "window.open('admin.php','_self');";
        }
        echo "</script>";
      }
    }
    else{
      $conn = new mysqli($servername, $username, $password,$db);
      $sql="select * from reject where uname='$us' and pass='$pass'";
      $result=$conn->query($sql);
      $conn->close();

      if($result->num_rows==1)
      {
        echo "<script>";
        echo "alert('Sorry, Your request has been rejected by the admin !!');";
        echo "</script>";
      }
      else{
        $conn = new mysqli($servername, $username, $password,$db);
        $sql="select * from request where uname='$us' and pass='$pass'";
        $result=$conn->query($sql);
        $conn->close();
      
        if($result->num_rows==1)
        {
          echo "<script>";
          echo "alert('Your request is pending to be verified !!');";
          echo "</script>";
        }
        else{
          echo "<script>alert('Incorrect username or password')</script>";
        }
      }
    }
    // $conn->close();
  }
  else{
    echo "<script>alert('Please enter all details !')</script>";
  }
}

?>
<body>
</html>