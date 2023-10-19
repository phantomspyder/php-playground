# 1. Tags #
* Php parser looks for the `<?php` tag for the starting of the php code and `?>` for the end of the php code.
```php
<?php
    echo 'Hello World!'
?>
```
* You can use short echo tags like below for the example above.
```php
<?= 'Hello World!' ?>
```
* Short tags i.e. `<? ... ?>` are the third option. It is recommended not to use them to maximize compatibility.

* If the file contains only the php code, the closing tag can be omitted. This is useful to avoid accidental issues where a whitespace or a new line character will cause PHP to start output buffering.

```php
<?php
    // Your code goes here. Please not that there is no closing tag in this file.
```

# 2. Mixing PHP with HTML #
* You can mix html in the php file with the php code using the php tags in the section above. Anything outside the php tags will be ignored by the Php parser and will be rendered as the normal html.

```php
<p> This is a normal html content which will be ignored by the Php parser </p>
<?php echo '...and this is a php code block' ?>
```

# 3. Instruction Seperation
* Php requires every instruction to be terminated by a semicolon. Exception to this requirment is the last statment before the php closing tag.
```php
<?php
    echo 'H';
    echo 'e';
    echo 'l';
    echo 'l';
    echo 'o';
    echo ' ';

    echo 'World'
?>
```
# 4. Comments
* Php supports single line comments with `//` and `#`
```php
<?php
    # A single line comment

    // Another single line comment
?>
```
* Php supports multiline comments with `/* */`
```php
<?php
    /* This is a multiline
    comment */
?>
```