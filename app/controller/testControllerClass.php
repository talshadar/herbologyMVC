<?php

/**
 * Description of testControllerClass
 *
 * @author Matthew
 */
class testControllerClass {
    
    private $model;
    
    public function __construct($modelIn)
    {
        $this->model = &$modelIn;
        //echo " inside controller.";
    }
    
    
}
