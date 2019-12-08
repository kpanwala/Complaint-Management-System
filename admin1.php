<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
Admin DashBoard
</title>
<head>
<?php include 'start.php';?>
 
<?php   
    // session_start();
    // $id=$_SESSION["id"];
?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
</head>
<body>

<style>
    /* *{
        margin:0px;
        z-index:1000;
        
    } */
    body{
        overflow-x: hidden;
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
        position:fixed;
        left:0px;
        top:0px;
       height:130vh;
       z-index:12;
       /* position:absolute; */
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
    #a1{
        background: linear-gradient(to right, rgb(255, 126, 95), rgb(254, 180, 123));
        color:white;
        
    }
    #a2{
        color:white;
        background: linear-gradient(to right, rgb(247, 151, 30), rgb(255, 210, 0));
        
    }
    #a3{
        color:white;
        background: linear-gradient(to right, rgb(29, 200, 108), rgb(147, 249, 185));
        
    }
    #a4{
        color:white;
        background: linear-gradient(to right, rgb(6, 190, 182), rgb(72, 177, 191));
        
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
        padding-left:1vw;
        font-weight:bold;
        /* margin-top:-2vh; */
        font-family: 'Times New Roman', Times, serif;
        font-size: 1.3vw;
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

    #title{
        /* position:relative; */
        display:inline-block;
        /* background:rgb(255,65,108,0.8); */
        background:rgb(255,0,0,0.8);
        height:24vh; 
        width:80vw; 
        margin-left:20vw;
        box-shadow: 0px 2px 2px 2px lightgray;
    }

    a:hover{
        color:#bb86fc;
        text-decoration: none;
        
    }

    li:hover{
        color:#bb86fc;
        text-decoration: none;
        
    }
    .main1{
        border-radius:2rem 0rem 2rem 0rem;    
        cursor:pointer;
        margin-top:20vh;
        position:absolute;
        height:24vh;
        width:35vw;
        color:#6200ee;  
        font-weight:1000;
        /* padding-left:4vw;
        padding-top:5vh; */
        background:white;
        box-shadow:5px 2px 20px 1px lightgray;
        /* border-radius:2rem 0rem 2rem 0rem; */
        display:inline-block;
        position:absolute;
    }

    .main2{
        border-radius:2rem 0rem 2rem 0rem;
        cursor:pointer;
        position:absolute;
        margin-top:50vh;
        position:absolute;
        height:24vh;
        width:35vw;
        font-weight:1000;
        /* padding-left:4vw;
        padding-top:5vh; */
        background:white;
        box-shadow:5px 2px 20px 1px lightgray;
        /* border-radius:2rem 0rem 2rem 0rem; */
        display:inline-block;
    }
    /* #one{
        background:rgb(255,0,0,0.8);
    } */
    .main1 h1{
        /* color:#6200ee;   */
        color:black;
        text-align:center;
        float:right;
        padding-right:5vw;
        padding-top:1vh;
        /* padding-left:7vw; */
        font-size:1.3em;
        font-weight:500;
    }

    .main2 h1{
        text-align:center;
        float:right;        
        padding-right:3vw;
        padding-top:1vh;
        /* padding-left:7vw; */
        font-size:1.3em;
        font-weight:500;
    }
    .cont{
        padding-right:1vw;
        z-index:2;
        padding-left:1vw;
        margin-left:15vw;
        margin-top:-17vh;
        float:right;  
        overflow:auto;
        
    }
    .cont p{
        padding:10px;
        color:rgb(0,0,0,0.54);
        font-family: Roboto,sans-serif;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        line-height: 1.25rem;
        font-weight: 400;
        text-decoration: inherit;
        text-transform: inherit;
    }

</style>



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
});
</script>

<div class="navbar">
        <ul>
        <?php    
                $conn = new mysqli($servername, $username, $password,$db);
                                
                $sql="select image,name,designation,department from login where id='$id'";

                $_SESSION["id"]=$id;

                $result=$conn->query($sql);
                
                if($result->num_rows==1 )
                {
                    while($row=$result->fetch_assoc())
                    {
                        $name=$row["name"];
                        if($row["image"]!=null){
                        ?>
                        <li style="padding-bottom:5vh;"><img src="<?php echo $row["image"]?>" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh; margin-left:-2.5vw;"><span id="curAdmin"><?php echo ucwords($row["name"])?></span></li>
                        <?php
                        }
                        else{
                            ?>
                            <li style="padding-bottom:5vh;"><img src="image/avtaar.png" style="border-radius:50%; height:10vh; border:1px solid orange; width:10vh; margin-left:-2.5vw;"><span id="curAdmin"><?php echo ucwords($row["name"])?></span></li>
                            <?php
                        }
                    }
                }
                                
                $sql="select * from complaint where id='$id' and status=1 and done='1'";
                $result=$conn->query($sql);
                $conn->close();
                $notif=$result->num_rows;
                if($notif==0){
                    $notif="";
                }
        ?>

            <li><a href="./admin1.php"><i class='fas fa-home' style='font-size:24px color:white'></i> Dashboard</a></li>
            <li><a href="./profile.php"><i class='fas fa-user-alt' style='font-size:24px color:white'></i> Profile</a></li>
            <!-- <li><a href="#"><i class='far fa-paper-plane' style='font-size:24px color:white'></i> Message</a></li> -->
            <li><a href="update.php"><i class='fas fa-user-edit' style='font-size:24px color:white'></i> Account Settings</a></li>
            <li><a id="out"><i class='fas fa-power-off' style='font-size:24px color:white'></i> Log Out</a></li>
        </ul>
</div>
<div id="title">
    <img  height="150" width="155" src="image/circle.svg" align="right">
    <h2 style="color:white; padding-top:5vh; padding-left:10vh;">Welcome ,<span><?php echo '   '.ucwords($name)?></span></h2>
</div>
<div class="main">
    <div class="main1" id="one" style="margin-left:5vw;">
        <img src="./image/complaints11.jfif" height="148" style="margin-left:0vw; border-radius:2rem 0rem 0rem 0rem;" width="182">
        <h1>Write a complaint...</h1>
        <div class="cont">
            <p>Complain?<br><br>Don't worry we 'll reach to you just let us know :)</p>
        </div>
    </div>

    <div class="main1" id="two" style="margin-left:42vw;">
    <img src="./image/notification3.png" height="148" style="margin-left:0vw; border-radius:2rem 0rem 0rem 0rem;" width="182">
        <h1 style="padding-right:7vw;">Notifications <span class="badge badge-success" id="notif"><?php echo $notif?></span></h1>
        <div class="cont">
            <p>We have some notifications for you :)</p>
        </div>
    </div>

    <div class="main2" id="three" style="margin-left:5vw;">
    <img src="./image/pending.png" height="148" style="margin-left:0vw; border-radius:2rem 0rem 0rem 0rem;" width="182">
        <h1 style="padding-right:4vw;">Pending Complaints</h1>
        <div class="cont">
        <p>Your currently lodged complaints which are pending are listed here</p>
        </div>
    </div>

    <div class="main2" id="four" style="margin-left:42vw;">
    <img src="./image/history1.jfif" height="148" style="margin-left:0vw; border-radius:2rem 0rem 0rem 0rem;" width="182">
        <h1 style="padding-right:3vw;">Previous Complaints</h1>
        <div class="cont">
            <p>We have your previous complaints listed here !</p>
        </div>
    </div> 
</div>
</body>
</html>