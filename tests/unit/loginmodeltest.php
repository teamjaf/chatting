<?php
use dbcon;

class ModelTest extends \PHPUnit_Framework_Testcase{
public function testgetlogin()
{
   $user = new \App\Models\Users;
   $user->setUserName('ImrulKayes');

   $this->assertEquals($user->getUserName(), 'ImrulKayes');
}

public function testinsertmsg($senderid,$receiverid,$msg)
{
	$sql = "Insert into Message (Sender_Id,Receiver_Id,Message,Status) values('$senderid','$receiverid','$msg','unread')";
	$this->assertEquals(mysqli_query($conn,$sql));
}

public function testshowchat()
{
    $user = new \App\Models\Users;
    $this->assertEquals($user->getUserName(), 'ImrulKayes');
    return 'login';
	
}

 public function testalluser()
{
   
	$sql = "Insert into Message (Sender_Id,Receiver_Id,Message,Status) values('$senderid','$receiverid','$msg','unread')";
	$this->assertEquals(mysqli_query($conn,$sql));
}
// //for status is istype 
public function testis_type($senderid,$receiverid,$is_type){
    $user= new \App\Models\User;
    $user->setUserName('ImrulKayes');
    
    $this->assertEquals($user->getChat(), "Imrul Kayes");
}


}


?>