<?php // Part 1
echo ' <h1> Answer Part1:<br></h1>';
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>" . $color . "</li>";
}
echo "</ul>";
?>

<?php // Part 2
echo ' <h1> Answer Part2:<br></h1>';
$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

echo "The capital of Netherlands is $cities[Netherlands] <br>";
echo "The capital of Greece is $cities[Greece] <br>";
echo "The capital of Germany is $cities[Germany] <br>";
?>

<?php // Part 3
echo ' <h1> Answer Part3:<br></h1>';
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo "$color[4]";
?>

<?php // Part 4
echo ' <h1> Answer Part4:<br></h1>';
$array = [1, 2, 3, 4, 5];
$position;
$item;

function insertAtPosition($array, $item, $position)
{
    // Check if the position is within the array bounds
    if ($position < 0 || $position > count($array)) {
        return "Position out of bounds";
    }

    // Insert the item into the array at the specified position
    array_splice($array, $position, 0, $item);

    return $array;
}

// Example usage
$array = array("apple", "banana", "cherry");
$item = "orange";
$position = 1;
$newArray = insertAtPosition($array, $item, $position);

print_r($newArray);
?>

<?php // Part 5
echo ' <h1> Answer Part5:<br></h1>';
function insertItem($array, $location, $newItem)
{
    array_splice($array, $location - 1, 0, $newItem);
    return $array;
}

// Sample Input
$array = [1, 2, 3, 4, 5];
$location = 4;
$newItem = '$';

// Insert the new item
$result = insertItem($array, $location, $newItem);

// Output the result
echo implode(" ", $result);
?>

<?php // Part 6
echo ' <h1> Answer Part6:<br></h1>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the array by key in ascending order
ksort($fruits);

// Output the sorted array
foreach ($fruits as $key => $value) {
    echo "$key = $value" . "<br>";
}
?>

<?php // Part 7
echo ' <h1> Answer Part7:<br></h1>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Merge the arrays
$result = array_merge($array1, $array2);

// Output each element on a new line
foreach ($result as $key => $value) {
    echo "$key = $value" . "<br>";
}
?>

<?php // Part 8
echo ' <h1> Answer Part8:<br></h1>';
function convertToUpper($array)
{
    return array_map('strtoupper', $array);
}

// Sample Input
$colors = array("red", "blue", "white", "yellow");

// Convert to uppercase
$result = convertToUpper($colors);

// Output the result
echo "Array" . "<br>";
echo "(" . "<br>";
foreach ($result as $key => $value) {
    echo "    [$key] => $value" . "<br>";
}
echo ")" . "<br>";
?>

<?php // Part 9
echo ' <h1> Answer Part9:<br></h1>';
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 3; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Sample Input
$number = 3;

if (isPrime($number)) {
    echo "$number is a prime number\n";
} else {
    echo "$number is not a prime number\n";
}
?>

<?php // Part 10
echo ' <h1> Answer Part10:<br></h1>';
$input = "remove";

// Function to reverse the string
function reverseString($str) {
    return strrev($str);
}

// Reverse the input string
$output = reverseString($input);

// Output the result
echo $output;
?>

<?php // Part 12
echo ' <h1> Answer Part12:<br></h1>';
function isArmstrong($number)
{
    $sum = 0;
    $temp = $number;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int) ($temp / 10);
    }
    return $sum == $number;
}

// Sample Input
$number = 407;

if (isArmstrong($number)) {
    echo "$number is an Armstrong Number\n";
} else {
    echo "$number is not an Armstrong Number\n";
}
?>

<?php // Part 13
echo ' <h1> Answer Part13:<br></h1>';
function isPalindrome($string)
{
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedString = preg_replace("/[^A-Za-z0-9]/", "", $string);
    $cleanedString = strtolower($cleanedString);

    // Check if the cleaned string is equal to its reverse
    return $cleanedString == strrev($cleanedString);
}

// Sample Input
$input = $_POST["palindrome"];

