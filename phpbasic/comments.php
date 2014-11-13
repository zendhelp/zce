<?php
echo 'Comment';
//will not printed ?>

<?php
echo 'This is a test'; // This is a one-line c++ style comment
/* This is a multi line comment
   yet another line of comment */
echo 'This is yet another test';
echo 'One Final Test'; # This is a one-line shell-style comment
?>


<?php
// This is a single line comment

# This is also a single line comment
# New line comment ?> this line will not printed

<?php
/*
This is a multi-line
comment
*/

/* this is also
commented */ but this not - parse error T_STRING */
?>

<?php
//<?xml version="1.0" encoding="utf-8"?>
?>


<?php
/*
 * <?xml version="1.0" encoding="utf-8"?>
 */
?>