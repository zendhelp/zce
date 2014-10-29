<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
// This is valid:
declare(ticks=1);

// This is invalid:
const TICK_VALUE = 1;
//declare(ticks=TICK_VALUE);


// you can use this:
declare(ticks=1) {
// entire script here
}

// or you can use this:
declare(ticks=1);
// entire script here





declare(ticks=1);
// A function called on each tick event
function tick_handler()
{
  echo "tick_handler() called\n";
}
register_tick_function('tick_handler');

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>