<?php
// Indexed Array
$fruits = array("Apple", "Banana", "Orange");
echo "First Fruit: " . $fruits[0] . "\n";  // Output: Apple
echo "<br>"; // Line break for better display

// Associative Array
$person = array(
    "name" => "Yousuf Naveed",
    "age" => 25,
    "city" => "Karachi"
);
echo "Name: " . $person["name"] . "\n";    // Output: Yousuf Naveed
echo "<br>"; // Line break for better display

// Multidimensional Array
$students = array(
    array("name" => "Yousuf Naveed", "age" => 25, "city" => "Karachi"),
    array("name" => "Muneeb Hassan", "age" => 22, "city" => "Karachi")
);
echo "First Student's Name: " . $students[0]["name"] . "\n";  // Output: Yousuf Naveed
echo "<br>"; // Line break for better display

// Array Methods

// 1. count() - Get the number of elements in an array
echo "Number of fruits: " . count($fruits) . "\n";  // Output: 3
echo "<br>"; // Line break for better display

// 2. array_push() - Add elements to the end of an array
array_push($fruits, "Pineapple");
echo "Fruits after array_push: ";
print_r($fruits);
echo "<br>"; // Line break for better display

// 3. array_pop() - Remove the last element from an array
array_pop($fruits);
echo "Fruits after array_pop: ";
print_r($fruits);
echo "<br>"; // Line break for better display

// 4. array_shift() - Remove the first element from an array
array_shift($fruits);
echo "Fruits after array_shift: ";
print_r($fruits);
echo "<br>"; // Line break for better display

// 5. array_unshift() - Add elements to the beginning of an array
array_unshift($fruits, "Apple");
echo "Fruits after array_unshift: ";
print_r($fruits);
echo "<br>"; // Line break for better display

// 6. in_array() - Check if a value exists in an array
if (in_array("Banana", $fruits)) {
    echo "Banana is in the array.\n";  // Output: Banana is in the array.
} else {
    echo "Banana is not in the array.\n";
}
echo "<br>"; // Line break for better display

// 7. array_merge() - Merge two arrays
$fruits2 = array("Pineapple", "Mango");
$allFruits = array_merge($fruits, $fruits2);
echo "Merged Fruits: ";
print_r($allFruits);
echo "<br>"; // Line break for better display

// 8. sort() - Sort an array in ascending order
sort($fruits);
echo "Fruits after sort: ";
print_r($fruits);
echo "<br>"; // Line break for better display
?>
