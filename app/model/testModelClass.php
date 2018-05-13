<?php

/**
 * Description of testModelClass
 *
 * @author Matthew
 */
class testModelClass {
    
    private $name = [];
    private $phoneNumber = [];
    private $userName = [];
    
    public function __construct()
    {
        
        $this->setName(0, "matt");
        $this->setPhone(0, "780-555-5551");
        $this->setUserName(0, "ironman");

        $this->setName(1, "tamara");
        $this->setPhone(1, "780-555-5552");
        $this->setUserName(1, "hotstuff");

        $this->setName(2, "kyle");
        $this->setPhone(2, "780-555-5553");
        $this->setUserName(2, "cannibal");
        
        //echo " inside model " . $this->getModelRecordCount();
    }
    
    function setName($index, $nameIn)
    {
        $this->name[$index] = $nameIn;
    }
    
    function setPhone($index, $phoneIn)
    {
        $this->phoneNumber[$index] = $phoneIn;
    }
    
    function setUserName($index, $userIn)
    {
        $this->userName[$index] = $userIn;
    }
    
    function getName($index)
    {
        return $this->name[$index];
    }
    
    function getPhone($index)
    {
        return $this->phoneNumber[$index];
    }
    
    function getUserName($index)
    {
        return $this->userName[$index];
    }
    
    function getModelRecordCount()
    {
    return count($this->name);
    }

    
    
}
