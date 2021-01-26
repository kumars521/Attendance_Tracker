<?php
    session_start();
    $error="";
    //$salt="kgdfldkfj65612565DSKJSJJK";
    // if(array_key_exists("btnApplyLeave",$_GET)){
    //     unset($_SESSION);

    //     setcookie("id",time()-60*60);
    //     $_COOKIE["id"]="";
    // }else
    if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {
        header("Location: index.php");
    }
    if(array_key_exists("submit",$_POST)){
        include("Mysqlconnection.php");
        if(!$_POST['email']){
            $error.="An email address is required! <br>";
        }
        if(!$_POST['password']){
            $error.="Password is required! <br>";
        }
        
        if($error!=""){
            $error.="<p>There were error(s) in your form : </P>".$error;
        }else{
            if($_POST['signup']=='1'){
                $Sel_Query="Select id from my_Daily_Data where email='".mysqli_real_escape_string($sqllink,$_POST['email'])."'";
                $QResult=mysqli_query($sqllink,$Sel_Query);
                
                if(mysqli_num_rows($QResult)>0){
                    $error.= "This email Id is already registered !";
                    
                }else{
                    //$ins_Query="insert into `my_Daily_Data` (`email`,`password`) values(email='".mysqli_real_escape_string($sqllink,$_POST['email'])."','".mysqli_real_escape_string($sqllink,$_POST['password'])."')";
                    $ins_Query="insert into `my_Daily_Data` (`email`,`password`) values ('".mysqli_real_escape_string($sqllink,$_POST['email'])."','".mysqli_real_escape_string($sqllink,$_POST['password'])."')";
                    if(!mysqli_query($sqllink,$ins_Query)){
                    $error.="<p> Could not sign you up - Please try again. </P>";  
                    }else{
                       // $Up_Query="Update `my_Daily_Data` set password='".md5(md5(mysqli_insert_id($sqllink)).$_POST['passowrd'])."' where Id=".mysqli_insert_id($sqllink)." limit 1";
                        $Up_Query="Update `my_Daily_Data` set password='".md5($_POST['passowrd'])."' where id=".mysqli_insert_id($sqllink)." limit 1";
                        mysqli_query($sqllink,$Up_Query);
                        $_Session['Id']=mysqli_insert_id($sqllink);
                        if($_POST['stayLoggedin']=='1'){
                        setcookie("id",mysqli_insert_id($sqllink),time()+60*60*24*365);  
                        //header("Location : loggedinpage.php");
                        }
                        header("Location: loggedinpage.php");
                    //$error.="You are signed up successfully!";
                    }
                    
                    //$Sel_Query_2="Select * from my_Daily_Data where email='".mysqli_real_escape_string($sqllink,$_POST['email'])."'";
                    
                    //$InsResult=mysqli_query($sqllink,$Sel_Query_2);
                    //$row=mysqli_fetch_array($InsResult);
                    //$error.="Data From Database " .$row['email'];
                }
            }else{

                $Sel_Query1="Select * from `my_Daily_Data` where email='".mysqli_real_escape_string($sqllink,$_POST['email'])."'";//and password='".mysqli_real_escape_string($sqllink,$_POST['password'])."'";
                $QResult1=mysqli_query($sqllink,$Sel_Query1);
                if(mysqli_num_rows($QResult1)>0){
                    $row="";
                    $row=mysqli_fetch_array($QResult1);
                    if(isset($row)){
                   // if(array_key_exists("Id",$row)){
                        //$hashedpassword=md5(md5($row['Id']).$_POST['password']);
                        $hashedpassword=md5($_POST['password']);
                       //$error.=md5(md5($row['id']).$_POST['password']);
                        if($hashedpassword==$row['Password']){
                            $_Session['Id']=$row['Id'];
                            if($_POST['stayLoggedin']=='1'){
                                setcookie("Id",$row['Id'],time()+60*60*24*365); 
                            }
                            // header("Location: loggedinpage.php");
                        }else{
                            $error.="Provided password does not match !<br>";
                        }

                    } else{
                        $error.="That email address not found <br>";

                    }
                }else{
                    $error.= "No recods found ". $Sel_Query1."";
                }

            }
            
        }

    }

?>
<?php include("headerfile.php");?>
    <div class="container" id="homepagecontainer">

        <h1>My Dairy</h1>
        <p><strong>Store your thoughts permanently and securly.</strong></P>
        <div id="error">
            <?php echo $error;  ?> </div>
        <form method="post" id="Shift_Allowance">
            <label for="lstProjectType" class="form-label">&nbsp &nbsp Shift Allowance Type</label>
            <div class="row">
                <input id="lstProjectType_0" type="checkbox" name="lstProjectType_0" value="1" />
                <label for="lstProjectType_0">SA 2 (Till 5:20 AM)</label>
                <input id="lstProjectType_1" type="checkbox" name="lstProjectType_1" value="2" />
                <label for="lstProjectType_1">SA 1 (From 5:30 AM to 7:00 AM)</label>
                <input id="lstProjectType_2" type="checkbox" name="lstProjectType_2" value="3" />
                <label for="lstProjectType_2">NA ( From 7:00 AM To 2:00 PM) </label>
            </div>

        </form>
        <form method="post" id="Leave_Update">
            <input id="lstProjectType_4" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_0" value="4" />
            <label for="lstProjectType_4">Annual Leave</label>
            <input id="lstProjectType_5" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_1" value="5" />
            <label for="lstProjectType_5">Carer Leave </label>
            <input id="lstProjectType_6" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_2" value="6" />
            <label for="lstProjectType_6">Sick Leave  </label>
            <input id="lstProjectType_7" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_3" value="7" />
            <label for="lstProjectType_7">Comp Off    </label>
            <input id="lstProjectType_8" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_4" value="8" />
            <label for="lstProjectType_8">Public Holiday </label>
            <div class="row">
                <label for="lstProjectType_9">Frm Date </label><input id="lstProjectType_9" type="date" name="ctl00$BAScph$lstProjectType$lstProjectType_9" disabled />
                <label for="lstProjectType_10">To Date  </label><input id="lstProjectType_10" type="date" name="ctl00$BAScph$lstProjectType$lstProjectType_10" disabled  />
            </div>
        </form>
    </div>
    <?php include("footerfile.php");?>