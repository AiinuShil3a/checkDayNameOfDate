<?php
        
        $summit = isset($_GET['SUBMIT']) ? $_GET['SUBMIT'] : include "../alert/aleart_Submit.js";
        $Date = $_GET['Date'];
        $Month = $_GET['Month'];
        $Year = $_GET['Year'];
        $class = $_GET['class'];
        $grade = $_GET['grade'];

        include_once '../model/Function.php';
        $obj = new Calendar_Grade();
        $rs = $obj->Date_Calendar($Date,$Month,$Year); 
        $rs2 = $obj->gradeFunction($grade);
        // JSON TO ARRAY
        $jsonCode = $rs2;
        $jsonDecode = json_decode($jsonCode, true);

        include "../view/showHomepage.php";

?>