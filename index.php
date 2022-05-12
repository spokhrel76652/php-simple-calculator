
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
  </head>
  <body>

  <div class="container">
  <center>
    <h1>Simple Calculator</h1><br>
    <form action="index.php" method="post">
    <input type="number" step="0.0000001" name="num1" placeholder="Enter First Number"><br><br>
   <input type="number" step="0.0000001" name="num2" placeholder="Enter Second Number"><br><br>
   <div class="select-style">
       <select name  = "operator">
           <option value="add">Addition</option>
           <option value="sub">Subtraction</option>
           <option value="mul">Multiply</option>
           <option value="div">Divide</option>
       </select>
   </div>
<br>
<input type="submit" value="Submit" class="app-form-button">

   
    </form>
    

<br><p class="answer" style="font-size:40px">
Answer:
<?php

    //if(isset($_POST['submit'])){
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator){
            case "add":
                $result = $num1 + $num2;
                echo $result;
                break;

            case "sub":
                $result = $num1 - $num2;
                echo $result;
                break;

            case "mul":
                $result = $num1 * $num2;
                echo $result;
                break;

            case "div":
                $result = $num1 / $num2;
                echo $result;
                break;

            default:
                echo "Invalid Operator";
    }
 //}
    ?>
    </p>
  </div>
</div>
</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>