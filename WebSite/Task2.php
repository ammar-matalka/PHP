<?php
// Sample string
$string = "Twinkle, twinkle, little star.";

// Split the string into an array using comma as delimiter
$array = explode(',', $string);

// Output the array using var_dump
echo "the sample string : " . $string . "<br>";
var_dump($array);
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="ltr1">enter a letter:</label>
        <input type="text" name="ltr1">
        <br>
        <label for="ltr2">enter another letter:</label>
        <input type="text" name="ltr2">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>


<?php
// Function to get the next letter
function getNextLetter($char) {
    // If the character is 'z', return 'a'
    if ($char === 'z') {
        return 'a';
    } elseif ($char === 'Z') { // If the character is 'Z', return 'A'
        return 'A';
    }
    
    // Convert the character to its ASCII value, add 1, and convert back to character
    $nextChar = chr(ord($char) + 1);
    
    return $nextChar;
}

// Sample characters
$char1 = $_POST["ltr1"];
$char2 = $_POST["ltr2"];

// Output the next letters
echo "the letter you entered : $char1 / ". " the next letter = ". getNextLetter($char1) . "<br>"; // Expected output: 'b'
echo  "the letter you entered : $char2 / ". " the next letter = ". getNextLetter($char2) . "<br>"; // Expected output: 'a'
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="f">enter a string sentence:</label>
        <input type="text" name="f">
        <br>
        <label for="s">enter the string you want to add</label>
        <input type="text" name="s">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
// Original string
$original_string = $_POST['f'];

// String to insert
$insert_string = $_POST['s'];

// Split the original string into an array of words
$words = explode(' ', $original_string);

// Insert the new string at the specified position
array_splice($words, 1, 0, $insert_string);

// Join the array of words back into a string
$new_string = implode(' ', $words);

// Output the new string
echo $new_string;
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="nmb">enter a number and all '0' characters will be removed :</label>
        <input type="text" name="nmb">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
// Original string
$original_string = $_POST['nmb'];

// Remove leading zeroes
$number_without_zeroes = ltrim($original_string, '0');

// Output the number without zeroes
echo $number_without_zeroes;
?>


<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>
<?php
// Original string
$original_string = 'The quick brown fox jumps over the lazy dog---';
echo "the string before conversion :".$original_string."<br>";
// Remove trailing dashes
$string_without_trailing_dashes = rtrim($original_string, '-');

// Output the modified string
echo $string_without_trailing_dashes;
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<?php
// Sample string
$string = 'The quick brown fox jumps over the lazy dog';
echo "before :" . $string ."<br>";
// Split the string into an array of words
$words = explode(' ', $string);

// Select the first 5 words
$first_five_words = array_slice($words, 0, 5);

// Join the array of words back into a string
$first_five_words_string = implode(' ', $first_five_words);

// Output the result
echo "after :". $first_five_words_string;
?>


<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="number">enter any number with comma's:</label>
        <input type="text" name="number">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
// Sample string
$numeric_string = $_POST["number"];
echo "the number you entered :".$numeric_string. "<br>";
// Remove commas from the string
$string_without_commas = str_replace(',', '', $numeric_string);

// Output the result
echo "the number after filtering : ".$string_without_commas;
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>



<?php
// Number of terms to display
$n = 10;

// First two terms of the Fibonacci sequence
$first = 0;
$second = 1;

echo "the fibonacci sequence: ";
// Display the first two terms
echo $first . ', ' . $second;

// Calculate and display the remaining terms
for ($i = 2; $i < $n; $i++) {
    $next = $first + $second;
    echo ', ' . $next;
    $first = $second;
    $second = $next;
}
?>

<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="floyd">Enter number of rows:</label>
        <input type="number" name="floyd">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
function generateFloydTriangle($n) {
    $num = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

// Number of lines to display
$n = $_POST['floyd']; // You can change this value to generate more lines

// Generate and display the Floyd triangle
generateFloydTriangle($n);
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>
<?php
function printPattern($n) {
    // Print the first half of the pattern
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }

    // Print the second half of the pattern
    for ($i = $n - 2; $i >= 0; $i--) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $j) . " ";
        }
        echo "<br>";
    }
}

// Number of lines for the top half of the pattern
$n = 5;

// Print the pattern
printPattern($n);
?>


<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="year">Enter a year to check if its a leap year or not:</label>
        <input type="number" name="year">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Sample input
$year = $_POST['year'];

// Check if the year is a leap year and output the result
if (isLeapYear($year)) {
    echo 'This year is a leap year';
} else {
    echo 'This year is not a leap year';
}
?>

<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="temp">Enter current tempreture in your area :</label>
        <input type="number" name="temp">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>
<?php
// Function to check the season based on temperature
function checkSeason($temperature) {
    if ($temperature < 20) {
        echo 'It is wintertime!';
    } else {
        echo 'It is summertime!';
    }
}

// Sample input
$temperature = $_POST["temp"];

// Call the function with the sample input
checkSeason($temperature);
?>

<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="num1">enter a number</label>
        <input type="number" name="num1">
        <br>
        <label for="num2">enter a second number</label>
        <input type="number" name="num2">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>



<?php

// Sample input
$firstInteger = $_POST['num1'];
$secondInteger =$_POST['num2'];

// Function to calculate the sum or triple sum if values are the same
function calculateSum($firstInteger, $secondInteger) {
    if ($firstInteger === $secondInteger) {
        $sum = ($firstInteger + $secondInteger) * 3;
    } else {
        $sum = $firstInteger + $secondInteger;
    }
    return $sum;
}

// Call the function with the sample input
$result = calculateSum($firstInteger, $secondInteger);
if ($firstInteger === $secondInteger) {
  echo 'the two numbers are duplicates!';
}else{
    echo 'the two numbers are not duplicates!';
}
echo "<br>"."$result";
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<?php
// Loop through numbers between 200 and 250
echo "Numbers that are divisible by 4 from 200 to 250 are :" ."<br>";
for ($i = 200; $i <= 250; $i++) {
    // Check if the number is divisible by 4
    if ($i % 4 == 0) {
        // Display the number
        echo $i;
        
        // Add a comma and space except after the last number
        if ($i != 248) {
            echo ',';
        }
    }
}
?>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="min">enter min:</label>
        <input type="number" name="min">
        <br>
        <label for="max">enter max:</label>
        <input type="number" name="max">
        <br>
        <label for="length">length:</label>
        <input type="number" name="length">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

<?php
// Function to generate unique random numbers
function generateUniqueRandomNumbers($min, $max, $count) {
    if ($max - $min + 1 < $count) {
        return "Range is too small to generate unique numbers.";
    }

    $numbers = range($min, $max);
    shuffle($numbers);

    return array_slice($numbers, 0, $count);
}

// Sample input
$min = $_POST['min'];
$max = $_POST['max'];
$count = $_POST['length'];

// Generate unique random numbers
$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);

// Display the generated numbers
echo "Generate Random Numbers:". implode(' ', $randomNumbers);
?>