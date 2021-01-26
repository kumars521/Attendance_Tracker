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
        <link href="bootstrap_override.css" rel="stylesheet" />
    </environment>

    <!-- Google fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <script src="formhandler.js" type="text/javascript"></script>
    <script src="bootstrap.min.js" type="text/javascript"></script>

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
                    <p class="navbar-brand">My Attendance tracker </p>
                </div>
            </div>
            <div class="lowerhalf">
                <div id="nav2">
                    <ul>
                        <li><a href="index.php">Login Data</a></li>
                        <li><a href="report.php">Report</a></li>
                        <!-- <li><a href="Update_Att.php">Attendance</a></li> -->
                    </ul>
                </div>
            </div>
        </header>

        <div id="divTheirSection" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Attendance Report</div>
                    <div class="panel-body">
                    <div class="form-row align-items-center">
                        <div class="form-group col-sm-1">
                            <input type="submit" name="Refresh" value="Refresh" id="Refresh" class="btn btn-primary" />
                        </div>
                        <div class="form-group col-sm-1">
                            <input name="IdSelect" type="text" id="IdSelect" class="form-control" value='0' />    
                        </div>
                        <div class="form-group col-sm-1">
                            <input type="submit" name="DeleteID" value="Delete" id="DeleteID" class="btn btn-warning" />
                        </div>
                    </div>
                    <div>
                        <table class="mydatagrid table table-bordered table-striped" UseAccessible="true" id="grdWR">
                            <tr class="gvheader thead-dark">
                                <th class="hidden" scope="col">&nbsp; Edit ID</th>
                                <th scope="col">Ref ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Login Date</th>
                                <th scope="col">Login Time</th>
                                <th scope="col">Attendance Type</th>
                                <th scope="col">SA Type</th>
                                <th scope="col">Leave Reason</th>
                                <th scope="col">Leave FromDate</th>
                                <th scope="col">Leave ToDate</th>
                                <th scope="col">Over TimeHours</th>
                                <th scope="col">Comments</th>
                            </tr>
                            <script type="text/javascript">
                                $("#Refresh").click(fucntion getreport() {
                                    <?php
                                        $rows='0';
                                        $workstream="";
                                        $Assigned_to="";
                                        $Request_type="";
                                        $rs_Set="";
                                        $status='';
                                        $tDAte=$_POST['TodayDate'];
                                        $Monthnum=date('m',mktime($tDAte));

                                            include("Mysqlconnection.php");

                                            sleep(3);
                                            // $Sel_Query="Select * from my_Attn_Data where MONT/H(Login_Date)=$Monthnum ";
                                            $Sel_Query="Select * from my_Attn_Data order by `Ref_ID` desc";
                                            // $status=$Sel_Query;
                                            if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                                // $slNumber='1';
                                                while($row=mysqli_fetch_array($QResult)){
                                                    
                                                    $rs_Set.="<tr  title='Click to select row' class='rows' onmouseover='this.style.cursor='pointer';this.style.textDecoration='underline';' onclick=getrowdata(this) onmouseout='this.style.textDecoration='none';'  style='cursor: pointer; text-decoration: none;'>";
                                                    // $rs_Set.="<td id='Edit_ID'><span><a href=''>Edit-".$row['Ref_ID']."</a></span></td>";
                                                    $rs_Set.="<td id='Edit_ID'><span>Edit-".$row['Ref_ID']."</span></td>";
                                                    $rs_Set.="<td>".$row['Ref_ID']."</td>";
                                                    // $rs_Set.="<td id='refid><span><a href=''>".$row['Ref_ID']."</a></span></td>";
                                                    $rs_Set.="<td>".$row['User_Name']."</td>";
                                                    $rs_Set.="<td>".$row['Login_Date']."</td>";
                                                    $rs_Set.="<td>".$row['Login_Time']."</td>";
                                                    $rs_Set.="<td>".$row['Attendance_Type']."</td>";
                                                    $rs_Set.="<td>".$row['ShiftType']."</td>";
                                                    $rs_Set.="<td>".$row['Leave_Reason']."</td>";
                                                    $rs_Set.="<td>".$row['LeaveFromDate']."</td>";
                                                    $rs_Set.="<td>".$row['LeaveToDate']."</td>";
                                                    $rs_Set.="<td>".$row['OverTime_Hours']."</td>";
                                                    $rs_Set.="<td>".$row['Notes']."</td>";
                                                    $rs_Set.="</tr>";

                                                    // $slNumber=$slNumber+'1';
                                                }
                                            }else{
                                                $rs_Set.="<tr>";
                                                $rs_Set.="<td>No Records Found !</td>";
                                                $rs_Set.="</tr>";
                                            }
                                        sleep(3);
                                        mysqli_close($sqllink);
                                        sleep(3);
                                    ?>

                                });
                            </script>
                            <script type="text/javascript">
                                $("#DeleteID").click(fucntion deletereort() {
                                    <?php
    
                                        if($_POST['IdSelect']>0 ){
                                            $ID='';
                                            $ID=$_POST['IdSelect'];
                                            include("Mysqlconnection.php");

                                            sleep(3);
                                            $Del_Query="delete from `my_Attn_Data` where `Ref_ID`=$ID ";
                                            if($DResult=mysqli_query($sqllink,$Del_Query)){
                                                $status.="<tr>";
                                                $status.="<td>".$ID." - Record got deleted !</td>";
                                                $status.="</tr>"; 
                                                sleep(3);
                                                $rs_Set='';
                                                $Sel_Query="Select * from my_Attn_Data order by `Ref_ID` desc";
                                                    if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                                        while($row=mysqli_fetch_array($QResult)){
                                                            
                                                            $rs_Set.="<tr  title='Click to select row' class='rows' onmouseover='this.style.cursor='pointer';this.style.textDecoration='underline';' onclick=getrowdata(this) onmouseout='this.style.textDecoration='none';'  style='cursor: pointer; text-decoration: none;'>";
                                                            $rs_Set.="<td>".$row['Ref_ID']."</td>";
                                                            $rs_Set.="<td>".$row['User_Name']."</td>";
                                                            $rs_Set.="<td>".$row['Login_Date']."</td>";
                                                            $rs_Set.="<td>".$row['Login_Time']."</td>";
                                                            $rs_Set.="<td>".$row['Attendance_Type']."</td>";
                                                            $rs_Set.="<td>".$row['ShiftType']."</td>";
                                                            $rs_Set.="<td>".$row['Leave_Reason']."</td>";
                                                            $rs_Set.="<td>".$row['LeaveFromDate']."</td>";
                                                            $rs_Set.="<td>".$row['LeaveToDate']."</td>";
                                                            $rs_Set.="<td>".$row['OverTime_Hours']."</td>";
                                                            $rs_Set.="<td>".$row['Notes']."</td>";
                                                            $rs_Set.="</tr>";
                                                        }
                                                    }else{
                                                        $status.="No Records Found !<br>";
                                                    }
                                            }
                                            sleep(3);
                                            mysqli_close($sqllink);
                                            sleep(3);
                                        }
                                    ?>
                                });
                            </script>
                            <?php echo $rs_Set;?>
                        </table>
                        <script type="text/javascript">
                            function getrowdata(x){
                                document.getElementById("IdSelect").value=document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[1].innerHTML;

                            } 
                        </script>
                    </div>
                    </div>
            
                </div>
            </div>
        </div>
    </form>

    <div>
        <?php echo $status;?>
    </div>

    <div class="footer">
        <br />
        <div class="footer-content">
            <p>&copy Australia and New Zealand Banking Group Limited (ANZ) 2015 ABN 11 005 357 522. ANZ's colour blue is a trade mark of ANZ.</p>
        </div>
    </div>

</body>

</html>