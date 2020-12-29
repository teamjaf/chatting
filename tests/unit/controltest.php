<?php
use dbcon;


  class ControllerTest extends \PHPUnit_Framework_Testcase{
      
      public function test__construct()
          {
              $this->model = new Model();
              $this->assertEquals(mysqli_query($conn,$sql));
          }

      public function testinvoke()
      {
        $result = $this->model->getlogin();    
        $this->assertEquals(get($conn,$result));
      }
      }
     

?>