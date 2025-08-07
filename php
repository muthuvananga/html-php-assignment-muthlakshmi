1 <?php
$capital = 67;
print("Variable capital is $capital");
print("Variable CaPiTaL is $CaPiTaL");
?>
output:
Variable capital is 67
Warning: Undefined variable $CaPiTaL in /tmp/MCZ89kyPuF/main.php on line 4
Variable CaPiTaL is 

=== Code Execution Successful ===

2<?php
// Print the top header row
for ($i = 1; $i <= 3; $i++) {
    echo "$i ";
}
echo "\n";

// Print the division table rows
for ($i = 1; $i <= 3; $i++) {
    echo "$i "; // Row header
    for ($j = 1; $j <= 3; $j++) {
        $result = $i / $j;
        // Round to 2 decimal places and remove trailing zeros
        $formatted = rtrim(rtrim(number_format($result, 2, '.', ''), '0'), '.');
        echo "$formatted ";
    }
    echo "\n";
}
?>

output:
1 2 3 
1 1 0.5 0.33 
2 2 1 0.67 
3 3 1.5 1 


=== Code Execution Successful ===
