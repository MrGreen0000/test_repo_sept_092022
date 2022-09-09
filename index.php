<?php
//This function display php errors on the browser
error_reporting(E_ALL);
ini_set("display_errors", 1);


?>

<?php
require 'Form.php';

$form = new Form($_POST);
?>

<form action="#" method="post">
    <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();


    ?>
</form>



