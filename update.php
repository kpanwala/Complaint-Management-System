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

    input[type=text], input[type=password] {
    width: 50%;
    outline:none;
    padding: 12px 20px;
    border: none;
    border-bottom: 2px solid orange;
    margin: 8px 0;
    display: inline-block;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus,input[type=password]:focus {
    width: 80%;
    }

    input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top:4vh;
    margin-left:5vw;
    width:10vw;
    border-radius:1vw;
    outline: none;
    }

    input[type='submit']:hover
    {
        border:2px solid green;
        background:white;
        color:black;
    }

    /* input[type="text"],input[type="date"]  {
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
    /* color: #d41872;
    }

    .input100:focus + .focus-input100::before {
    width: 100%;
    }

    .has-val.input100 + .focus-input100::after {
    /* left: 23px;
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
    textarea:-ms-input-placeholder { color: #555555;} */ 

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
        box-shadow:0px 0px 2px 5px lightgray;
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
        padding:20px;
    }
    .cent>.con{
        padding-left:50px;
        padding-top:20px;
        padding-bottom:30px;
    }
    .cent{
        margin-left:8vw;      
        background: linear-gradient(to right, red, purple);
        /* background: linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61)); */
        margin-top:5vh;
        margin-bottom:5vh;
        width:40vw;
        position:absolute;
        padding:1vh;
        
    }
    
    .cent1{   
        width:35vw;
        margin-left:55vw;
        padding:1vh; 
        background: linear-gradient(to right, rgb(255, 65, 108), rgb(255, 75, 43));
        /* background: linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61)); */
        margin-top:5vh;
        margin-bottom:5vh;
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
    <?php        
        $conn = new mysqli($servername, $username, $password,$db);

        if(isset($_FILES["image"])){
            if(empty($_FILES["image"]["name"])){
               echo"You need to insert an image"; 
            }
            else{
                $allowed=['png','jpeg','jpg','jfif'];
                $fl_name=$_FILES["image"]["name"];
                $abc=explode('.',$fl_name);
                $fl_extn=strtolower(end($abc));
                $fl_temp=$_FILES["image"]["tmp_name"];

                if(in_array($fl_extn,$allowed)){
                    img($fl_extn,$fl_temp);
                    $ses=$_SESSION['image'];
                    $sql="update login set image='$ses' where id='$id'";
                            
                    if($conn->query($sql)){
                        $conn->close();
                        echo "<script>alert('Image uploaded !')</script>";
                    }
                    else{
                        echo "<script>alert('Please try again !')</script>";
                    }
                }
                else{
                    echo "<script>alert('The Extension that you choose isnt a image!!');</script>";
                }
            }
            
        }
        if(isset($_POST["name"]) or isset($_POST["nuser"]) or isset($_POST["npass"]))
        {
                $tp=1;
                $tp1=0;
                $nuser=$us;
                $npass=$pass;

                if(test_input($_POST["nuser"])!="")
                {
                    //echo "<script>alert('$us');</script>"; 
                    if($nuser!=test_input($_POST["nuser"])){
                        $nuser=test_input($_POST["nuser"]);
                        $tp1=1;
                    }
                    else{
                        echo "<script>alert('Please choose diff username else if donot want to change than leave it blank..');</script>";                        
                    }
                }

                if($_POST['npass']!="")
                {
                    $npass=$_POST["npass"];
                    $tp1=1;
                }

                $name=$_SESSION["name"];
                if($_POST['name']!=""){
                    if(test_input($_POST["name"])!=""){
                        $tp1=1;
                        $name=test_input($_POST["name"]);
                    }
                }
                    
                if($tp==0)
                {
                    echo "<script>alert('Please select a different username...!');</script>";
                }                
                else
                {
                    if($tp1==1){
                        $sql="update login set name='$name',uname='$nuser',pass='$npass' where id='$id'";
                            
                        if($conn->query($sql)){                        
                            echo "<script>alert('Account details updated...!');</script>"; 
                            $_SESSION["name"]=$name;
                            $_SESSION["uname"]=$us;

                            $_SESSION["pass"]=$pass;                       
                        }  
                        else{
                            echo "<script>alert('Error occured please try again!');</script>";                        
                        }
                    }
                    else{
                        echo "<script>alert('Please enter some details!');</script>";
                    }
                }

        }  
       
    ?>
    
        <div class="top">            
            <div class="img">
                <?php
                $conn = new mysqli($servername, $username, $password,$db);
                                
                $sql="select image from login where id='$id'";

                $result=$conn->query($sql);

                if($result->num_rows==1)
                {
                    while($row=$result->fetch_assoc())
                    {
                        if($row["image"]!=null){
                        ?>
                        <img src="<?php echo $row["image"]?>" style="border-radius:50%; border:2px solid orange; height:10vh; width:10vh;">
                        <?php
                        }
                        else{
                            ?>
                            <img src="image/avtaar.png" style="border-radius:50%; border:2px solid red; height:10vh; width:10vh;">
                            <?php
                        }
                    }
                }
                else{
                    ?>
                    <img src="image/avtaar.png" style="border-radius:50%; height:10vh; width:10vh;">
                    <?php
                }

                $conn->close();

                ?>
            </div>          
        </div>
        <div class="back">
        <div class="bottom">
            <div class="cent">
            <div class="con">
                <h1 style="color:black; padding-left:5vw;">Personal Info update</h1><br>
                <form method="post" style="margin-left:0.5vw;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <span><b>Name: </b></span><input class="input100" type="text" name="name" placeholder="  Enter your Name">
                    <span><b>User Name: </b></span><input class="input100" type="text" name="nuser" placeholder="    User name">
                    <span><b>Password: </b></span><input type="text" class="input100" name="npass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="At least 1 num ,1 uppercase letter and 6 or more characters">
                    <br>
                    <input type="submit" name="Update" value="Update">
                </form>
                </div>                    
            </div>
            <div class="cent1">
                <div class="con">
                    <h1 style="color:black; padding-left:6vw;">Update profile pic</h1>
                    <form style="margin-left:2vw;" method="post" action="" enctype="multipart/form-data">
                        <span><b>Select image to upload: </b></span><br>
                        <input type="file" name="image"><br><br>
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>

        </div>
    </div>

    </body>
</html>