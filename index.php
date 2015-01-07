<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student List</title>
    </head>
    <body>
        <h1 align="center"> Student List </h1>
        <?php
        include( 'student.php' );
        
        //Array for all students 
        $students = array();
        
        //Add the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email( 'home', 'john@doe.com' );
        $first->add_email( 'work', 'john@mcdonalds.com' );
        $first->add_grade( 65 );
        $first->add_grade( 75 );
        $first->add_grade( 55 );
        $students['j123'] = $first;
        
        
        //Add the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email( 'home','albert@braniacs.com' );
        $second->add_email( 'work1','a_einstein@bcit.ca' );
        $second->add_email( 'work2','albert@physics.mit.edu' );
        $second->add_grade( 95 );
        $second->add_grade ( 80 );
        $second->add_grade( 50 );
        $students['a456'] = $second;
        
        //Add myself (Rhea) to the list!
        $third = new Student();
        $third->surname = "Lauzon";
        $third->first_name = "Rhea";
        $third->add_email( 'home','rhealauzon@gmail.com' );
        $third->add_email( 'school','rlauzon5@my.bcit.ca' );
        
        $third->add_grade( 95 );
        $third->add_grade ( 86 );
        $third->add_grade( 91 );
        $students['r789'] = $third;
        //sort the students 
        ksort( $students );
        
        //display each student on the screen 
        //with their details
        echo '<p align="center" >';
        foreach( $students as $student )
        {
            echo $student->toString();
        }
        echo '</p>';
        ?>
    </body>
</html>
