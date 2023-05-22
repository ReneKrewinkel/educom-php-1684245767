# PHP Basis module

Voor deze module hebben we helaas nog geen online (eigen) materiaal. Maak hiervoor gebruik van de tutorial op W3Schools: https://www.w3schools.com/php/

**LET OP!!**
* De installatie hoef je niet uit te voeren, aangezien deze al in je webserver is opgenomen. 
* Neem voor alle opdrachten je code op in deze repository. 

***Notes***

**Syntax**

A php script is called:
```
<?php
// PHP code goes here
?> 
```

In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive. 

ex:
```
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>
```
(all have the same output)


**Variables**

PHP does not have a command for declaring variables. IT it created the moment you assign it a value

ex:
```
 <?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?> 
```
A varaible starts wit the "$" sign followed by the name of the variable

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

*Variable Scope*

Three different variable scopes
* local: A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
* global: A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
* static: Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job

The global keyword:
The global keyword is used to access a global variable from within a function

ex:
```
function myTest() {
  global $x, $y;
  $y = $x + $y;
}
```

PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

ex:
```
function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
```

Static ex:
```
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}
```

PHP Constrants:
The value cannot be changed during the script. Unlike variables, constants are automatically global across the entire script. 

```
define(name, value, case-insensitive)
```

**Echo and Print**
echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

**Data types**
All data types: 
    String : "string"
    Integer: 21
    Float (floating point numbers - also called double): 10.32
    Boolean: true/false
    Array: array("Volvo","BMW","Toyota") (var_dump($cars) - returns the data type and value)
    Object: 
```
     <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
    ?> 
```
    NULL: null
    Resource: storing of a reference to functions and resources external to PHP (ex:  database call)

**Super Globals**

variables are:
* $GLOBALS: is used to access global variables from anywhere in the PHP script
* $_SERVER: holds information about headers, paths, and script locations
* $_REQUEST: is used to collect data after submitting an HTML form
* $_POST: is used to collect form data after submitting an HTML form with method="post"
* $_GET: is used to collect form data after submitting an HTML form with method="get"
* $_FILES
* $_ENV
* $_COOKIE
* $_SESSION


***PHP Forms***

ex:
```
 <html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 
```
welcome.php refers to the php the data is sent for processing

```
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html> 
```

**Form validation**

How to make forms more secure and not allow any exploiting. 

```
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
```
$_SERVER["PHP_SELF"] - in this case it sned the for date to page itself, instead of jumping to a different page. 

htmlspecialchars() - function converts special characters to HTML entities. This prevents the exploiting the code by injectiong html or javascript code (Cross-site Scripting)

Now for the form data itself:
```
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
```



