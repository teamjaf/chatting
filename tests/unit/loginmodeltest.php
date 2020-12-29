<?php
class TestModel extends \PHPUnit\Framework\TestCase{

    public function getlogintest()
    {
    //     $this->visit('/')
    //     ->see('Login')
    //     ->type('boss@123.com', 'username')
    //     ->type('12345', 'password')
    //     ->press('Login');
    //    return login;
    
        self::$options = array(
                   'dbHostName' => 'localhost',
                   'dbUserName' => 'tester',
                   'dbPassword' => 'pw4tester',
                   'dbName' => 'test',
                   'dbTableName' => 'Test',
                   );            
        self::$dbHandle = new mysqli( self::$options[ 'dbHostName'], self::$options[ 'dbUserName'], self::$options[ 'dbPassword'], self::$options[ 'dbName'] );
        if( self::$dbHandle->connect_errno)
                {}
    }


     //for Session Destroy And Logout
    public function logouttest()
    {
        
    } 
    //for Dropdown
    public function dropdowntest()
    {
        
    }
    //Insert Message Function
    public function insertmsgtest($senderid,$receiverid,$msg)
    {
        
    }
    //Show Chat Function
    public function showchattest()
    {
        
    }
    //For Fetch All User Activity Status
    public function allusertest()
    {
        
    }
    //for status is istype 
    public function is_typetest($senderid,$receiverid,$is_type){
        
    }
    //Last Update activity or for status online or offline
    public function update_last_activitytest($senderid){
        
    }
    //for user last activity
    public function user_last_activitytest($username){
        
    }
    public function user_last_seentest($username){
        
    }
    //count total unread message
    public function count_msgtest($senderid,$receiverid){
        
    }
    //Details of itype status
    public function is_type_detailstest($senderid,$receiverid){
        
    }
    //Delete Message
    public function remove_chattest($remove_chat){
        
    }
}


?>


