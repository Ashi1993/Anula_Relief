<?php
        $con = mysqli_connect('localhost','root',null,'anula');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }


        mysqli_select_db($con,'anula');
        $sql="SELECT * FROM teachers";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
                echo $row['TeacherID'];
        }
?>