<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
Admin DashBoard
</title>
<head>
<?php include 'start.php';?>
 
<?php   
    $cID=0;
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
        font-size: 1.2vw;
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
        background:#72c2f7;
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

    #rightTop{
        float:right;
        margin-top:-16vh;   
        margin-right:5vw; 
    }
    #left{
        padding-left:1vw;
    }

    #right{
        padding-left:1vw;
    }

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

<?php  
if(isset($_POST["submit"]))
{
  $reason=test_input($_POST["reason"]);
}

?>

<script>
var tut=0;
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

    $(".close").click(function() {
        $("#myModal").hide();
    });

    window.onclick = function(event) {    
        if(event.target == $("#myModal")) {
            $("#myModal").hide();
        }
    }

    function donee() {
        $(document).ready(function(){
            $("#myModal").show();
        });
    } 


    $("i[name='accept']").click(function(){
        var tut=$(this).attr('value');
        // alert(tut);
        location.reload(true);  
        <?php            
                echo "date = new Date(); 
                      date.setTime(date.getTime() + (10000)); 
                        expires = '; expires=' + date.toGMTString(); ";

                echo "document.cookie = 'toadd' + '=' +  
                    tut + expires;";

                if(isset($_COOKIE["toadd"]))
                {
                    $cID=$_COOKIE["toadd"];  
    // $("#accept").click(function(){
    //     tut=$(this).parent().parent().attr("id");
        
    //         <?php        
    //             echo "var date = new Date(); 
    //                 date.setTime(date.getTime() + (5000)); 
    //                 expires = '; expires=' + date.toGMTString(); ";
    //             echo "document.cookie = 'toadd' + '=' +  
    //                 tut + expires;";


    //             if(isset($_COOKIE["toadd"]))
    //             {
                     $conn = new mysqli($servername, $username, $password,$db);
                   // $cID=$_COOKIE["toadd"];
                    // echo "alert('$cID');";

                    $sql="update complaint set status='1',done='1',completionDate=CURRENT_TIMESTAMP() where complain_id='$cID'";                    

                    if($conn->query($sql)){
                        echo "alert('Complain sorted out !');";
                    }
                    else{
                        echo "alert('ERROR figuring Complain');";    
                    }
                    $conn->close();
                }
                else{
                    echo "alert('Compain Sorted !'); location.reload();";
                }
            ?>


    });

    $("i[name='reject']").click(function(){
        var tut=$(this).attr('value');
        donee();     
          
        <?php          
            $reason="";  
                echo "date = new Date(); 
                      date.setTime(date.getTime() + (10000)); 
                        expires = '; expires=' + date.toGMTString(); ";

                echo "document.cookie = 'torej' + '=' +  
                    tut + expires;";

                if(isset($_COOKIE["torej"]))
                {
                $cID=$_COOKIE["torej"];  

                if(isset($_POST["submit"]))
                {
                    
                    $reason=test_input($_POST["reason"]);

                    if(isset($_COOKIE["torej"]))
                    {
                        $conn = new mysqli($servername, $username, $password,$db);
                        $cID=$_COOKIE["torej"];                   

                        $sql="update complaint set status='-1',done='1',reason='$reason',completionDate=CURRENT_TIMESTAMP() where complain_id='$cID'";                    


                        if($conn->query($sql)){
                            echo "alert('Complain rejected !');";
                        }
                        else{
                            echo "alert('ERROR figuring Complain');";    
                        }
                        $conn->close();
                    }
                }   
                
            }
            ?>
    });    

    function hidd() {
        $(document).ready(function(){
            $("#myModal").hide();
        });
    }    
});
</script>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="close">&times;</div>
    <h1>Complain rejected but first give reason to reject!</h1><br><br>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">        
        &emsp;&emsp;&emsp;&emsp;<b>Reason: </b>&emsp;&emsp;<input style="width:30vw; height:9vh; padding:15px;" type="text-area" id="reason" name="reason" placeholder="Enter reason of rejection.."><br>
        <input style="margin-left:20vw; margin-top:5vh;" type="submit" class="btn btn-warning" name="submit" value="submit">
    </form>
  </div>
