<?php
    if(isset($GET['submit'])){//to run PHP script on submit
        if(!empty($GET['check_list'])){
        // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check_list'] as $selected){
                echo $selected."</br>";
            }
        }
    
    include("relief.html"); 
?>