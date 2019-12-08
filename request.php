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
       height:130vh;
       z-index:12;
       position:fixed;
        left:0px;
        top:0px;
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

    #title{
        /* position:relative; */
        display:inline-block;
        /* background:rgb(255,65,108,0.8); */
        background:#a1880d;
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
        /* padding-left:50px; */
        color:rgb(0,0,0,0.54);
        font-family: Roboto,sans-serif;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        line-height: 1.25rem;
        font-weight: 400;
        text-decoration: inherit;
        text-transform: inherit;
    }

    .m{
        background:#ADFF2F;
        width:70vw;
        margin-left:5vw;
        height:20vh;
        overflow:auto;  
        padding-top:2vh;
        padding-bottom:2vh;
        padding-left:1vw;
        padding-right:1vw;
        margin-top:5vh;
        margin-bottom:5vh;
        border-radius: 1rem 1rem 1rem 1rem;
        cursor:pointer;
        box-shadow:5px 2px 20px 1px lightgray;
        border:none;  
    }
    #rightTop{
        float:right;
        margin-top:-13vh;   
        margin-right:5vw; 
    }

    .m1{
        background:#eb4034;
        width:60vw;
        margin-left:5vw;
        height:auto;
        overflow:auto;  
        padding-top:2vh;
        padding-bottom:2vh;
        padding-left:1vw;
        padding-right:1vw;
        margin-top:5vh;
        border-radius: 1rem 1rem 1rem 1rem;
        cursor:pointer;
        box-shadow:5px 2px 20px 1px lightgray;
        border:none;  
    }
    .main{
        position:relative;
        top:5vh;
        left:20vw;
        width:80vw;
        height:90vh;
        z-index:500;
    }

    #left{
        padding-left:1vw;
    }

    #right{
        padding-left:1vw;
    }
    #right > span{
        margin:2vh;
    }
</style>



<script>
var date;

$(document).ready(function(){
    $("#one").click(function(){
        window.open("complain.php","_self");
    });

    $("#two").click(function(){
        window.open("notification.php","_self");
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

    $("i[name='reject']").click(function(){
        tut=$(this).parent().attr("value");
        //alert(tut);
        
        <?php            
                echo "date = new Date(); 
                    date.setTime(date.getTime() + (10000)); 
                    expires = '; expires=' + date.toGMTString(); ";
                echo "document.cookie = 'torej' + '=' +  
                    tut + expires;";

                    if(isset($_COOKIE["torej"]))
                    {
                        $cID=$_COOKIE["torej"];  
                        // echo "alert('$cID');";   
                        $conn = new mysqli($servername, $username, $password,$db);


                        
                        $sql="insert into reject (name,uname,pass,designation,department) select name,uname,pass,designation,department from request where id='$cID'";

                        if($conn->query($sql)){
                            $sql="delete from request where id='$cID'";                    
                            if($conn->query($sql)){
                                echo "alert('User rejected !');  location.reload();";
                            }
                        }
                        else{
                            echo "alert('ERROR Verifying user');  location.reload();";    
                        }
                        $conn->close();
                    }
                    else{
                        echo "alert('User rejected !');  location.reload();";
                    }
            ?>
            location.reload();
    });

    $("i[name='accept']").click(function(){
        tut=$(this).parent().attr("value");
        //alert(tut);
            <?php        
                echo "date = new Date(); 
                    date.setTime(date.getTime() + (5000)); 
                    expires = '; expires=' + date.toGMTString(); ";
                echo "document.cookie = 'toadd' + '=' +  
                    tut + expires;";
          
                if(isset($_COOKIE["toadd"]))
                {
                    $conn = new mysqli($servername, $username, $password,$db);
                    $cID=$_COOKIE["toadd"];                   
                    $sql="insert into login (name,uname,pass,designation,department) select name,uname,pass,designation,department from request where id='$cID'";

                    if($conn->query($sql)){
                        $sql="delete from request where id='$cID'";
                        if($conn->query($sql)){
                            $conn->close();
                            echo "alert('You have verified one user !');";
                        }
                    }
                    else{
                        $conn->close();
                        echo "alert('ERROR verifying user');";    
                    }
                    
                }
                else{
                    echo "alert('You have verified one user !');";
                }
            ?>
        location.reload();
    });

});
</script>

<div class="navbar">
        <ul>
        <?php    
                        if($_SESSION["image"]!=null){
                        ?>
                        <li style="padding-bottom:5vh;"><img src="<?php echo $_SESSION["image"]?>" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $name?></span></li>
                        <?php
                        }
                        else{
                            ?>
                            <li style="padding-bottom:5vh;"><img src="image/avtaar.png" style="border-radius:50%; height:10vh; border:1px solid orange; width:10vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $name?></span></li>
                            <?php
                        }
        ?>
            <li><a href="./admin.php"><i class='fas fa-home' style='font-size:24px color:white'></i> Dashboard</a></li>
            <li><a href="./profile.php"><i class='fas fa-user-alt' style='font-size:24px color:white'></i> Profile</a></li>
            <li><a href="update.php"><i class='fas fa-user-edit' style='font-size:24px color:white'></i> Account Settings</a></li>
            <li><a id="out"><i class='fas fa-power-off' style='font-size:24px color:white'></i> Log Out</a></li>
        </ul>
</div>
<div id="title">
    <img  height="150" width="125" src="image/circle.svg" align="right">
    <h2 style="color:white; padding-top:5vh; padding-left:10vh;"><span><?php echo '   '.$name?></span>, All complaints listed here are sorted by date</h2>
</div>
<div class="main">

<?php
    
    $conn = new mysqli($servername, $username, $password,$db);
                                
    $sql="select * from request";

    $result=$conn->query($sql);
    $conn->close();
    $i=1;
    $img="";

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $rid=$row["id"];
            $rdepart=$row["department"];
            $rdesig=$row["designation"];
            $rname=ucwords($row["name"]);
            if($img==""){
                $img="./image/avtaar.png";
            }

            echo "<div class='m'>
                        <div id='left' style='float:left;'>
                            <img src='$img' style='border-radius:50%; margin-left:2vw; border:2px solid orange; height:13vh; width:13vh; '>
                        </div>
                        <div id='right' style='margin-left:15vw;'>
                            <span><span style='font-size:1.3em;'><b>Name:</b></span><span style='font-size:1.2em;'> $rname</span></span><br>
                            <span><span style='font-size:1.3em;'><b>Department:</b></span><span style='font-size:1.2em;'> $rdepart</span></span><br>
                            <span><span style='font-size:1.3em;'><b>Designation:</b></span><span style='font-size:1.2em;'> $rdesig</span></span>
                        </div>
                        <div id='rightTop' value='$rid'>
                            <i class='fas fa-check-circle' id='accept' name='accept' style='font-size:30px;color:rgb(0,184,0,0.8)'></i>
                            <br><br>
                            <i class='fas fa-times-circle' id='reject' name='reject' style='font-size:30px;color:rgb(255,0,0,0.7)'></i>
                        </div>
                    </div>";      
        }
        echo "<br><br>";
    }
    else{
        echo "<br><h1>You dont have any new requests from users !</h1>";
    }    
?>
</div>
</body>
</html>