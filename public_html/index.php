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
                        <li><a href="report.php">Report</a></li>
                        <li><a href="LoginPage.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div>
        <div id="divTheirSection" class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">Submission Details </div>
                    <!-- <input name="TodayDAte" type="text" id="TodayDAte" class="form-control"  /> -->
                    <div class="panel-body">

                        <div class="form-row align-items-center">
                            <div class="form-group col-sm-1">
                                <label for="txsa1" class="form-label">SA - 1</label>
                                <input name="txsa1" type="text" id="txsa1" value="" class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txsa2" class="form-label" >SA - 2</label>
                                <input id="txsa2" type="text"  name="txsa2" value=""  class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txsa3" class="form-label">SA - 3</label>
                                <input name="txsa3" type="text" id="txsa3" value="" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txna" class="form-label" >N/A</label>
                                <input id="txna" type="text"  name="txna" value=""  class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txal" class="form-label">AL</label>
                                <input name="txal" type="text" id="txal" value="" class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txsl" class="form-label" >SL</label>
                                <input id="txsl" type="text"  name="txsl" value=""  class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txcl" class="form-label">CL</label>
                                <input name="txcl" type="text" id="txcl" value="" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-1">
                                <label for="txcoff" class="form-label" >C-Off</label>
                                <input id="txcoff" type="text"  name="txcoff" value=""  class="form-control" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divTheirSection" class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">Submission Details </div>
                    <!-- <input name="TodayDAte" type="text" id="TodayDAte" class="form-control"  /> -->
                    <div class="panel-body">

                        <div class="form-row align-items-center">
                            <div class="form-group col-sm-3">
                                <label for="Cat_Type" class="form-label">Select Catogary</label>
                                <select name="Cat_Type" id="Cat_Type" class="form-control" required onchange=LoginType()>
                                    <option value="0"> -- Select -- </option>
                                    <option value="1">Update Login</option>
                                    <option value="2">Update Leave</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="txSubmitter" class="form-label">Submitter Name</label>
                                <input name="txSubmitter" type="text" value="Sunil M N" id="txSubmitter" class="form-control" required/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="Shift_Type" class="form-label">Shift Allowance</label>
                                <select name="Shift_Type" id="Shift_Type" class="form-control" required disabled onchange=enableComments()>
                                    <option value="0"> -- Select -- </option>
                                    <option value="1">Shift Allowance 1</option>
                                    <option value="2">Shift Allowance 2</option>
                                    <option value="3">Shift Allowance 3</option>
                                    <option value="4">Shift Allowance NA</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="Leavetype" class="form-label">Leave type</label>
                                <select name="Leavetype" id="Leavetype" class="form-control" required disabled>
                                    <option value="0"> -- Select -- </option>
                                    <option value="1">Annual Leave</option>
                                    <option value="2">Sick Leave</option>
                                    <option value="3">Carer Leave</option>
                                    <option value="4">Comp Off</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row align-items-center">
                            <div class="form-group col-sm-2">
                                <label for="LoginDate_Frm" class="form-label">Login From Date</label>
                                <input id="LoginDate_Frm" type="date" name="LoginDate_Frm" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="LoginDate_To" class="form-label">From To Date</label>
                                <input id="LoginDate_To" type="date" name="LoginDate_To" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="LoginTime" class="form-label" onclick=myFunction()>Login Time</label>
                                <input id="LoginTime" type="time" name="lstProjectType_4" class="form-control" disabled/>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="Timetext" class="form-label" >Selected Time</label>
                                <input id="Timetext" type="text"  name="Timetext"  class="form-control"/>
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="FromDate" class="form-label">From Date</label>
                                <input id="FromDate" type="date" name="FromDate" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-2">
                                <label for="Todate" class="form-label">To Date</label>
                                <input id="Todate" type="date" name="Todate" class="form-control" disabled />
                            </div>
                        </div>
                        <!-- <div class="form-row"> -->
                        <div class="form-row">
                            <div class="form-group col-sm-9">
                                <!-- <label for="txDescrition" class="form-label">Comments "</label> -->
                                <label for="txWComments" class="form-label" aria-required="true">Comments</label>
                                <input name="txWComments" rows="2" cols="20" type="text" id="txWComments" class="form-control" value="NA" required disabled/>
                                <!-- <textarea name="txDescrition" rows="1" cols="20" id="txDescrition" class="form-control multiline" required></textarea> -->
                            </div>
                            <div class="form-group col-sm-3">
                                <!-- <label for="txDescrition" class="form-label">Comments "</label> -->
                                <label for="OT_Hours" class="form-label" aria-required="true">Over Time</label>
                                <input name="OT_Hours" type="text" id="OT_Hours" class="form-control" Value="0-Hours" />
                                <!-- <textarea name="txDescrition" rows="1" cols="20" id="txDescrition" class="form-control multiline" required></textarea> -->
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-1">
                                <input type="submit" name="Submit_Data" value="Submit" id="Submit_Data" class="btn btn-primary" />
                            </div>
                            <div class="form-group col-sm-1">
                                <input type="submit" name="Refresh" value="Refresh" id="Refresh" class="btn btn-primary" onclick=getreport() />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function myFunction() {
                var d = new Date();
                var n = d.getHours();
                var m = d.getMinutes();
                var s = d.getSeconds();

                document.getElementById("LoginTime").value = n + ":" + m + ":00";
                document.getElementById("Timetext").value=document.getElementById("LoginTime").value;
            };
            function enableComments(){
                if (document.getElementById("Shift_Type").value == 4){
                    document.getElementById("txWComments").disabled = false;
                    document.getElementById("txWComments").value="";
                } else {
                    document.getElementById("txWComments").disabled = true;
                }
            };

            function LoginType() {
                if (document.getElementById("Cat_Type").value==1){

                    document.getElementById("LoginDate_Frm").disabled = false;
                    document.getElementById("LoginDate_To").disabled = false;
                    document.getElementById("LoginTime").disabled = false;
                    document.getElementById("Shift_Type").disabled = false;

                    document.getElementById("Leavetype").disabled = true;
                    document.getElementById("FromDate").disabled = true;
                    document.getElementById("Todate").disabled = true;
                    document.getElementById("txWComments").disabled = true;
                } else if (document.getElementById("Cat_Type").value==2){
                    document.getElementById("Leavetype").disabled = false;
                    document.getElementById("FromDate").disabled = false;
                    document.getElementById("Todate").disabled = false;
                    document.getElementById("txWComments").disabled = false;
                    document.getElementById("txWComments").value="";
                    document.getElementById("Shift_Type").disabled = true;
                    document.getElementById("LoginDate_Frm").disabled = true;
                    document.getElementById("LoginDate_To").disabled = true;
                    document.getElementById("LoginTime").disabled = true;

                }
            };
        </script>
        <script type="text/javascript">

            $("#Submit_Data").click(function() {
                
                <?php
                    // $error="";
                    $submitername=$_POST['txSubmitter'];
                    // $LoginDate=date("Y/m/d",$_POST['LoginDate']);
                    $LoginDate='NA';
                    $LoginTime='NA';
                    $rows='0';
                    $ShiftType='NA';
                    $Att_Type='NA';
                    $LeaveType='NA';
                    $LveFromDate='NA';
                    $lveToDate='NA';
                    $Comments='NA';
                    $Overtimehrs='NA';
                    $status='';
                   
                    $error.= "to test the data";

                    if(array_key_exists("Submit_Data",$_POST)){
                        // $status.= " --Arry exists";
                        // if($_POST['ddlWorkStream']>0){
                            include("Mysqlconnection.php");
                            if ($_POST['Cat_Type']==1) {
                                if ($_POST['txWComments']!=''){
                                    $Comments=$_POST['txWComments'];
                                }
                                if ($_POST['OT_Hours']!=''){
                                    $Overtimehrs=$_POST['OT_Hours'];
                                }
                                if ($_POST['Shift_Type']==0){
                                    $ShiftType='';
                                    $Att_Type='';
                                }else if ($_POST['Shift_Type']==1){
                                    $ShiftType='SA1';
                                    $Att_Type='LOGIN';
                                }else if ($_POST['Shift_Type']==2){
                                    $ShiftType='SA2';
                                    $Att_Type='LOGIN';
                                }else if ($_POST['Shift_Type']==3){
                                    $ShiftType='SA3';
                                    $Att_Type='LOGIN';
                                }else if ($_POST['Shift_Type']==4){
                                    $ShiftType='NA';
                                    $Att_Type='LOGIN';
                                }

                                $LoginDate=$_POST['LoginDate_Frm'];

                                $ToDate=$_POST['LoginDate_To'];
                                // $status.=$_POST['FromDate'] ." ** ".$_POST['Todate'];
                                while (strtotime($LoginDate) <= strtotime($ToDate)) {
                                    $ins_Query="insert into `my_Attn_Data` (`Ref_ID`,`User_Name`, `Login_Date`, `Login_Time`, `Attendance_Type`, `OverTime_Hours`,`ShiftType`,`Leave_Reason`,`LeaveFromDate`,`LeaveToDate`,`Notes`) VALUES (NULL,'$submitername', '$LoginDate', '".$_POST['Timetext']."', '$Att_Type', '$Overtimehrs','$ShiftType','NA','NA','NA','$Comments')";
                                    
                                    if($QResult=mysqli_query($sqllink,$ins_Query)){
                                        $last_id='';
                                        $last_id = $sqllink->insert_id;

                                        $status.= "New record created successfully. Ref No: " .$last_id.'<br>';

                                        $timestamp='';
                                        $day='';

                                        $LoginDate = date ("Y-m-d", strtotime("+1 days", strtotime($LoginDate)));

                                        $timestamp = strtotime($LoginDate);
                                        $day = date('D', $timestamp);

                                        if(date('D', $timestamp)=="Sat"){
                                            $LoginDate= date ("Y-m-d", strtotime("+2 days", strtotime($LoginDate)));
                                        }else if(date('D', $timestamp)=="Sun"){
                                            $LoginDate= date ("Y-m-d", strtotime("+1 days", strtotime($LoginDate)));
                                        }
                                        
                                    }else{
                                        $status.= " Unable to execute Insert Query, please try again !";  
                                    } 
                                }
                                sleep(3);
                                mysqli_close($sqllink);
                                sleep(3);
                            }else if ($_POST['Cat_Type']==2)  {
                                if ($_POST['txWComments']!=''){
                                    $Comments=$_POST['txWComments'];
                                }
                                if ($_POST['OT_Hours']!=''){
                                    $Overtimehrs=$_POST['OT_Hours'];
                                }
                                if ($_POST['FromDate']!=''){
                                    $LveFromDate=$_POST['FromDate'];
                                }
                                if ($_POST['Todate']!=''){
                                    $lveToDate=$_POST['Todate'];
                                }
                                if ($_POST['Leavetype']==0){
                                    $LeaveType='';
                                    $Att_Type='';
                                }else if ($_POST['Leavetype']==1){
                                    $LeaveType='AL';
                                    $Att_Type='LEAVE';
                                }else if ($_POST['Leavetype']==2){
                                    $LeaveType='SL';
                                    $Att_Type='LEAVE';
                                }else if ($_POST['Leavetype']==3){
                                    $LeaveType='CL';
                                    $Att_Type='LEAVE';
                                }else if ($_POST['Leavetype']==4){
                                    $LeaveType='CP';
                                    $Att_Type='LEAVE';
                                }
                                $LveFromDate=$_POST['FromDate'];
                                $LoginDate=$_POST['FromDate'];

                                $lveToDate=$_POST['Todate'];
                                // $status.=$_POST['FromDate'] ." ** ".$_POST['Todate'];
                                while (strtotime($LveFromDate) <= strtotime($lveToDate)) {

                                    $ins_Query="insert into `my_Attn_Data` (`Ref_ID`,`User_Name`, `Login_Date`, `Login_Time`, `Attendance_Type`, `OverTime_Hours`,`ShiftType`,`Leave_Reason`,`LeaveFromDate`,`LeaveToDate`,`Notes`) VALUES (NULL,'$submitername', '$LoginDate', '".$_POST['Timetext']."', '$Att_Type', '$Overtimehrs','$ShiftType','$LeaveType','$LveFromDate','$lveToDate','$Comments')";
                                    if($QResult=mysqli_query($sqllink,$ins_Query)){
                                        $last_id='';
                                        $last_id = $sqllink->insert_id;

                                        $status.= "New record created successfully. Ref No: " .$last_id.'<br>';

                                        $timestamp='';
                                        $day='';
                                        
                                        $LveFromDate = date ("Y-m-d", strtotime("+1 days", strtotime($LveFromDate)));
                                        $LoginDate = date ("Y-m-d", strtotime("+1 days", strtotime($LoginDate)));

                                        $timestamp = strtotime($LveFromDate);
                                        $day = date('D', $timestamp);

                                        if(date('D', $timestamp)=="Sat"){
                                            $LveFromDate = date ("Y-m-d", strtotime("+2 days", strtotime($LveFromDate)));
                                            $LoginDate= date ("Y-m-d", strtotime("+2 days", strtotime($LoginDate)));
                                        }else if(date('D', $timestamp)=="Sun"){
                                            $LveFromDate = date ("Y-m-d", strtotime("+1 days", strtotime($LveFromDate)));
                                            $LoginDate= date ("Y-m-d", strtotime("+1 days", strtotime($LoginDate)));
                                        }
                                        
                                    }else{
                                        $status.= " Unable to execute Insert Query, please try again !";  
                                    } 
                                }
                                sleep(3);
                                mysqli_close($sqllink);
                                sleep(3);

                            }

                    }
                    // echo $status;
                ?>
            });
        </script>
            <div id="divTheirSection" class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">Attendance Report</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="mydatagrid table table-bordered table-striped" id="grdWR">
                                    <tr class="gvheader thead-dark">
                                        <th  class="hidden" scope="col">&nbsp;Sl No</th>
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

                                        $("#Refresh").click(function getreport() {
                                            <?php
                                                $rows='0';
                                                $workstream="";
                                                $Assigned_to="";
                                                $Request_type="";
                                                $rs_Set="";
                                                $tDAte=$_POST['TodayDate'];
                                                $Monthnum=date('m',mktime($tDAte));

                                                    include("Mysqlconnection.php");

                                                    sleep(3);
                                                    $Sel_Query="Select * from my_Attn_Data where MONTH(Login_Date)=$Monthnum order by `Login_Date` desc";
                                                    // $Sel_Query="Select * from my_Attn_Data order by `Login_Date` desc";
                                                    // $status=$Sel_Query;
                                                    if($QResult=mysqli_query($sqllink,$Sel_Query)){
                                                        $slNumber='1';
                                                        while($row=mysqli_fetch_array($QResult)){
                                                            
                                                            $rs_Set.="<tr  title='Click to select row' class='rows' onmouseover='this.style.cursor='pointer';this.style.textDecoration='underline';' onmouseout='this.style.textDecoration='none';'  style='cursor: pointer; text-decoration: none;'>";
                                                            $rs_Set.="<td>".$slNumber."</td>";
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
                                                            $slNumber=$slNumber+'1';
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
                                    <?php echo $rs_Set;?>
                                </table>
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

<script>
    $(document).ready(function() {
        $('#grdWR').DataTable();
    } )
</script>