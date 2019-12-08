<!DOCTYPE html>
<?php include 'start.php';
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
Complaint Registration
</title>
<head>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script>
    $(document).ready(function(){
        
        $("#one").click(function(){
            window.open("complain.php","_self");
        });

        $("#two").click(function(){
            window.open("notifications.php","_self");
        });

        $("#three").click(function(){
            window.open("pending.php","_self");
        });

        $("#four").click(function(){
            window.open("history.php","_self");
        });

        $("#out").click(function(){
            if(confirm("Do you want to LOG OUT ?")){    
                window.open("login.php","_self");
            }
        });

        $('#department').on('change', function() {
            var tut=this.value;
            <?php
                // echo "document.cookie = 'de = '+ this.value;";
            
                echo "date = new Date(); 
                      date.setTime(date.getTime() + (300000)); 
                        expires = '; expires=' + date.toGMTString(); ";

                echo "document.cookie = 'de' + '=' +  
                    tut + expires;";
            ?>
        });    

        $('#topic').on('change', function() {
            var tut=this.value;
            <?php
                // echo "document.cookie = 'type = '+this.value;";
            
                echo "date = new Date(); 
                      date.setTime(date.getTime() + (300000)); 
                        expires = '; expires=' + date.toGMTString(); ";

                echo "document.cookie = 'type' + '=' +  
                    tut + expires;";
            ?>
        });

        $(".close").click(function() {
            $("#myModal").css("display","none");
        });

    });


    function donee() {
        //alert("into donee");
        $(document).ready(function(){
            $("#myModal").css("display","block");
        });
    }    

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == $("#myModal")) {
            $("#myModal").css("display","none");
        }
    }
    
  </script>  
  <?php
  $compid=0;

if(isset($_POST["submit"])){
    $about=test_input($_POST["subject"]);

    if(isset($_COOKIE["type"]) and isset($_COOKIE["de"]) and $about!=""){
        
        $type=$_COOKIE["type"];
        $de=$_COOKIE["de"];

        $conn = new mysqli($servername, $username, $password,$db);

        if(strcmp($type,'Plumbing')==0){
            $sql="select id,name from login where designation='maintenance' and department='plumbing'";
        }
        else if(strcmp($type,"Electricity")==0){
            $sql="select id,name from login where designation='maintenance' and department='electrical'";
        }
        else if(strcmp($type,"Infra-Structure")==0){
            $sql="select id,name from login where designation='maintenance' and department='infra-structure'";
        }
        else if(strcmp($type,"Administration")==0){
            if(strcmp($de,'General')==0){
                $sql="select id,name from login where designation='maintenance' and department='admin'";
            }
            else{
                $dee=strtolower($de);
                $sql="select id,name from login where designation='hod' and department='$dee'";
            }   
        }
        else if(strcmp($type,"Computer")==0){
            $sql="select id,name from login where designation='maintenance' and department='computer'";
        }
        else if(strcmp($type,"Water related")==0){
            $sql="select id,name from login where designation='maintenance' and department='water related'";
        }
        else if(strcmp($type,"Environment")==0){
            $sql="select id,name from login where designation='maintenance' and department='environment'";
        }
        else if(strcmp($type,"Ragging")==0){
            $sql="select id,name from login where designation='dean'";
        }

        //echo "<script>alert('$sql');</script>";
        $result=$conn->query($sql);
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $aaa=$row["id"];
                $_COOKIE["ass"]=$row["name"];
            }
        }
        $as=$_COOKIE['ass'];
        $sql1="insert into complaint (id,topic,department,about,assigned) values ('$id','$type','$de','$about','$as')";
    
        if ($conn->query($sql1))
        {
            $conn->close();
            $conn = new mysqli($servername, $username, $password,$db);

            $sql2="SELECT complain_id FROM `complaint` order by complain_id desc limit 1";
            if ($conn->query($sql2))
            {
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $compid=$row["complain_id"];
                    }
                }
                
            }

            $conn->close();
            echo "<script>donee();</script>";
        }
        else
        {
            echo "<script>alert('Failed to register your request')</script>";
        }
    }
    else{
        echo "<script>alert('Please enter the details properly!')</script>";
    }

}


