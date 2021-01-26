<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        BIS
    </title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap_override.css" rel="stylesheet" />
    <link href="WebResource.axd" rel="stylesheet" />

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
        <header class="header">
            <div class="upperhalf">
                <div class="col-md-9">
                    <div id="anz_Logo" class="anz-logo">
                        <img src="Anz_Logo.JPG" alt="">
                    </div>
                    <p class="navbar-brand">BIS Work Request Portal</p>
                </div>
            </div>

            <div class="lowerhalf">

                <div id="nav2">
                    <ul>
                        <li><a href="/index.php">Attendnce</a></li>
                        <!-- <li><a href="table.php">Request Report</a></li>
                        <li><a href="Update_Att.php">Attendnce</a></li> -->

                    </ul>
                </div>

            </div>
        </header>
        <div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Filters</div>
                                    <div class="panel-body">
                                        <!--Filters-->
                                        <div class="row">
                                            <label for="lstProjectType" class="form-label">&nbsp &nbsp Shift Allowance Type</label>
                                            <div class="panel panel-default">
                                                <div class="checkbox checkboxlist col-md-12">
                                                    <!--Project Type-->
                                                    <span id="lstProjectType" class="rbl">
                                                            <div class="row">
                                                                <input id="lstProjectType_0" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_0" value="1" />
                                                                <label for="lstProjectType_0">SA 2 (Till 5:20 AM)</label>
                                                                <input id="lstProjectType_1" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_1" value="2" />
                                                                <label for="lstProjectType_1">SA 1 (From 5:30 AM to 7:00 AM)</label>
                                                                <input id="lstProjectType_2" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_2" value="3" />
                                                                <label for="lstProjectType_2">NA ( From 7:00 AM To 2:00 PM) </label>
                                                            </div>
                                                            <div class="row">
                                                                <label for="lstProjectType_3">Login Date</label><input id="lstProjectType_3" type="date" name="ctl00$BAScph$lstProjectType$lstProjectType_3"  />
                                                                <input type="text" value="" id="resultid">
                                                            </div>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="lstProjectType" class="form-label">&nbsp &nbsp Holiday List</label>
                                            <div class="panel panel-default">
                                                <div class="checkbox checkboxlist col-md-12">
                                                    <!--Project Type-->
                                                    <span id="lstProjectType" class="rbl">
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
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var Sa_Type = ""
                                        var login_Date = ""
                                        var Leave_Type = ""
                                        var Leave_From = ""
                                        var Leave_To = ""
                                        document.getElementById("btnApplyLeave").onclick = function() {
                                            include("Mysqlconnection.php");
                                            // document.getElementById("resultid").innerhtml = "this is test "; //document.querySelectorAll('input[type=checkbox]:checked').value
                                            // if (document.getElementById("lstProjectType_0")) {

                                            // }
                                        }
                                    </script>
                                    <fieldset>
                                        <input type="submit" name="btnPrevious50" value="Previous 50" id="btnPrevious50" class="btn-sm btn-primary" />
                                        <input type="submit" name="btnNext50" value="Next 50" id="btnNext50" class="btn-sm btn-primary" />
                                        <input type="submit" name="btnRefresh" value="Refresh" id="btnRefresh" class="btn-sm btn-primary" />
                                        <input type="submit" name="btnApplyLeave" value="Apply Leave" id="btnApplyLeave" class="btn-sm btn-primary" />
                                        <div class="row">

                                            <br />
                                        </div>
                                        <div>
                                            <table class="mydatagrid table table-bordered table-striped" UseAccessible="true" id="grdWR">
                                                <tr class="gvheader thead-dark">
                                                    <th class="hidden" scope="col">&nbsp;</th>
                                                    <th scope="col">Ref_ID</th>
                                                    <th scope="col">User_Name</th>
                                                    <th scope="col">Login_Date</th>
                                                    <th scope="col">Login_Time</th>
                                                    <th scope="col">Attendance_Type</th>
                                                    <th scope="col">OverTime_Hours</th>
                                                    <th scope="col">SA_Type</th>
                                                    <th scope="col">Leave_Reason</th>
                                                    <th scope="col">Notes</th>
                                                </tr>
                                                <script type="text/javascript">
                                                    $("#Refresh").click(fucntion() {
                                                        <?php
                                                            $rows='0';
                                                            $workstream="";
                                                            $Assigned_to="";
                                                            $Request_type="";
                                                            $status="";

                                                                include("Mysqlconnection.php");

                                                                sleep(3);
                                                                $Sel_Query="Select * from my_Attn_Data ";
                                                                
                                                                if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                                                    while($row=mysqli_fetch_array($QResult)){
                                                                        
                                                                        $status.="<tr>";
                                                                        $status.="<td>".$row['Ref_ID']."</td>";
                                                                        $status.="<td>".$row['User_Name']."</td>";
                                                                        $status.="<td>".$row['Login_Date']."</td>";
                                                                        $status.="<td>".$row['Login_Time']."</td>";
                                                                        $status.="<td>".$row['Attendance_Type']."</td>";
                                                                        $status.="<td>".$row['OverTime_Hours']."</td>";
                                                                        $status.="<td>".$row['SA_Type']."</td>";
                                                                        $status.="<td>".$row['Leave_Reason']."</td>";
                                                                        $status.="<td>".$row['Notes']."</td>";
                                                                        $status.="</tr>";
                                                                    }
                                                                }else{
                                                                    $status.="<tr>";
                                                                    $status.="<td>No Records Found !</td>";
                                                                    $status.="</tr>";
                                                                }
                                                            sleep(3);
                                                            mysqli_close($sqllink);
                                                            sleep(3);
                                                        ?>

                                                    });
                                                </script>
                                                <?php echo $status;?>
                                            </table>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

</body>

</html>