if (isPalindrome($input)) {
    echo "Yes, it is a palindrome\n";
} else {
    echo "No, it is not a palindrome\n";
}
?>

<?php // Part 14
echo ' <h1> Answer Part14:<br></h1>';
function removeDuplicates($array)
{
    return array_unique($array);
}

// Sample Input
$array1 = array(2, 4, 7, 4, 8, 4);
print_r($array1);
echo "<br>";
// Remove duplicates
$result = removeDuplicates($array1);

// Output the result
print_r($result);
?>

<?php // Part 15
echo ' <h1> Answer Part15:<br></h1>';
function checkSum($firstInteger, $secondInteger)
{
    $sum = $firstInteger + $secondInteger;
    if ($sum == 30) {
        return $sum;
    } else {
        return false;
    }
}

// Sample Input
$firstInteger = $_POST["num1"];
$secondInteger = $_POST["num2"];

// Check the sum and output the result
$result = checkSum($firstInteger, $secondInteger);
if ($result === false) {
    echo 'false';
} else {
    echo $result;
}
?>

<?php // Part 16
echo ' <h1> Answer Part16:<br></h1>';
function isMultipleOfThree($number)
{
    return $number % 3 == 0;
}

// Sample Input
$number = $_POST["num1"];

// Check if the number is a multiple of 3 and output the result
if (isMultipleOfThree($number)) {
    echo 'true';
} else {
    echo 'false';
}
?>
<?php // Part17
echo '<h1> Answer Part17:</h1>';

function isInRange($number)
{
    return $number >= 20 && $number <= 50;
}

// Sample Input
$number = 50;

// Check if the number is in the range and output the result
if (isInRange($number)) {
    echo 'true';
} else {
    echo 'false';
}
?>

<?php // Part18
echo '<h1> Answer Part18:</h1>';

function findLargest($num1, $num2, $num3)
{
    return max($num1, $num2, $num3);
}

// Sample Input
$numbers = [1, 5, 9];
print_r($numbers);
echo "<br>";
$largest = findLargest($numbers[0], $numbers[1], $numbers[2]);

// Output the result
echo $largest;
?>

<?php // Part19
echo '<h1> Answer Part19:</h1>';

function calculateElectricityBill($units)
{
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = 50 * 2.50 + ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } else {
        $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }
    return $bill;
}

// Sample Input
$units = 300;

// Calculate the bill and output the result
$bill = calculateElectricityBill($units);
echo "The monthly electricity bill for $units units is $bill JOD\n";
?>

<?php // Part20
echo '<h1> Answer Part20:</h1>';

function calculator($num1, $num2, $operation)
{
    switch ($operation) {
        case 'addition':
            return $num1 + $num2;
        case 'subtraction':
            return $num1 - $num2;
        case 'multiplication':
            return $num1 * $num2;
        case 'division':
            if ($num2 == 0) {
                return 'Error: Division by zero';
            }
            return $num1 / $num2;
        default:
            return 'Invalid operation';
    }
}

// Sample Inputs
$num1 = 10;
$num2 = 5;
$operation = 'addition'; // Change to 'subtraction', 'multiplication', 'division' to test different operations

// Calculate the result
$result = calculator($num1, $num2, $operation);

// Output the result
echo "The result of $operation between $num1 and $num2 is: $result\n";
?>

<?php // Part21
echo '<h1> Answer Part21:</h1>';

$age = $_POST["age"]; // Sample age
if ($age > 18) {
    echo "You can vote\n";
} else {
    echo "You can't vote\n";
}
?>

<?php // Part22
echo '<h1> Answer Part22:</h1>';

function checkNumber($number)
{
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $result = checkNumber($number);
    echo $result;
}
?>

<?php // Part23
echo '<h1> Answer Part23:</h1>';

