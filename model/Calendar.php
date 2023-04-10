<?php declare(strict_types=1);
include "Function.php";
use PHPUnit\Framework\TestCase;
class Calendar extends TestCase {

    //<!-- ======= testCalendar_TC ======= -->
    public function testCalendar_c01(){
        $obj = new Calendar_Grade();
        
        $this->assertEquals("วันเสาร์",$obj->Date_Calendar("08","04","2023"));    //TC1
        $this->assertEquals(null,$obj->Date_Calendar("","04","2023"));          //TC2
        $this->assertEquals(null,$obj->Date_Calendar("28","04",""));            //TC3
        $this->assertEquals(null,$obj->Date_Calendar("32","04","2023"));        //TC4
        $this->assertEquals("วันอังคาร",$obj->Date_Calendar("28","02","2023"));   //TC5
        $this->assertEquals(null,$obj->Date_Calendar("29","02","2023"));        //TC6
        $this->assertEquals(null,$obj->Date_Calendar("30","02","2020"));        //TC7
        $this->assertEquals("วันเสาร์",$obj->Date_Calendar("29","02","2020"));    //TC8
        $this->assertEquals(null,$obj->Date_Calendar("30","12","2024"));        //TC9
        $this->assertEquals(null,$obj->Date_Calendar("30","13","2023"));        //TC10
    }

}

?> 