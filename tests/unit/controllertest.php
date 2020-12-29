<?php

  include_once("Model/loginmodel.php");
  
  class TestController extends \PHPUnit\Framework\TestCase{
      public $model;
      public function __constructtest()
          {
              $this->model = new Model();
          }
      public function invoketest()
      {
        $result = $this->model->getlogin();    
        if($result == 'login')
        {
        header("Location:View/afterlogin.php");
        }
        else
        {
        echo  "Incorrect Details";
        }
      }
      }
     
?>