function calculateGrade($scores)
{
    $average = array_sum($scores) / count($scores);

    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

// Sample Input
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
print_r($scores);
// Calculate the grade
$grade = calculateGrade($scores);

// Output the result
echo "The grade is: $grade\n";
?>

<?php // Part24
echo '<h1> Answer Part24:</h1>';

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
?>

<?php // Part25
echo '<h1> Answer Part25:</h1>';

$total = 0;

// Use a for loop to add all integers from 0 to 30
for ($i = 0; $i <= 30; $i++) {
    echo "$i ";
    $total += $i;
}
echo "<br>";
// Display the total
echo "Total: " . $total;
?>

<?php // Part26
echo '<h1> Answer Part26:</h1>';

$rows = 5;
$cols = 5;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($i == 0) {
            echo 'A ';
        } elseif ($i == 1) {
            echo $j < 3 ? 'A ' : 'B ';
        } elseif ($i == 2) {
            echo $j < 2 ? 'A ' : 'C ';
        } elseif ($i == 3) {
            echo $j == 0 ? 'A ' : 'D ';
        } else {
            echo 'E ';
        }
    }
    echo "<br>";
}
?>

<?php // Part27
echo '<h1> Answer Part27:</h1>';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        if ($i == 0) {
            echo 1;
        } elseif ($i == 1) {
            echo $j < 3 ? 1 : 2;
        } elseif ($i == 2) {
            echo $j < 2 ? 1 : 3;
        } elseif ($i == 3) {
            echo $j == 0 ? 1 : 4;
        } else {
            echo 5;
        }
    }
    echo "<br>";
}
?>

<?php // Part28
echo '<h1> Answer Part28:</h1>';

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo $j == $i ? $j : 0;
    }
    echo "<br>";
}
?>
<?php
echo '<h1> Answer Part29:</h1>';

function calculateFactorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;  // Multiply factorial by the current number
    }
    return $factorial;
}

// Sample Input
$number = 5;

// Calculate the factorial and output the result
$result = calculateFactorial($number);
echo "$result";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Age Form</title>
</head>

<body>
<h1> Answer Part30:</h1>

    <form action="index.php" method="post">
        <label for="age">Enter a number to calc the factorial?</label>
        <input type="number" id="fac" name="fac" required>
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php

// Sample input
$number = $_POST['fac'];

// Initialize the factorial to 1
$factorial = 1;

// Calculate the factorial using a for loop
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

// Print the result
echo "The factorial of $number is $factorial. <br>";
echo "<br> ------------------------------------------------------------------------------------------------------<br>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 3px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <?php
            $cols = 5;
            $rows = 6;
            $temp_sum = 0;
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                $temp_sum = $j * $i;
                echo "<td>" . "($i x $j)" ." = ". $temp_sum . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>

<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Manipulation</title>
    <script>
        function updateStringManipulation(action) {
            document.getElementById("action").value = action;
            document.getElementById("stringForm").submit();
        }
    </script>
</head>
<body>
    <form action="index.php" method="post" id="stringForm">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" value="<?php echo isset($_POST['inputString']) ? $_POST['inputString'] : ''; ?>" required>
        <input type="hidden" id="action" name="action">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST["inputString"];
        $action = $_POST["action"];

        echo "<p>Original String: $inputString</p>";

        switch ($action) {
            case 'uppercase':
                echo "<p>Uppercase: " . strtoupper($inputString) . "</p>";
                break;
            case 'lowercase':
                echo "<p>Lowercase: " . strtolower($inputString) . "</p>";
                break;
            case 'firstUppercase':
                echo "<p>First letter uppercase: " . ucfirst($inputString) . "</p>";
                break;
            case 'titleCase':
                echo "<p>Title case: " . ucwords($inputString) . "</p>";
                break;
        }
    }
    ?>

    <button onclick="updateStringManipulation('uppercase')">Uppercase</button>
    <button onclick="updateStringManipulation('lowercase')">Lowercase</button>
    <button onclick="updateStringManipulation('firstUppercase')">First letter uppercase</button>
    <button onclick="updateStringManipulation('titleCase')">Title case</button>
