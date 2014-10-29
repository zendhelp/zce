<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Remember, when using require that it is a statement, not a function. <hr>";
require('somefile.php');    //Warning and Fatal error:  require(): Failed opening required (STOP EXECUTE SCRIPT)
require 'somefile.php';     ////Warning and Fatal error:  require(): Failed opening required (STOP EXECUTE SCRIPT)

echo "require\n";

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>