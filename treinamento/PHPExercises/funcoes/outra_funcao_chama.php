<?php
/*
Exercicio 6 Function That Calls Another

For this PHP exercise, pull up your script from Functions Ex. #4. The days of the month array is fine as it is. Rewrite the "option" function as "makeOptions", such that it includes all the work of creating the option. It will need to take an array as an argument and iterate over the array key values to produce the options.

Write a second function, "makeSelect", to create the entire select field. This function should call the "makeOptions" function to produce the options. Give the function an error checking action to assure that the variable used for options is actually an array.
*/

  //Cria um array associativo.
  $months=array(
    'January'=>31,
    'February'=>'28 days, if leap year 29',
    'March'=>31,
    'April'=>30,
    'May'=>31,
    'June'=>30,
    'July'=>31,
    'August'=>31,
    'September'=>30,
    'October'=>31,
    'November'=>30,
    'December'=>31
  );
 
?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Function That Calls Another</title>
</head>
 
<body>
<h2>Days in a Month Again<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
    <form method="post" action="outra_funcao_chama.php">
    <p>Please choose a month:</p>
     
    <p />
      <select name='month'>
       <?php
         foreach($months as $k => $v){
            echo "<option value=\"$k\">" .ucfirst($k). "</option>\n";
          }
       ?>
     </select>
    <p />
    <input type="submit" name="submit" value="Go" />
     
    </form>
 
<?php
  //If form submitted, process input.
  }else{
      //Nothing here has to change to accommodate the new functions.
      $month = $_POST['month'];
       
      if ($month == 'February'){
        echo "The month of February has " . $months['February'] . ".";
      }else{
        echo "The month of $month has $months[$month] days.";
      }
   
  }
?>
 
</body>
</html>