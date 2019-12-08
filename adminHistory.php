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
</style>



<script>
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

    $('#toview').on('change', function() {
        <?php            
            echo "var date = new Date(); 
                date.setTime(date.getTime() + (5000)); 
                expires = '; expires=' + date.toGMTString(); ";
            echo "document.cookie = 'toview' + '=' +  
                this.value + expires ";
        ?>
    });

    $('#toview1').on('change', function() {
        <?php
            echo "var date = new Date(); 
            date.setTime(date.getTime() + (5000)); 
            expires = '; expires=' + date.toGMTString(); ";
        echo "document.cookie = 'toview' + '=' +  
            this.value + expires ";
        ?>
    });

});
</script>

<div class="navbar">
        <ul>
        <?php    
                $conn = new mysqli($servername, $username, $password,$db);
                                
                $sql="select image,name,designation,department from login where id='$id'";

                $result=$conn->query($sql);
                $conn->close();
                if($result->num_rows==1 )
                {
                    while($row=$result->fetch_assoc())
                    {
                        $name=$row["name"];
                        if($row["image"]!=null){
                        ?>
                        <li style="padding-bottom:5vh;"><img src="<?php echo $row["image"]?>" style="border-radius:50%; border:2px solid orange; height:8vh; width:8vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $row["name"]?></span></li>
                        <?php
                        }
                        else{
                            ?>
                            <li style="padding-bottom:5vh;"><img src="image/avtaar.png" style="border-radius:50%; height:8vh; border:1px solid orange; width:8vh; margin-left:-2vw;"><span id="curAdmin"><?php echo $row["name"]?></span></li>
                            <?php
                        }
                    }
                }
                
                
        ?>

            <li><a href="./admin.php"><i class='fas fa-home' style='font-size:24px color:white'></i> Dashboard</a></li>
            <li><a href="./profile.php"><i class='fas fa-user-alt' style='font-size:24px color:white'></i> Profile</a></li>
            <!-- <li><a href="#"><i class='far fa-paper-plane' style='font-size:24px color:white'></i> Message</a></li> -->
            <li><a href="update.php"><i class='fas fa-user-edit' style='font-size:24px color:white'></i> Account Settings</a></li>
            <li><a id="out"><i class='fas fa-power-off' style='font-size:24px color:white'></i> Log Out</a></li>
        </ul>
</div>
<div id="title">
    <img  height="150" width="125" src="image/circle.svg" align="right">
    <h2 style="color:white; padding-top:5vh; padding-left:10vh;"><span><?php echo '   '.$name?></span>, All complaints listed here are sorted by date</h2>
</div>
<div class="main">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <select id="toview" style="margin-left:5vw;" name="toview">
        <option selected disabled>Choose topic whose complaints to view</option>
        <option value="select * from complaint where topic='Plumbing' and status in ('-1','1') order by date DESC">Plumbing</option>
        <option value="select * from complaint where topic='Electricity' and status in ('-1','1') order by date DESC">Electricity</option>
        <option value="select * from complaint where topic='Infra-Structure' and status in ('-1','1') order by date DESC">Infra-Structure</option>
        <option value="select * from complaint where topic='Ragging' and status in ('-1','1') order by date DESC">Ragging</option>
        <option value="select * from complaint where topic='Administration' and status in ('-1','1') order by date DESC">Administration</option>
        <option value="select * from complaint where topic='Computer' and status in ('-1','1') order by date DESC">Computer</option>
        <option value="select * from complaint where topic='Water related' and status in ('-1','1') order by date DESC">Water related</option>
        <option value="select * from complaint where topic='Evnironment' and status in ('-1','1') order by date DESC">Environment</option>
        <option value="select * from complaint where status in ('-1','1') order by date DESC">All</option>
    </select>
    <input type="submit" style="margin-left:2vw;"  value="Go">
    <select id="toview1" style="margin-left:30vw; margin-top:-6vh; margin-left:10vw;" name="toview1">
        <option selected disabled>Choose dept related complaints to view</option>
        <option value="select * from complaint where department='Computer' and status in ('-1','1') order by date DESC">Computer</option>
        <option value="select * from complaint where department='Electrical' and status in ('-1','1') order by date DESC">Electrical</option>
        <option value="select * from complaint where department='Civil' and status in ('-1','1') order by date DESC">Civil</option>
        <option value="select * from complaint where department='Chemical' and status in ('-1','1') order by date DESC">Chemical</option>
        <option value="select * from complaint where department='Admin' and status in ('-1','1') order by date DESC">Administration</option>
        <option value="select * from complaint where department='Girls Hostel' and status in ('-1','1') order by date DESC">Girls Hostel</option>
        <option value="select * from complaint where department='Boys Hostel' and status in ('-1','1') order by date DESC">Boys Hostel</option>
        <option value="select * from complaint where department='General' and status in ('-1','1') order by date DESC">General</option>
        <option value="select * from complaint where status in ('-1','1') order by date DESC">All</option>
    </select>
    <input type="submit" style="margin-left:2vw;"  value="Go">
    </form>
