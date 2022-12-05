<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="calculator.css">
  <title>Basic Calculator</title>
</head>
<body>

  <section class="primary">
    <center><h2>Do your basic calculations</h2></center>
  </section>
  
  <section class="secondary">
    <div class="wrapper">
      <form action="calculator.php" method="get">
        <label for="first_number">First Number: </label>
        <input type="text" name="num1" id="first_number" placeholder="First number..."> <br> <br>
        <label for="second_number">Second Number: </label>
        <input type="text" name="num2" id="second_number" placeholder="Second number..."> <br> <br>
        <select name="operator">
          <option value="none">Operator</option>
          <option value="add">Add</option>
          <option value="subtract">Subtract</option>
          <option value="multiply">Multiply</option>
          <option value="devide">Devide</option>
        </select>
        <button type="submit" name="submit">Calculate</button>
      </form>

      <hr>

      <p>Your answer is </p>
      <?php

        if(isset($_GET['submit'])){
          $num1 = $_GET['num1'];
          $num2 = $_GET['num2'];
          $operator = $_GET['operator'];

          switch ($operator){
            case "none": echo "Choose a valid operator"; break;
            case "add": echo $num1 + $num2;break;
            case "subtract": echo $num1 - $num2;break;
            case "multiply": echo $num1 * $num2;break;
            case "devide": echo $num1 / $num2;break;
          }

        }else{
          echo "Something went wrong";
        }

      ?>
    </div>
  </section>
</body>
</html>