<?php
session_start();
if (isset($_POST['submit'])) {
    $emailid = $_POST['emailid'];
    $reg = $_POST['regno'];

    $con = mysqli_connect('localhost', 'root', '', 'student result management system', '3308');
    if ($con == false) {
        echo "Error in connection";
    } else {
        $select = "SELECT * FROM `student_info` WHERE `emailid`='$emailid'  AND `regno`='$reg'";
        $query = mysqli_query($con, $select);
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $data = mysqli_fetch_assoc($query);
            $_SESSION['username'] = $data['name'];
            $_SESSION['email'] = $emailid;
            $_SESSION['regno'] = $reg;
            header("Location:../php/student-result-form.php");
        } else {
?>
            <script>
                alert('Wrong Emailid or Registration no !!Please Try Again');
                window.open('../service-pages/result-form.php', '_self');
            </script>
<?php
        }
    }
}

?>
