<?php
//require_once('testModelClass.php');
//require_once('testControllerClass.php');

/**
 * Description of testViewClass
 *
 * @author Matthew
 */
class testViewClass {
    
    private $model;
    private $controller;
    
    public function __construct(&$controllerIn, &$modelIn)
    {
        $this->controller = &$controllerIn;
        $this->model = &$modelIn;
        //echo " inside viewer:";
        //echo $this->model->getModelRecordCount();
    }
    
    function showAll()
    {
        $returnString = "";
        $recordCount = 0;
        $recordCount = $this->model->getModelRecordCount();
        //echo "<br><br>inside show all" . $recordCount;
        
        if ($recordCount > 0)
        {
            for ($i = 0; $i<=$recordCount-1; $i++)
            {
                $returnString .= "<p>Name: " . $this->model->getName($i) . "</br>";
                $returnString .= "Phone Number: " . $this->model->getPhone($i) . "</br>";
                $returnString .= "User Name: " . $this->model->getUserName($i) . "</p>";
            }        
        }
        else
        {
            $returnString = "There are no records.";
        }
        
        return $returnString;
    }
    
    function showOne($index)
    {
        $returnString = "";
        $recordCount = $this->model->getModelRecordCount();
        if ($recordCount >= $index)
        {
            $returnString .= "<p>Name: " . $this->model->getName($index) . "</br>";
            $returnString .= "Phone Number: " . $this->model->getPhone($index) . "</br>";
            $returnString .= "User Name: " . $this->model->getUserName($index) . "</p>";      
        }
        else
        {
            $returnString = "No record found.";
        }
        
        return $returnString;
    }
    
}
