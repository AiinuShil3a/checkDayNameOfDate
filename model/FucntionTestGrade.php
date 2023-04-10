<?php declare(strict_types=1);
include "Function.php";
use PHPUnit\Framework\TestCase;
class FucntionTestGrade extends TestCase {

    //<!-- ======= DateFunctionTC ======= -->
//<!-- ======= DateFunctionTC ======= -->
public function testGradec01(){
    $obj = new DataAndGrade();
    $this->assertEquals(false,$obj->gradeFunction("-1"));         //  tc1 Grade-Too little false (Pass)
    $this->assertEquals(false,$obj->gradeFunction("101"));        //  tc2 Grade-Too much false (Pass)
    $this->assertEquals(true,$obj->gradeFunction("100"));         //  tc3 Grade-100 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("80"));          //  tc4 Grade-80-100 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("75"));          //  tc5 Grade-75-79 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("70"));          //  tc6 Grade-70-74 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("65"));          //  tc7 Grade-65-69 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("60"));          //  tc8 Grade-60-64 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("55"));          //  tc9 Grade-55-59 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("50"));          //  tc10 Grade-50-54 true (Pass)
    $this->assertEquals(true,$obj->gradeFunction("49"));          //  tc11 Grade-0-49 true (Pass)
}

}

?> 
