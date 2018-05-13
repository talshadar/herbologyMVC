<?php
include_once('app/model/testModelClass.php');
include_once('app/controller/testControllerClass.php');
include_once('app/view/testViewClass.php');

//echo "<br>load model first";
$myModel = new testModelClass();
//echo "<br>remote count";
//echo $myModel->getModelRecordCount();
//echo "<br>now controller.";
$myController = new testControllerClass($myModel);
//echo "<br>now viewer";
$myModelView = new testViewClass($myController, $myModel);
//echo "<br>all instantiated.";
//echo "<br>Counter again:";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Matts first true MVC app</title>
    </head>
    <body>
        <?php
            echo $myModelView->showAll();
        ?>
    </body>
</html>
