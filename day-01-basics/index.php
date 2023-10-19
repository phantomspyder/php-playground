<?php
    # Print Hello
    echo 'Hello';
?>

<?= ' World!' ?>

<br />
<? echo 'Short tags are not recommended' ?>


<p> This is a normal html content which will be ignored by the Php parser </p>
<?php echo '...and this is a php code block' ?>

<?php
    /*
        The code belwo will print the Hello World! message.
        It demonstrates the use of a semicolon to end a statement
    */
    echo "<br />";
    echo 'H';
    echo 'e';
    echo 'l';
    echo 'l';
    echo 'o';
    echo ' ';
    // the last statment does not need to end with a semicolon
    echo 'World!'
?>