<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>
</pre>
<?php require_once '../../includes/footer.php'; ?>