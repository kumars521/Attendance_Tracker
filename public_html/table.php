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
        <!-- <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }
        </script> -->

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
                        <li><a href="index.php">Raise a request</a></li> 
                        <li><a href="table.php">Request Report</a></li>
                        <li><a href="Update_Att.php">Attendance</a></li> 

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
                                                <label for="lstProjectType" class="form-label">&nbsp &nbsp Work Stream</label>
                                                <div class="panel panel-default">
                                                    <div class="checkbox checkboxlist col-md-12">
                                                        <!--Project Type-->
                                                        <span id="lstWorkStream" class="rbl" SelectionMode="Multiple">
                                                            <input id="lstWorkStream_0" type="checkbox" name="lstWorkStream_0" value="1" />
                                                            <label for="lstWorkStream_0">Customer Service Operations</label>
                                                            
                                                            <input id="lstWorkStream_1" type="checkbox" name="lstWorkStream_1" value="2" />
                                                            <label for="lstWorkStream_1">New Zealand Operations</label>
                                                            <input id="lstWorkStream_2" type="checkbox" name="lstWorkStream_2" value="3" />
                                                            <label for="lstWorkStream_2">Institutional Operations</label>
                                                            <input id="lstWorkStream_3" type="checkbox" name="lstWorkStream_3" value="4" />
                                                            <label for="lstWorkStream_3">Group Service Operations</label></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="lstProjectType" class="form-label">&nbsp &nbsp Work Request Type</label>
                                                <div class="panel panel-default">
                                                    <div class="checkbox checkboxlist col-md-12">
                                                        <!--Project Type-->
                                                        <span id="lstProjectType" class="rbl" SelectionMode="Multiple"><input id="lstProjectType_0" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_0" value="1" /><label for="lstProjectType_0">BreakFix</label><input id="lstProjectType_1" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_1" value="2" /><label for="lstProjectType_1">Minor Enhancement</label><input id="lstProjectType_2" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_2" value="3" /><label for="lstProjectType_2">Project</label><input id="lstProjectType_3" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_3" value="4" /><label for="lstProjectType_3">Adhoc</label><input id="lstProjectType_4" type="checkbox" name="ctl00$BAScph$lstProjectType$lstProjectType_4" value="5" /><label for="lstProjectType_4">Undefined</label></span>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="row">
                                                <label for="lstStatus" class="form-label">&nbsp &nbsp Status</label>
                                                <div class="panel panel-default">
                                                    <div class="checkbox checkboxlist col-md-12">
                                                        <!--Status-->
                                                        <span id="lstStatus" class="rbl" SelectionMode="Multiple"><input id="lstStatus_0" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_0"  value="1" /><label for="lstStatus_0">New</label><input id="lstStatus_1" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_1" value="2" /><label for="lstStatus_1">Reviewed Approved</label><input id="lstStatus_2" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_2" value="4" /><label for="lstStatus_2">In Progress</label><input id="lstStatus_3" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_3" value="5" /><label for="lstStatus_3">Hold</label><input id="lstStatus_4" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_4" value="6" /><label for="lstStatus_4">Done</label><input id="lstStatus_5" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_5" value="7" /><label for="lstStatus_5">Withdrawn</label><input id="lstStatus_6" type="checkbox" name="ctl00$BAScph$lstStatus$lstStatus_6" value="8" /><label for="lstStatus_6">UAT</label></span>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="row">
                                                <label for="lstUsernames" class="form-label">&nbsp &nbsp Assigned To</label>
                                                <div class="panel panel-default">
                                                    <div class="checkbox checkboxlist col-md-12">
                                                        <!--User Detail ID-->
                                                        <div id="lstUsernames" class="rbl" SelectionMode="Multiple">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <input id="lstUsernames_0" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_0" value="0" /><label for="lstUsernames_0">Acharya, Sarvajna </label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_1" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_1" value="1" /><label for="lstUsernames_1">Arunachalam, Manjunath </label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_2" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_2" value="2" /><label for="lstUsernames_2">B S, Vishwanatha(BIS)</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_3" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_4" value="4" /><label for="lstUsernames_4">B U, Srikanta </label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_4" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_4" value="4" /><label for="lstUsernames_4">Dharmasthala, Srikanth </label>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input id="lstUsernames_5" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_8" value="8" /><label for="lstUsernames_8">M N, Sunil </label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_6" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_15" value="15" /><label for="lstUsernames_15">Suseela, L Maria</label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_7" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_16" value="16" /><label for="lstUsernames_15">Thomas, Finny </label>
                                                                    </td>
                                                                    <td>
                                                                        <input id="lstUsernames_8" type="checkbox" name="ctl00$BAScph$lstUsernames$lstUsernames_17" value="17" /><label for="lstUsernames_15">Vellamkuzhi, Swaroop </label>
                                                                    </td>
                                                                </tr>

                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="upBenEffException">

                                    <fieldset>
                                        <input type="submit" name="btnPrevious50" value="Previous 50" id="btnPrevious50" class="btn-sm btn-primary" />
                                        <input type="submit" name="btnNext50" value="Next 50" id="btnNext50" class="btn-sm btn-primary" />
                                        <input type="submit" name="btnRefresh" value="Refresh" id="btnRefresh" class="btn-sm btn-primary" />
                                        <div class="row">
                                            <br />
                                        </div>

                                        <span id="lbRowStart">1</span>
                                        <span id="Label12"> to </span>
                                        <span id="lbRowEnd">50</span>
                                        <span id="Label11"> of </span>
                                        <span id="lbRowNumTotal">213</span>
                                        <span id="Label13">  </span>
                                        <span id="lbTime">1:50:40 PM</span>
                                        <!-- <div id="status"><?php echo $workstream;?></div>  -->
                                        <div>

                                            <table class="mydatagrid table table-bordered table-striped" UseAccessible="true" id="grdWR">
                                                <tr class="gvheader thead-dark">
                                                    <th class="hidden" scope="col">&nbsp;</th><th scope="col">WR #</th><th scope="col">WR Title</th><th scope="col">WR Type</th><th scope="col">Status</th><th scope="col">Assigned To</th><th scope="col">Closed Date</th><th scope="col">Is Benefit Entered?</th><th scope="col">Is Effort Entered?</th>
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
                                                                $Sel_Query="Select * from BI_Work_Request order by ID acs LIMIT 5 ";
                                                                
                                                                if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                                                    while($row=mysqli_fetch_array($QResult)){
                                                                        
                                                                        $status.="<tr>";
                                                                        $status.="<td>".$row['ID']."</td>";
                                                                        $status.="<td>".$row['Title']."</td>";
                                                                        $status.="<td>".$row['Work_Stream']."</td>";
                                                                        $status.="<td>".$row['Submiter_Name']."</td>";
                                                                        $status.="<td>".$row['Problem_Statement']."</td>";
                                                                        $status.="<td>".$row['Request_Date']."</td>";
                                                                        $status.="<td>".$row['Ref_ID']."</td>";
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