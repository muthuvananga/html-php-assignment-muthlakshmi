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
4 <?php
$animal = "antelope";
$animal_heads = 1;
$animal_legs = 4;

echo "The $animal has $animal_heads head(s).";
echo "The $animal has $animal_legs leg(s).";
?>
output:
The antelope has 1 head(s).The antelope has 4 leg(s).

=== Code Execution Successful ===

5.<?php
// You can manually set these values here:
$price1 = 100.50;  // Price of item 1
$qty1 = 2;         // Quantity of item 1

$price2 = 50.75;   // Price of item 2
$qty2 = 3;         // Quantity of item 2

$price3 = 20.00;   // Price of item 3
$qty3 = 5;         // Quantity of item 3

// Calculate subtotal
$subtotal = ($price1 * $qty1) + ($price2 * $qty2) + ($price3 * $qty3);

// Calculate tax (10%)
$tax = $subtotal * 0.10;

// Calculate total cost
$total = $subtotal + $tax;

// Display results
echo "Subtotal: ₹" . number_format($subtotal, 2) . "\n";
echo "Tax (10%): ₹" . number_format($tax, 2) . "\n";
echo "Total Cost: ₹" . number_format($total, 2) . "\n";
?>
output:
Subtotal: ₹453.25
Tax (10%): ₹45.33
Total Cost: ₹498.58


=== Code Execution Successful ===