<?php
    $ttt=0;
    $conn = new mysqli($servername, $username, $password,$db);

    if(isset($_COOKIE["toview"])){
        if($_COOKIE["toview"]!=""){
            $sql=$_COOKIE["toview"];
        }
    }
    else{
        // $sql="select * from complaint where department='$department' and status=0 order by date DESC";
        if($_SESSION["designation"]=="admin"){
            $sql="select * from complaint where status in ('-1','1') order by date DESC";    
        }
        else if($_SESSION["designation"]=="hod"){
            $ddd=$_SESSION["department"];
            $sql="select * from complaint where status in ('-1','1') and department='$ddd' order by date DESC";
        }
        else if($_SESSION["designation"]=="dean"){
            $ddd=$_SESSION["department"];
            $sql="select * from complaint where status in ('-1','1') and department='$ddd' order by date DESC";
        }
        else if($_SESSION["designation"]=="student welfare in charge"){
            $ddd=ucwords($_SESSION["department"]);
            $sql="select * from complaint where status in ('-1','1') and department='$ddd' order by date DESC";
        }
        else if($_SESSION["designation"]=="professor"){
            $ddd=ucwords($_SESSION["department"]);
            $sql="select * from complaint where status in ('-1','1') and department='$ddd' order by date DESC";
        }
        else{
    
            if(strcmp(strtolower($department),"electrical")==0){
                $ddd="electricity";
            }           
            else if(strcmp(strtolower($department),"infra-structure")==0){
                $ddd="infra-structure";
            }
            else if(strcmp(strtolower($department),"water related")==0){
                $ddd="water related";
            }
            else if(strcmp(strtolower($department),"environment")==0){
                $ddd="environment";
            }
            else if(strcmp(strtolower($department),"computer")==0){
                $ddd="computer";
            }
            else{
                $ddd="Administration";
                $dsi="General";
                $ttt=1;
            }
    
            if($ttt==0){
                $sql="select * from complaint where status in ('-1','1') and topic='$ddd' order by date DESC";
            }
            else{
                $sql="select * from complaint where status in ('-1','1') and topic='$ddd' and department='$dsi' order by date DESC";
            }
        }
    }
    
    
    $result=$conn->query($sql);
    $conn->close();
    $i=1;
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $rtopic=$row["topic"];
            $rdepart=$row["department"];
            $rabout=$row["about"];
            $rdate=$row["date"];
            $rass=$row["assigned"];
            $rdatee=$row["completionDate"];
            $rass=$row["assigned"];
            $status=$row["status"];
            $reason=$row["reason"];
            $rdate1 = date("d M Y", strtotime($rdate));
            $rdate2 = date("d M Y", strtotime($rdatee));
            
            if($status==1){
                echo "<div class='m'><div id='left'><span><b>Topic: </b></span><span> <i>$rtopic</i> related problem </span><br> <span><b>Department:</b></span><span><i> $rdepart </i></span></div><div id='right'><span><b>Complaint:</b></span><span> $rabout</span><br><span><b>Date Of Registration:</b></span><span> $rdate1</span><br><span><b>Date Of Completion:</b></span><span> $rdate2</span><br><span><b>In-Charge:</b></span><span> $rass</span></div></div>";
            }
            else{
                echo "<div class='m1'><div id='left'><span><b>Topic: </b></span><span> <i>$rtopic</i> related problem </span><br> <span><b>Department:</b></span><span><i> $rdepart </i></span></div><div id='right'><span><b>Complaint:</b></span><span> $rabout</span><br><span><b>Date Of Registration:</b></span><span> $rdate1</span><br><span><b>Date Of Rejection:</b></span><span> $rdate2</span><br><span><b>In-Charge:</b></span><span> $rass</span><br><span><b>Rejection Reason:</b></span><span> $reason</span></div></div>";
            }
        }
        echo "<br><br><br>";
    }
    else{
        echo "<br><h1>Sorry ! No previous complaints !</h1>";
    }    
?>
</div>
</body>
</html>