<?php
// 1. String Declaration
$string1 = 'Hello, World!';
$string2 = "Welcome to PHP!";

// 2. String Concatenation
$greeting = $string1 . ' ' . $string2;
echo "Greeting: " . $greeting . "\n";  // Output: Hello, World! Welcome to PHP!
echo "<br>";

// 3. String Length
$length = strlen($string1);
echo "Length of string1: " . $length . "\n";  // Output: 13
echo "<br>";

// 4. String Replacement
$newString = str_replace("PHP", "MySQL", $string2);
echo "Replaced String: " . $newString . "\n";  // Output: Welcome to MySQL!
echo "<br>";

// 5. String Position
$position = strpos($string1, "World");
if ($position !== false) {
    echo "Found 'World' at position: " . $position . "\n";  // Output: 7
} else {
    echo "'World' not found.\n";
}
echo "<br>";

// 6. String Case Conversion
$lowerString = strtolower($string1);
$upperString = strtoupper($string2);
echo "Lowercase String: " . $lowerString . "\n";  // Output: hello, world!
echo "Uppercase String: " . $upperString . "\n";  // Output: WELCOME TO PHP!
echo "<br>";

// 7. Trimming Whitespace
$dirtyString = "  Hello, PHP!  ";
$cleanString = trim($dirtyString);
echo "Trimmed String: " . $cleanString . "\n";  // Output: Hello, PHP!
echo "<br>";

// 8. Substring Extraction
$substring = substr($string1, 7, 5); // Extracts "World"
echo "Extracted Substring: " . $substring . "\n";  // Output: World
echo "<br>";

// 9. String Splitting
$splitString = explode(" ", $string1);
echo "Exploded Array: ";
print_r($splitString);  // Output: Array ( [0] => Hello, [1] => World! )
echo "<br>";
?>
