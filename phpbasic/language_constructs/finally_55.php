<?php require_once '../../includes/header.php'; ?>
  <pre>
<?php

echo "Throwing an Exception<hr>";

function inverse($x) {
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1/$x;
}

try {
  echo inverse(5) . "\n";
  echo inverse(0) . "\n";
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";   //Caught exception: Division by zero.
}

// Continue execution
echo "Hello World\n";




echo "Exception handling with a finally block<hr>";
function inverse2($x) {
  if (!$x) {
    throw new Exception('Division by zero.');
  }
  return 1/$x;
}

try {
  echo inverse2(5) . "\n";
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
  echo "First finally.\n";
}

try {
  echo inverse2(0) . "\n";
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
  echo "Second finally.\n";
}

// Continue execution
echo "Hello World\n";



echo "Nested Exception<hr>";
class MyException extends Exception { }

class Test {
  public function testing() {
    try {
      try {
        throw new MyException('foo!');
      } catch (MyException $e) {
        // rethrow it
        echo $e->getMessage();      //foo!
        throw $e;
      }
    } catch (Exception $e) {
      var_dump($e->getMessage());   //string(4) "foo!"
    }
  }
}

$foo = new Test;
$foo->testing();



?>
</pre>
<?php require_once '../../includes/footer.php'; ?>
