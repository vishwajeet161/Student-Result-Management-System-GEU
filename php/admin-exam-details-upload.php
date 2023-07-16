<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $section = $_POST['section'];
    $rollno = $_POST['rollno'];
    $regno = $_POST['regno'];
    $cd = $_POST['cd'];
    $se = $_POST['se'];
    $cn = $_POST['cn'];
    $webd = $_POST['webd'];
    $bda = $_POST['bda'];

    $con = mysqli_connect('localhost', 'root', '', 'student result management system', '3308');
    if ($con == false) {
        echo "Error in database connection!!";
    } else {
        $select = "SELECT * FROM `student_info` WHERE `regno`='$regno'";
        $result = mysqli_query($con, $select);
        $num = mysqli_num_rows($result);
        $select2 = "SELECT * FROM `student_info` WHERE `section`='$section' AND `rollno`='$rollno'";
        $res = mysqli_query($con, $select2);
        $row = mysqli_num_rows($res);
        $select3 = "SELECT * FROM `student_info` WHERE `emailid`='$emailid'";
        $res2 = mysqli_query($con, $select3);
        $row2 = mysqli_num_rows($res2);

        if ($num > 0 || $row>0 || $row2>0) {
?>
            <script>
                alert("Registration number or same class with same roll no or student with same email id Already Exists");
                window.open('../service-pages/admin-exam-details-upload.php', '_self');
            </script>
            <?php
        } else {
           if(intval($cn)>50||intval($cd)>50||intval($webd)>50||intval($se)>50||intval($bda)>50||intval($cn)<0||intval($cd)<0||intval($webd)<0||intval($se)<0||intval($bda)<0){
           ?>
            <script>
                alert("Please Enter valid Marks (0>=marks<=50)");
                window.open('../service-pages/admin-exam-details-upload.php', '_self');
            </script>
            <?php
           }else{
	    $total = intval($cn)+intval($cd)+intval($webd)+intval($se)+intval($bda);
	    $status = 'Pass';
	    if($total<100){
	    $status = 'Fail';
	    }
            $insert = "INSERT INTO `student_info`(`name`, `emailid`,`section`,`rollno`,`regno`,`cd`,`se`,`cn`,`webd`,`bda`,`total`,`status`) VALUES ('$name','$emailid','$section','$rollno','$regno','$cd','$se','$cn','$webd','$bda','$total','$status')";
            $row = mysqli_query($con, $insert);
            if ($row == true) {

            ?>
                <script>
                    alert('Details Added Successfully!');
                    window.open('../service-pages/admin-exam-details-upload.php', '_self');
                </script>
<?php

            } else {
                echo "error";
            }
        }
        }
    }
}
?>