?>
<style>

  * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    a:hover{
        color:#bb86fc;
        text-decoration: none;
        
    }

    li:hover{
        color:#bb86fc;
        text-decoration: none;
        
    }

    body{
        overflow: hidden;
        /* background-color:rgb(237, 240, 244); */
        height:100vh;
        width:100vw;
    }

    .profile{
        top:0;
        z-index:20;
        height:10vh;
        left:0vw;
        position: absolute;
        width:100vw;
        display:inline-block;
        /* background: rgba(238, 184, 9, 0.904); */
        background:white;
    }

    .right{
        position:absolute;
        top:0;
        z-index:-2;
        width:100vw;
        height:100vh;
    }
   
   #whole{
       height:100vh;
       width:100vw;
       
   }
   #small1{
       width:40px;
       height:40px;
       margin-right:6vw;
       display:inline-block;
   }
   
   #small2{
       width:30px;
       margin-right:1vw;
       border:1px solid yellow;
       height:30px;
       display:inline-block;
   }
   .log{
       height:8vh;
       width:30vw;
       margin-top:2vh;       
       z-index:21;
       cursor:pointer;
       position:absolute;
       display:inline-block;
       margin-left:65vw; 
       top:0;
    
   }
   .mySlides {display:none;}
   
   #welcome{
        color:rgb(63, 5, 37);
        justify-content:center;
        /* margin-top:-30vh; */
   }
   
   .navbar{
       height:130vh;
       z-index:12;
       position:absolute;
       margin-top:-4vh; 
       width:20vw;
       /* background:#121212; */
       background-color: rgba(0,0,0,0.75);
       box-shadow:0px 30px 0px 2px lightgray;
   }
   .card{
        width:20vw;
        height:30vh;
        border-radius:20px;
        margin-left:5vw;
        margin-top: 10vh;
        display:inline-block;
        cursor: pointer;
        position:relative;
        box-shadow: 0px 2px 2px 2px lightgray;
    }

    .main{
        position:absolute;
        top:10vh;
        left:20vw;
        width:80vw;
        height:90vh;
        z-index:500;
    }
    

    h1{
        text-align: center;
        /* padding-top:10vh; */
        font-size:2.5vw;
    }

    li{
        color:white;  
        font-family: 'Times New Roman', Times, serif;
        list-style-type:none;
        text-align: left;
        margin-left:-1vw;
        font-size:2vw;
        padding-top:8vh;
    }

    #curAdmin{
        color:white;  
        display:inline-block;
        vertical-align: middle;
        padding-left:1.5vw;
        font-weight:bold;
        /* margin-top:-2vh; */
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.5vw;
    }

    ul{
        margin-top:-30vh;
    }

    a{
        color: inherit;
        list-style-type: none;
        text-decoration: none;
        text-decoration-color: none;
        cursor:pointer;
    }

    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }

    #title{
        /* position:relative; */
        display:inline-block;
        /* background:rgb(255,65,108,0.8); */
        background:#0da168;
        height:20vh; 
        width:80vw; 
        margin-left:-5.5vw;
        box-shadow: 0px 2px 2px 2px lightgray;
    }

    .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
    }

    .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    form{
        margin-top:5vh;
        padding-left:2vw;
        padding-right:2vw;
        padding-bottom:2vw;
        margin-top:10vh;
    }

    #go{
        /* display:none; */
    }

    /* .here{
        background:#f2f2f2;
    } */

    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
    color: #aaa;
    margin-left:45vw;
    font-size: 28px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
    }

</style>

  
</head>
<?php
$assid=$ass="";
?>
<body>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="close">&times;</div>
    <h1>Complain registered!</h1>
    <p style="padding-left:10vw; padding-top:5vh; padding-bottom:5vh;"><?php $ass=$_COOKIE['ass']; echo "<b>$ass</b> is assigned to your complaint "; ?></p>
  </div>
</div>
<div class="row">
<div class="col-sm-3">
    <div class="navbar">
            <ul>
            <?php    
            if($_SESSION["image"]!=null){
                ?>
                <li style="padding-bottom:5vh;"><img src="<?php echo $_SESSION["image"]?>" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $name;?></span></li>
                <?php
            }
            else{
                ?>
                <li style="padding-bottom:5vh;"><img src="image/avtaar.png" style="border-radius:50%; height:10vh; border:1px solid orange; width:10vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $name;?></span></li>
                <?php
            }   
            ?>

            <li><a href="./admin1.php"><i class='fas fa-home' style='font-size:24px color:white'></i> Dashboard</a></li>
            <li><a href="./profile.php"><i class='fas fa-user-alt' style='font-size:24px color:white'></i> Profile</a></li>            
            <li><a href="update.php"><i class='fas fa-user-edit' style='font-size:24px color:white'></i> Account Settings</a></li>
            <li><a id="out"><i class='fas fa-power-off' style='font-size:24px color:white'></i> Log Out</a></li>
            </ul>
    </div>

</div>
<div class="col-sm-7 here">
<div id="title">
    <img  height="130" width="110" src="image/circle.svg" align="right">
    <h2 style="color:white; padding-top:3vh; padding-left:10vh;">Kindly, register your complaint we'll look into it as soon as possible!</h2>
</div>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
  <div class="row">
    <div class="col-25">
        <label id="top">Topic Related:</label>
    </div>
    <div class="col-75">
    <select id="topic" name="topic">
        <option selected disabled>Choose a topic which relates your complaint</option>
        <!-- <option value="Plumbing">Plumbing</option> -->
        <option value="Electricity">Electricity</option>
        <option value="Infra-Structure">Infra-Structure</option>
        <option value="Ragging">Ragging</option>
        <option value="Administration">Administration</option>
        <option value="Computer">Computer</option>
        <option value="Water related">Water related</option>
        <option value="Environment">Environment</option>
    </select>
    </div>
  </div>
  <div class="row" id="go">
    <div class="col-25">
        <label id="depart">Department:</label>
    </div>
    <div class="col-75">
    <select id="department" name="department">
        <option selected disabled>Choose a department which relates your complaint</option>
        <option value="General">General</option>
        <option value="Computer">Computer</option>
        <option value="Civil">Civil</option>
        <option value="Electrical">Electrical</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Electronics">Electronics</option>
        <option value="Chemical">Chemical</option>
        <option value="Boys Hostel">Boys Hostel</option>
        <option value="Girls Hostel">Girls Hostel</option>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label >Subject:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input style="margin-left:20vw;margin-top:3vh; width:10vw;" type="submit" name="submit" value="Submit">
  </div>
  </form>
  </div>
  </div>

</body>
</html>