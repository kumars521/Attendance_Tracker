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
                        <div class="form-row align-items-center input-group-text">
                            <div class="form-group col-sm-3">
                                <label for="Cat_Type" class="form-label">Select Catogary</label>
                                <select name="Cat_Type" id="Cat_Type" class="form-control" required onchange=LoginType() disabled>
                                    <option value="0"> -- Select -- </option>
                                    <option value="1">Update Login</option>
                                    <option value="2">Update Leave</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="txSubmitter" class="form-label">Submitter Name</label>
                                <input name="txSubmitter" type="text" value="" id="txSubmitter" class="form-control" required disabled/>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="LoginTime" class="form-label" >Login Time</label>
                                <input id="LoginTime" type="time" name="lstProjectType_4" class="form-control" disabled/>
                            </div>
                        
                            <div class="form-group col-sm-3">
                                <label for="LoginDate_Frm" class="form-label">Login From Date</label>
                                <input id="LoginDate_Frm" type="date" name="LoginDate_Frm" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="form-row align-items-center">
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
                            <div class="form-group col-sm-3">
                                <label for="FromDate" class="form-label">From Date</label>
                                <input id="FromDate" type="date" name="FromDate" class="form-control" disabled />
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="Todate" class="form-label">To Date</label>
                                <input id="Todate" type="date" name="Todate" class="form-control" disabled />
                            </div>
                        </div>
                        <!-- <div class="form-row"> -->
                        <div class="form-row input-group-text">
                            <div class="form-group col-sm-9">
                                <!-- <label for="txDescrition" class="form-label">Comments "</label> -->
                                <label for="txWComments" class="form-label" aria-required="true">Comments</label>
                                <input name="txWComments" rows="2" cols="20" type="text" id="txWComments" class="form-control" value="NA" required disabled/>
                                <!-- <textarea name="txDescrition" rows="1" cols="20" id="txDescrition" class="form-control multiline" required></textarea> -->
                            </div>
                            <div class="form-group col-sm-3">
                                <!-- <label for="txDescrition" class="form-label">Comments "</label> -->
                                <label for="OT_Hours" class="form-label" aria-required="true">Over Time</label>
                                <input name="OT_Hours" type="text" id="OT_Hours" class="form-control" Value="0-Hours" disabled />
                                <!-- <textarea name="txDescrition" rows="1" cols="20" id="txDescrition" class="form-control multiline" required></textarea> -->
                            </div>
                        </div>
                        <br/>
                        <div class="form-row align-items-center">
                            <div class="form-group col-sm-1">
                                <input type="submit" name="Refresh" value="Refresh" id="Refresh" class="btn btn-primary" onclick=getreport()/>
                            </div>
                            <div class="form-group col-sm-1">
                                <input type="submit" name="UpdateID" value="Update" id="UpdateID" class="btn btn-success" onclick=Update_Data() />
                            </div>
                            <div class="form-group col-sm-1">
                                <input type="submit" name="DeleteID" value="Delete" id="DeleteID" class="btn btn-danger" onclick=deletereort() />
                            </div>
                            <div class="form-group col-sm-1">
                                <input name="IdSelect" type="text" id="IdSelect" class="form-control" value='0' />
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="grdWR">
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
                                    function getreport() {
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
                                                $Sel_Query="Select * from my_Attn_Data where MONTH(Login_Date)=$Monthnum order by `Login_Date` desc";
                                                // $Sel_Query="Select * from my_Attn_Data order by `Login_Date` desc";
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
                                    };
                                    function deletereort(){
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
                                    };
                                    function Update_Data(){
                                        <?php
        
                                            if($_POST['IdSelect']>0 ){
                                                $ID='';
                                                $ID=$_POST['IdSelect'];
                                                $submitername=$_POST['txSubmitter'];

                                                if ($_POST['txWComments']!=''){
                                                    $Comments=$_POST['txWComments'];
                                                }
                                                if ($_POST['OT_Hours']!=''){
                                                    $Overtimehrs=$_POST['OT_Hours'];
                                                }
                                                if ($_POST['Cat_Type']==1){
                                                    if ($_POST['Shift_Type']==0){
                                                        $ShiftType='NA';
                                                        $Att_Type='NA';
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
                                                }else if ($_POST['Cat_Type']==2){
                                                    if ($_POST['Leavetype']==0){
                                                        $LeaveType='NA';
                                                        $Att_Type='NA';
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
                                                }
                                                $LoginDate=$_POST['LoginDate_Frm'];
                                                $ToDate=$_POST['LoginDate_To'];

                                                include("Mysqlconnection.php");

                                                sleep(3);
                                                $up_Query="update `my_Attn_Data` set `User_Name`='$submitername', `Login_Date`='$LoginDate', `Login_Time`='".$_POST['Timetext']."', `Attendance_Type`='$Att_Type', `OverTime_Hours`='$Overtimehrs',`ShiftType`='$ShiftType',`Leave_Reason`='$LeaveType',`LeaveFromDate`='$LoginDate',`LeaveToDate`='$ToDate',`Notes`='$Comments' where `Ref_ID`=$ID ";
                                                if($DResult=mysqli_query($sqllink,$up_Query)){
                                                    $status.="<tr>";
                                                    $status.="<td>".$ID." - Data has been Updated !</td>";
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
                                    };
                                </script>
                                <?php echo $rs_Set;?>
                            </table>
                        </div>


                        <script type="text/javascript">
                            function getrowdata(x) {
                                document.getElementById("txSubmitter").disabled = false;
                                document.getElementById("LoginDate_Frm").disabled = false;
                                document.getElementById("LoginTime").disabled = false;
                                document.getElementById("Cat_Type").disabled = false;
                                document.getElementById("Shift_Type").disabled = false;
                                document.getElementById("Leavetype").disabled = false;
                                document.getElementById("FromDate").disabled = false;
                                document.getElementById("Todate").disabled = false;
                                document.getElementById("OT_Hours").disabled = false;
                                document.getElementById("txWComments").disabled = false;
                                document.getElementById("IdSelect").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[1].innerHTML;
                                
                                document.getElementById("txSubmitter").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[2].innerHTML;
                                document.getElementById("LoginDate_Frm").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[3].innerHTML;
                                document.getElementById("LoginTime").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[4].innerHTML;
                                if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[5].innerHTML=="LOGIN"){
                                    document.getElementById("Cat_Type").value = "1";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[5].innerHTML=="LEAVE"){
                                    document.getElementById("Cat_Type").value = "2";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[5].innerHTML==""){
                                    document.getElementById("Cat_Type").value = "0";
                                }

                                if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[6].innerHTML=="SA1"){
                                    document.getElementById("Shift_Type").value = "1";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[6].innerHTML=="SA2"){
                                    document.getElementById("Shift_Type").value = "2";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[6].innerHTML=="SA3"){
                                    document.getElementById("Shift_Type").value = "3";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[6].innerHTML=="NA"){
                                    document.getElementById("Shift_Type").value = "4";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[6].innerHTML==""){
                                    document.getElementById("Shift_Type").value = "0";
                                }
                                
                                if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML==""){
                                    document.getElementById("Leavetype").value = "0";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML=="AL"){
                                    document.getElementById("Leavetype").value = "1";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML=="SL"){
                                    document.getElementById("Leavetype").value = "2";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML=="CL"){
                                    document.getElementById("Leavetype").value = "3";
                                }else if(document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML=="CP"){
                                    document.getElementById("Leavetype").value = "4";
                                }

                                // document.getElementById("Leavetype").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[7].innerHTML;
                                document.getElementById("FromDate").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[8].innerHTML;
                                document.getElementById("Todate").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[9].innerHTML;
                                document.getElementById("OT_Hours").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[10].innerHTML;
                                document.getElementById("txWComments").value = document.getElementById("grdWR").rows[x.rowIndex].getElementsByTagName("td")[11].innerHTML;
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
<script>
    $(document).ready(function() {
        $('#grdWRas').DataTable( {
            "processing": true,
            // "sorting" : true,
            "order": [ [1, 'asc'] ],             
            "serverSide": true,
            "sAjaxSource": "user/MyData",
                "aLengthMenu": [[10, 25, 50,100], [10, 25, 50,100]],
                // "aaSorting": [[0, 'desc']],
                // { "sExtends": "editor_create", "editor": "NoteEditor" },
                "sSearch":true,
                "iDisplayLength": 10,                
                // "dom": 'T<"clear">lfrtip',
                "sdom": 'zrtSpi',
                "bDeferRender": true,
                "oLanguage": {
                    "sInfoFiltered": "",
                    "sProcessing": "<img style='position:absolute;' src=''>"
                },
                "tableTools": {
                    "sSwfPath": "assets/swf/copy_csv_xls_pdf.swf"
                },
                "aColumns": [
                    {
                        "data": null,
                        "defaultContent": '',
                        "className": 'select-checkbox',
                        "orderable": false
                    },
                    { "data": "user_id" },
                    { "data": "username" },
                    { "data": "address" }
                ]
        }) ;             

    } )
</script>