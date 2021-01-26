<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Personal Attendance </title>


        <!-- Bootstrap -->
        <environment include="Development">
            <link href="bootstrap.min.css" rel="stylesheet" />
            <!-- <link href="bootstrap-grid.min.css" rel="stylesheet" /> -->
            <link href="bootstrap_override.css" rel="stylesheet" />       
        </environment>

        <!-- Google fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="jquery.min.js"></script>
        <script src="formhandler.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            function doClick(buttonName, e) { //the purpose of this function is to allow the enter key to point to the correct button to click.
                var key;

                if (window.event)
                    key = window.event.keyCode; //IE
                else
                    key = e.which; //firefox

                if (key == 13) {
                    //Get the button the user wants to have clicked
                    var btn = document.getElementById(buttonName);
                    if (btn != null) { //If we find the button click it
                        btn.click();
                        event.keyCode = 0
                    }
                }

            }
        </script>

    </head>

    <body>
        <form method="post" action="" id="form1" enctype="">
            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['form1'];
                if (!theForm) {
                    theForm = document.form1;
                }
            </script>

            <header class="header">

                <div class="upperhalf">
                    <div class="col-md-9">
                        <div id="anz_Logo" class="anz-logo">
                            <img src="Anz_Logo.JPG" alt="">
                        </div>
                        <p class="navbar-brand">My Attendance tracker</p>

                    </div>
                </div>
                <div class="lowerhalf">
                    <div id="nav2">
                        <ul>
                            <li><a href="index.php">Login Data</a></li>
                            <!-- <li><a href="report.php">Report</a></li>
                            <li><a href="report.php">Template</a></li> -->
                        </ul>
                    </div>
                </div>
            </header>
        </form>
        <form method="post" action="" id="Loginform" enctype="">
            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['Loginform'];
                if (!theForm) {
                    theForm = document.Loginform;
                }
            </script>
            <div id="LoginSection" class="container-sm">

                <div class="panel-heading p-1 mb-2 bg-secondary text-white">Login Form </div>
                <div class="panel-body">

                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-3">
                            <label for="LoginName" class="form-label">User ID</label>
                            <input name="LoginName" type="text" id="LoginName" class="form-control" required/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="LoginPassword" class="form-label">Password</label>
                            <input name="LoginPassword" type="password" id="LoginPassword" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-1">
                            <input type="submit" name="Login" value="Login" id="Login" class="btn btn-light" />
                        </div>
                        <div class="form-group col-sm-1">
                            <input type="submit" name="Loginreset" value="Reset" id="Loginreset" class="btn btn-light" onclick=resetdata() />
                        </div>
                        <div class="form-group col-sm-1">
                            <input type="submit" name="SignUp" value="Sign Up" id="SignUp" class="btn btn-light" onclick=SignupEnable() />
                        </div>
                    </div>
                </div>
            </div>

        </form>

        <form method="post" action="" id="SignupForm" enctype="" hidden>
            <script type="text/javascript">
                //<![CDATA[
                var theForm = document.forms['SignupForm'];
                if (!theForm) {
                    theForm = document.SignupForm;
                }
            </script>
            <div id="SignUpSection" class="container-sm" >
                <div class="panel-heading p-1 mb-2 bg-secondary text-white">Sign Up</div>
                <div class="panel-body">
                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-3">
                            <label for="regUserID" class="form-label">User ID</label>
                            <input name="regUserID" type="text" id="regUserID" class="form-control" required/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="regUserName" class="form-label">Full Name</label>
                            <input name="regUserName" type="text" id="regUserName" class="form-control" required/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="regEmailId" class="form-label">Email Id</label>
                            <input name="regEmailId" type="text" id="regEmailId" class="form-control" placeholder="ex:Yourmail@mail.com" required/>
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-3">
                            <label for="txtpassword" class="form-label">Password</label>
                            <input name="txtpassword" type="password" id="txtpassword" class="form-control" required/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="txtConpassword" class="form-label">Confirm Password</label>
                            <input name="txtConpassword" type="password" id="txtConpassword" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-1">
                            <input type="submit" name="Login2" value="SignIn" id="Login2" class="btn btn-light" onclick=LoginEnable() />
                        </div>
                        <div class="form-group col-sm-1">
                            <input type="submit" name="Signupreset" value="Reset" id="Signupreset" class="btn btn-light" onclick=resetdata() />
                        </div>
                        <div class="form-group col-sm-1">
                            <input type="submit" name="IDRegister" value="Register" id="IDRegister" class="btn btn-light" onclick=FunRegister() />
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function FunRegister(){
                        <?php
                            if ($_POST['regUserID']!=''){
                                $status='';
                                $status.="before register";
                                $UseID=$_POST['regUserID'];
                                $Password=$_POST['txtpassword'];
                                $UserName=$_POST['regUserName'];
                                $EmailID=$_POST['regEmailId'];
                                $ConPassword=$_POST['txtConpassword'];
                                $status.="before connection";
                                    include("Mysqlconnection.php");
                                    if ($Password==$ConPassword){
                                        sleep(3);
                                        $Sel_Query="Select * from User_Data where User_Id=$UseID and Password=$Password";
                                        if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                            $status.= "Your Id already exist ! User ID is:-"."User_Id";
                                        }else{
                                            $inst_query="insert into `User_Data` (`Id`,`User_Name`,`User_Id`,`Email_Id`,`Password`) 
                                            VALUES(Null,'$UserName','$UseID','$EmailID','$Password')";
                                            if(mysqli_query($sqllink,$inst_query)){
                                                $status.= "Your User details has been registred !";
                                            }
                                        }
                                    }else {
                                        $status.= "<p>Confirm Password Does not match !</P>";
                                    }

                                sleep(3);
                                mysqli_close($sqllink);
                                sleep(3);
                            }
                        ?>
                    };
                    $("#Login").click(function(){
                        <?php
                            $status='';
                            $status.="before login!";
                            if ($_POST['LoginName']!=''){
                                $UseID="";
                                $Password="";
                                $UseID=$_POST['LoginName'];
                                $Password=$_POST['LoginPassword'];
                                $status.="going inside";
                                include("Mysqlconnection.php");

                                $Sel_Query="Select * from User_Data where User_Id='".$_POST['LoginName']."' and Password='".$_POST['LoginPassword']."'";
                                if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                    // while($row=mysqli_fetch_array($QResult)){  md5($_POST['LoginPassword'])
                                    ob_start();
                                    sleep(3);
                                    header("Location: index.php"); /* Redirect browser */
                                    // echo "<script> location.href='index.php'; </script>";
                                    // exit;
                                    // }
                                }else{
                                    $status.="No Records Found !";
                                }
                                sleep(3);
                                mysqli_close($sqllink);
                                sleep(3);
                            }
                        ?>
                    });
                </script>
            </div>
            <div class="text-danger">
                <?php echo $status;?>
            </div>
        </form>

                    <script>Location.=''</script>
        <script type="text/javascript">
            function SignupEnable(){
                document.getElementById("SignupForm").hidden=false;
                document.getElementById("Loginform").hidden=true;

            };
            function LoginEnable(){
                document.getElementById("SignupForm").hidden=true;
                document.getElementById("Loginform").hidden=false;

            };
            function resetdata(){
                if (document.getElementById("Loginform").hidden==false) {
                    document.getElementById("txtUserName").value="";
                    document.getElementById("txtpassword").value="";
                    document.getElementById("SignupForm").hidden=true;
                    document.getElementById("Loginform").hidden=false;
                }else if (document.getElementById("SignupForm").hidden==false){
                    document.getElementById("txtUserID").value="";
                    document.getElementById("txtUserName").value="";
                    document.getElementById("txtEmailID").value="";
                    document.getElementById("txtpassword").value="";
                    document.getElementById("txtConpassword").value="";
                    document.getElementById("SignupForm").hidden=false;
                    document.getElementById("Loginform").hidden=true;
                }
                
            };

        </script>
        <!-- </form> -->

        <div class="footer">
            <br />
            <div class="footer-content">
                <p>&copy Australia and New Zealand Banking Group Limited (ANZ) 2015 ABN 11 005 357 522. ANZ's colour blue is a trade mark of ANZ.</p>
            </div>
        </div>

    </body>

</html>