</div>
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
                        <li style="padding-bottom:5vh;"><img src="<?php echo $row["image"]?>" style="border-radius:50%; border:2px solid orange; height:8vh; width:8vh; margin-left:-2.5vw;"><span id="curAdmin"><?php echo $row["name"]?></span></li>
                        <?php
                        }
                        else{
                            ?>
                            <li style="padding-bottom:5vh;"><img src="image/avtaar.png" style="border-radius:50%; height:8vh; border:1px solid orange; width:8vh; margin-left:-2.5vw;"><span id="curAdmin"><?php echo $row["name"]?></span></li>
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
<?php
    $ttt=0;
    $conn = new mysqli($servername, $username, $password,$db);
    
    if($_SESSION["designation"]=="admin"){
        $sql="select * from complaint where status='0' order by date DESC";  
        $ddd="admin";  
    }
    else if($_SESSION["designation"]=="hod"){

        $ddd=ucwords($_SESSION["department"]);
        
        if(strcmp(strtolower($ddd),"administration")==0){
            $to="administration";
            $sql="select * from complaint where status='0' and department='$ddd' and topic='$to' order by date DESC";
        }
        else{
            $sql="select * from complaint where status='0' and department='$ddd' order by date DESC";
        }
        $ddd=ucwords($_SESSION["designation"]);
        // echo "<script>alert('$ddd');</script>";
    }
    else if($_SESSION["designation"]=="dean"){
        $ddd=$_SESSION["department"];
        $to="ragging";
        $sql="select complain_id,topic,department,about,date,assigned from complaint where status='0' and topic='Ragging' or department='$ddd' order by date DESC";
    }
    else if($_SESSION["designation"]=="student welfare in charge"){
        $ddd=ucwords($_SESSION["department"]);
        $sql="select * from complaint where status='0' and department='$ddd' order by date DESC";
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
            $sql="select complain_id,topic,department,about,date,assigned from complaint where status='0' and topic='$ddd' order by date DESC";
        }
        else{
            $sql="select complain_id,topic,department,about,date,assigned from complaint where status='0' and topic='$ddd' and department='$dsi' order by date DESC";
        }
    }

    $result=$conn->query($sql);
    $conn->close();
    $i=1;
    if(strcmp($designation,"maintenance")==0){
        if(strcmp(strtolower($department),"electrical")==0){
            $to="electricity";
        }
        else if(strcmp(strtolower($department),"plumbing")==0){
            $to="plumbing";
        }
        else if(strcmp(strtolower($department),"infra-structure")==0){
            $to="infra-structure";
        }
        else if(strcmp(strtolower($department),"water related")==0){
            $to="water related";
        }
        else if(strcmp(strtolower($department),"environment")==0){
            $to="environment";
        }
        else if(strcmp(strtolower($department),"computer")==0){
            $to="computer";
        }
        else{
            $to="administration";
        }
    }
    else{
        $to=strtolower($department);
    }



    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $complainId=$row["complain_id"];
            $rtopic=$row["topic"];
            $rdepart=$row["department"];
            $rabout=$row["about"];
            $rdate=$row["date"];
            $rass=$row["assigned"];
            $rdate1 = date("d M Y", strtotime($rdate));
            $rtime1 = date("d M Y", strtotime($rdate));
            // echo "<script>alert('$ddd');</script>";
            
            if(strcmp(strtolower($rtopic),$to)==0)
            {
                echo "<div class='m'>
                <div id='left'>
                    <span><b>Topic: </b></span><span> <i>$rtopic</i> related problem </span><br> 
                    <span><b>Department:</b></span><span><i> $rdepart </i></span>
                </div>
                <div id='right'>
                    <span><b>Complaint:</b></span><span> $rabout</span><br>
                    <span><b>Date Of Registration:</b></span><span> $rdate1</span><br>
                    <span><b>In-Charge:</b></span><span> $rass</span>
                </div>
                <div id='rightTop'>
                    <i class='fas fa-check-circle' id='accept' name='accept' value='$complainId' style='font-size:30px;color:rgb(0,184,0,0.8)'></i>
                    <br><br>
                    <i class='fas fa-times-circle' id='reject' name='reject' value='$complainId' style='font-size:30px;color:rgb(255,0,0,0.7)'></i>
                </div>
                </div>";
            }
            else if(strcmp(strtolower($_SESSION["designation"]),"hod")==0 and strcmp(strtolower($rtopic),"administration")==0){
                echo "<div class='m' >
                <div id='left'>
                    <span><b>Topic: </b></span><span> <i>$rtopic</i> related problem </span><br> 
                    <span><b>Department:</b></span><span><i> $rdepart </i></span>
                </div>
                <div id='right'>
                    <span><b>Complaint:</b></span><span> $rabout</span><br>
                    <span><b>Date Of Registration:</b></span><span> $rdate1</span><br>
                    <span><b>In-Charge:</b></span><span> $rass</span>
                </div>
                <div id='rightTop'>
                    <i class='fas fa-check-circle' id='accept' name='accept' value='$complainId' style='font-size:30px;color:rgb(0,184,0,0.8)'></i>
                    <br><br>
                    <i class='fas fa-times-circle' id='reject' name='reject' value='$complainId' style='font-size:30px;color:rgb(255,0,0,0.7)'></i>
                </div>
                </div>";
            }
            else{
                echo "<div class='m'>
                <div id='left'>
                    <span><b>Topic: </b></span><span> <i>$rtopic</i> related problem </span><br> 
                    <span><b>Department:</b></span><span><i> $rdepart </i></span>
                </div>
                <div id='right'>
                    <span><b>Complaint:</b></span><span> $rabout</span><br>
                    <span><b>Date Of Registration:</b></span><span> $rdate1</span><br>
                    <span><b>In-Charge:</b></span><span> $rass</span>
                </div>
                </div>";
            }
            
            
        }
        echo "<br><br>";
    }
    else{
        echo "<h1>You dont have any pending Complaints !</h1>";
    }    
?>
</div>
</body>
</html>