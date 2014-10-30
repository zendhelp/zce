<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php

echo "http://stackoverflow.com/questions/17483806/what-does-yield-mean-in-php\n";
echo "http://cogitolearning.co.uk/?p=821\n";

echo "you need to do things simple (or simple things)\n";
echo "you need to generate BIG amounts of data - saving memory\n";
echo "you need to generate sequence, which depends on intermediate values\n";
echo "you need to improve performance\n <hr>";

function xrange($start, $limit, $step = 1) {
  if ($start < $limit) {
    if ($step <= 0) {
      throw new LogicException('Step must be +ve');
    }

    for ($i = $start; $i <= $limit; $i += $step) {
      yield $i;
    }
  } else {
    if ($step >= 0) {
      throw new LogicException('Step must be -ve');
    }

    for ($i = $start; $i >= $limit; $i += $step) {
      yield $i;
    }
  }
}

/*
 * Note that both range() and xrange() result in the same
 * output below.
 */

echo 'Single digit odd numbers from range():  ';
foreach (range(1, 9, 2) as $number) {
  echo "$number ";
}
echo "\n";

echo 'Single digit odd numbers from xrange(): ';
foreach (xrange(1, 9, 2) as $number) {
  echo "$number ";
}

echo "<hr>";
function collatz($val) {
  yield $val;

  while ($val != 1) {
    if ($val%2 == 0) $val /= 2;
    else $val = 3*$val + 1;

    yield $val;
  }
}
foreach (collatz(11) as $c) {
  echo $c," ";
}
//11 34 17 52 26 13 40 20 10 5 16 8 4 2 1


echo "Note how the output values are calculated on the fly and not stored in any array<hr>";
function to_html_list($input) {
  foreach ($input as $val) {
    yield "<li>".$val."</li>";
  }
}

$arr = array("lorem","ipsum","dolor");

foreach (to_html_list($arr) as $val) {
  echo $val,"\n";
}

//This will write out
/*
<li>lorem</li>
<li>ipsum</li>
<li>dolor</li>
 */

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
