<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>phptest</title>
    <link type="text/css" href = "style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php   
    $n1 = "" ;
    $n2 = "" ;
    $caculate = "";

    if (isset($_POST["number1"]) && isset($_POST["number2"])
        && isset($_POST["caculate"])) {
         $n1 = $_POST["number1"];
         $n2 = $_POST["number2"];
         $caculate = $_POST["caculate"];
         
         switch ($caculate) {
             case "+":
                 $result = $n1 + $n2 ;
             break;
             case "-":
                 $result = $n1 - $n2 ;
                 break;
             case "*":
             case "x":
                 $result = $n1 * $n2 ;
                 break;
             case "/":
             case ":":
                 $result = $n1 / $n2 ;
                 break;
             case "%":
                 $result = $n1 % $n2 ;
                 break;
                 $result = $n1 + $n2 ;
                 $caculate = "+";
             default:
                 ;
             break;
         }
         
    }

?>
 	<div class= "content">
 		<h1>Calculation table</h1>
 		<form action="#" method="post" name="main-form">
 	 			<div class="row">
 					<span>firs number</span>
 					<input type="text" name="number1" value= "<?php echo $n1; ?>">
 				</div>	
 	 			<div class="row">
 					<span>Calculation</span>
 					<input type="text" name="caculate"  value= "<?php echo $caculate; ?>">
 				</div>
 	 			<div class="row">
 					<span>last number</span>
 					<input type="text" name="number2"  value= "<?php echo $n2; ?>">
 				</div>
 	 			<div class="row">
 					<input type="submit" value="result" name="submit">
 				</div>
 				<div class="row">
 				<p> Œ‹‰Ê<?php echo  $n1 . " " .$caculate . " " . $n2 . " = " .$result;?></p>
 				</div>
 		</form>
 
 				

 	</div>
</body>
</html>