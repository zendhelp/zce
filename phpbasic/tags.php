<?php echo 'if you want to serve XHTML or XML documents, do it like this'; ?>

<script language="php">
    echo 'some editors (like FrontPage) don\'t
          like processing instructions';
</script>

<? echo 'this is the simplest, an SGML processing instruction'; ?>
<?= expression ?> This is a shortcut for "<? echo expression ?>"

<% echo 'You may optionally use ASP-style tags'; %>
<%= $variable; %> This is a shortcut for "<% echo $variable; %>"




//Instruction separation
<?php
echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag';

<?php
echo "First line";
echo "Last line"

//The above code throws error as it neither has closing tag nor semicolon ending. So it should be replaced
//with either of the below two

<?php
echo "First line";
echo "Last line" ?>

OR

<?php
echo "First line";
echo "Last line";