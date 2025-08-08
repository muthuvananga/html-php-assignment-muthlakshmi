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

6.Methods to Pass Information Between Pages in PHP
GET Method

Data is sent appended to the URL as query parameters.

It is visible to the user and can be bookmarked or shared.

Suitable for non-sensitive data and limited data size.

Accessed using the $_GET superglobal array.

POST Method

Data is sent through the HTTP request body, not visible in the URL.

Suitable for sensitive or large amounts of data.

Commonly used with HTML forms.

Accessed using the $_POST superglobal array.

SESSION Method

Data is stored on the server and linked to a user via a unique session ID stored in a cookie.

Allows persistent data across multiple pages and requests.

Ideal for user authentication and maintaining user state.

Accessed using the $_SESSION superglobal array after starting the session with session_start().

Cookies

Data is stored on the client’s browser and sent with every request to the server.

Can persist between browser sessions based on expiration time.

Useful for storing small pieces of data like preferences.

Accessed via the $_COOKIE superglobal array.

Hidden Form Fields

Data is embedded inside forms in hidden input fields.

Sent with POST or GET requests but not visible to the user.

Useful for passing data without exposing it in URLs.

8.
def deal():
    # Prices and sizes
    price_a = 25
    size_a = 11

    price_b = 23
    size_b = 9

    # Calculate cost per unit
    unit_price_a = price_a / size_a
    unit_price_b = price_b / size_b

    print(f"Drink A: Rs.{price_a} for {size_a} units (Rs.{unit_price_a:.2f} per unit)")
    print(f"Drink B: Rs.{price_b} for {size_b} units (Rs.{unit_price_b:.2f} per unit)")

    # Compare and print better deal
    if unit_price_a < unit_price_b:
        print("Drink A is the better deal.")
    elif unit_price_b < unit_price_a:
        print("Drink B is the better deal.")
    else:
        print("Both drinks offer the same value.")

# Call the function
deal()

output:Drink A: Rs.25 for 11 units (Rs.2.27 per unit)
Drink B: Rs.23 for 9 units (Rs.2.56 per unit)
Drink A is the better deal.

=== Code Execution Successful ===

9.<?php
$drink_this = "this";
$that = "that";
$the_other = 2.2;
$not_set = "";  // This prevents the warning

print("$drink_this,$not_set,$that+$the_other");
?>

output:
        this,,that+2.2

=== Code Execution Successful ===

10.
        <?php
// Number of students
$num_students = 3;

// Sample input marks (you can change these)
$marks_array = array(92, 75, 43); // Example: Student 1 = 92, Student 2 = 75, Student 3 = 43

for ($i = 0; $i < $num_students; $i++) {
    $marks = $marks_array[$i];

    if ($marks >= 90 && $marks <= 100) {
        $grade = "A+";
    } elseif ($marks >= 80) {
        $grade = "A";
    } elseif ($marks >= 70) {
        $grade = "B";
    } elseif ($marks >= 60) {
        $grade = "C";
    } elseif ($marks >= 50) {
        $grade = "D";
    } elseif ($marks >= 0) {
        $grade = "Fail";
    } else {
        $grade = "Invalid Marks";
    }

    echo "Student " . ($i + 1) . ": Marks = $marks, Grade = $grade\n";
}
?>
output:
        Student 1: Marks = 92, Grade = A+
Student 2: Marks = 75, Grade = B
Student 3: Marks = 43, Grade = Fail


=== Code Execution Successful ===

11.
    <?php
// Get current day number (0 for Sunday, 6 for Saturday)
$dayNumber = date("w");

echo "Today is: ";

switch ($dayNumber) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Invalid day";
}
?>

output:
        Today is: Friday

=== Code Execution Successful ===