</body>
</html>
<?php  echo "<br> ------------------------------------------------------------------------------------------------------<br>";?>
<?php
function formatTime($numericString) {
    // Ensure input is exactly 6 digits
    if (strlen($numericString) == 6) {
        return substr($numericString, 0, 2) . ":" . substr($numericString, 2, 2) . ":" . substr($numericString, 4, 2);
    } else {
        return "Please enter a 6-digit numeric string.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="time">Enter numeric string (6 characters)</label>
        <input type="text" name="numericString">
        <button type="submit" onclick="formatTime($_POST['numericString'])">enter</button>
    </form>    
</body>
</html>



<?php 
// Example usage
$inputString = $_POST["numericString"];
echo "Original String: $inputString" . "<br>";
echo "Formatted Time: " . formatTime($inputString) . "<br>";
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
<form action="index.php" method="post">
        <label for="time">Enter a Sentence</label>
        <input type="text" name="String">
        <br>
        <label for="time">Enter a word</label>
        <input type="text" name="word" style="marginL:3px;">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>

<?php
$input = $_POST["String"];
$sampleWord = $_POST["word"];
function checkWordInString($input, $sampleWord) {
    // Case-insensitive search for the word in the input
    if (stripos($input, $sampleWord) !== false) {
        return "Word Found!";
    } else {
        return "Word Not Found!";
    }
}
 // Use the function to check the word
 $result = checkWordInString($input, $sampleWord);
 echo " Sentence : ". $input ."<br>";
 echo " word : ". $sampleWord ."<br>";
 echo "<p>Result: $result</p>";
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
<form action="index.php" method="post">
        <label for="time">Enter a url to extract the file name :</label>
        <input type="text" name="url">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>

<?php
// Sample URL
$url = $_POST['url'];

// Parse the URL to get the path component
$parsed_url = parse_url($url, PHP_URL_PATH);

// Extract the file name from the path component
$file_name = basename($parsed_url);

// Output the file name
echo "$url" . "<br>";

echo "File Name:" . $file_name;
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
<form action="index.php" method="post">
        <label for="time">Enter your email:</label>
        <input type="text" name="email">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>

<?php
// Sample email address
$email = $_POST["email"];

// Extract the username from the email address
$username = strstr($email, '@', true);

// Output the username
echo "suggested username:" . "   ". $username;
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
<form action="index.php" method="post">
        <label for="time">Enter a string in Email format:</label>
        <input type="text" name="mail">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>
<?php
// Sample string
$string = $_POST["mail"];

// Get the last three characters from the string
$last_three_chars = substr($string, -3);

// Output the last three characters
echo $last_three_chars;
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
<form action="index.php" method="post">
        <label for="p">enter a random string to make a strong password out of it:</label>
        <input type="text" name="p">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>

<?php
// Given string
$characters = $_POST['p'];
"1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
// Shuffle the string
$shuffled_string = str_shuffle($characters);

// Length of the desired password
$password_length = 8; // You can change this to your desired password length

// Extract the password from the shuffled string
$password = substr($shuffled_string, 0, $password_length);

// Output the random password
echo "Recommended Password : ". $password;
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
<form action="index.php" method="post">
        <label for="sen">enter a sentence:</label>
        <input type="text" name="sen">
        <br>
        <label for="reword">enter a word you want to replace in the start of the sentence:</label>
        <input type="text" name="reword">
        <br>
        <button type="submit">enter</button>
    </form>    
</body>
</html>


<?php

// Sample sentence and new word
$sentence = $_POST["sen"];
$new_word = $_POST["reword"];
'That new trainee is so genius.';
'Our';
// Split the sentence into an array of words
$words = explode(' ', $sentence);

// Replace the first word with the new word
$words[0] = $new_word;

// Join the array of words back into a sentence
$new_sentence = implode(' ', $words);

// Output the new sentence
echo 'your new string : '. $new_sentence;
?>





