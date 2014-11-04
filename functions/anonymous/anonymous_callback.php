<?php require_once '../../includes/header.php'; ?>
<pre>
<?php
echo "Using array_map() to run a callback function on each element in an array<hr>";

// Create a regular callback function...
function nameToGreeting( $name ) {
    return "Hello " . ucfirst( $name ) . "!";
}

// ...then map the callback function to elements in an array.
$names = array( "fred", "mary", "sally" );
print_r( array_map( nameToGreeting, $names ) );     //Notice:  Use of undefined constant nameToGreeting - assumed 'nameToGreeting'

// A neater way:
// Map an anonymous callback function to elements in an array.
print_r ( array_map( function( $name ) {
    return "Hello " . ucfirst( $name ) . "!";
}, $names ) );

echo "Custom array sorting with usort()<hr>";
$people = array(
    array( "name" => "Fred", "age" => 39 ),
    array( "name" => "Sally", "age" => 23 ),
    array( "name" => "Mary", "age" => 46 )
);
usort( $people, function( $personA, $personB ) {
    return ( $personA["age"] < $personB["age"] ) ? -1 : 1;
} );

print_r( $people );

?>
</pre>
<?php require_once '../../includes/footer.php'; ?>

