<!DOCTYPE html>
    <title>Profile Info</title>
    <head>
    <?php include 'start.php';?>
    <style>
     
    span{
        display:block;
        font-size:2vw;
        color:black;
    }

    input[type="text"],input[type="date"]  {
    outline: none;
    display:inline-block;
    height:5vh;
    width:30vw;
    color:black;
    border: 1px solid green;
    margin-top:3vh;
    margin-bottom:3vh;
    border-radius:5px;
    
    }
    .input100:focus {
    padding-left: 2vw;
    width:28vw;
    }

    .input100:focus + .focus-input100::after {
    /* left: 23px; */
    color: #d41872;
    }

    .input100:focus + .focus-input100::before {
    width: 100%;
    }

    .has-val.input100 + .focus-input100::after {
    /* left: 23px; */
    color: #d41872;
    }

    .has-val.input100 + .focus-input100::before {
    width: 100%;
    }

    .has-val.input100 {
    padding-left: 60px;
    }

    input[type='submit'] {
        background: linear-gradient(to right, rgb(242, 153, 74), rgb(242, 201, 76));
        padding-left:10px;
        color:black;
        border: none;
        margin-top:1vh;
        width:10vw;
        border-radius:5px;
        outline: none;
        display:block;
        cursor:pointer;
        height:5vh;
    }
    input[type='submit']:hover
    {
        border:1px solid yellow;
    }
    textarea {
    outline: none;
    border: none;
    }

    textarea:focus, input:focus {
    border-color: yellow !important;
    }

    input:focus::-webkit-input-placeholder { color:transparent; }
    input:focus:-moz-placeholder { color:transparent; }
    input:focus::-moz-placeholder { color:transparent; }
    input:focus:-ms-input-placeholder { color:transparent; }

    textarea:focus::-webkit-input-placeholder { color:transparent; }
    textarea:focus:-moz-placeholder { color:transparent; }
    textarea:focus::-moz-placeholder { color:transparent; }
    textarea:focus:-ms-input-placeholder { color:transparent; }

    input::-webkit-input-placeholder { color: black;}
    input:-moz-placeholder { color: black;}
    input::-moz-placeholder { color: black;}
    input:-ms-input-placeholder { color: black;}

    textarea::-webkit-input-placeholder { color: #555555;}
    textarea:-moz-placeholder { color: #555555;}
    textarea::-moz-placeholder { color: #555555;}
    textarea:-ms-input-placeholder { color: #555555;}

    body{
        margin:0;
        width:100vw;
        overflow-x:hidden;
    }
    .img{
        height:70px;
        width:70px;
        border-radius:50%;
        margin-left:auto;
        margin-right:auto;
        margin-top:2vh;
    }
    .top{
        height:14vh;
        position:absolute;
        width:100vw;
        background:white;
        box-shadow:2px 5px 5px 5px lightgray;
    }
    .bottom{
        margin-top:15vh;
        position:relative;
        height:100vh;
        position:absolute;
        place-items: center;    
        width:100vw;
        background: linear-gradient(to right, rgb(253, 200, 48), rgb(243, 115, 53));
        
    }
    .con{
        background: white;
        color: black;
        padding:10px;
        background:#f1ffe0;
    }
    .cent>.con{
        padding-left:45px;
        padding-bottom:15px;
    }
    .cent{
        margin-left:8vw;      
        /* background: linear-gradient(to right, red, purple); */
        background: linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61));
        margin-top:2vh;
        margin-bottom:5vh;
        width:40vw;
        position:absolute;
        padding:1vh;
        
    }
    
    .cent1>.con{
        padding-left:25px;
        padding-bottom:15px;
    }
    .cent1{   
        width:35vw;
        margin-left:55vw;
        padding:1vh; 
        /* background: linear-gradient(to right, rgb(255, 65, 108), rgb(255, 75, 43)); */
        background: linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61));
        margin-top:2vh;
        margin-bottom:2vh;
        position:absolute;
    }
    .cent2{   
        width:35vw;
        margin-left:55vw;
        padding:1vh; 
        /* background: linear-gradient(to right, rgb(255, 65, 108), rgb(255, 75, 43)); */
        background: linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61));
        margin-top:50vh;
        margin-bottom:10vh;
        position:relative;
    }
    
    </style>
    </head>
    <body>
    <div class="top">                
        <div class="img">
            <?php            
                if($_SESSION["image"]!=""){
                    ?>
                    <img src="<?php echo $_SESSION["image"]?>" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh;">
                    <?php
                }
                else{
                    ?>
                    <img src="image/avtaar.png" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh;">
                    <?php
                }
                ?>
            </div>          
        </div>
        <?php 
            $conn = new mysqli($servername, $username, $password,$db);
            if(strcmp($designation,"student")==0){
                $sql="select * from complaint where id='$id'";  
            }
            else{
                $sql="select * from complaint where assigned='$name'";                  
            }
            
            
            $result=$conn->query($sql);
            $conn->close();
            $totComplains=$result->num_rows;
            $success=0;
            $pend=0;
            $rej=0;

            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
                // if(strcmp($designation,"student")==0){
                    if($row["status"]==1){
                        $success+=1;
                    }
                    else if($row["status"]==0){
                        $pend+=1;
                    }
                    else{
                        $rej+=1;
                    }
                //}
                // else{
                //     $success=$row["accepted"];
                //     $rej=$row["rejected"];
                // }                    
              }
            }
        ?>
        <div class="back">
        <div class="bottom">
            <div class="cent">
            <div class="con">
                <h1 style="color:black; padding-left:4vw;">Personal Info </h1><br>
                <form >
                    <span><b>Name: </b></span><input disabled class="input100" type="text"  placeholder="    <?php echo ucwords($name)?>">
                    <span><b>Designation: </b></span><input disabled class="input100" type="text"  placeholder="    <?php echo ucwords($designation)?>">
                    <span><b>Department: </b></span><input disabled type="text" class="input100"  placeholder="    <?php echo ucwords($department)?>">        
                    <br>
                </form>
                </div>                    
            </div>
            <div class="cent1">
                <div class="con">
                <h1 style="color:black; padding-left:4vw;">Complain Stats</h1><br>
                <form >
                    <span><b>Total Complaints Registered: </b></span><input disabled class="input100" type="text" placeholder="    <?php echo $totComplains?>">
                    <span><b>Successfully Completed: </b></span><input disabled class="input100" type="text"  placeholder="    <?php echo $success?>">
                    <span><b>Pending: </b></span><input disabled type="text" style="border:1px solid blue;"  placeholder="    <?php echo $pend?>">        
                    <span><b>Rejected: </b></span><input disabled type="text" style="border:1px solid red;" placeholder="    <?php echo $rej?>">        
                    <br>
                </form>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>