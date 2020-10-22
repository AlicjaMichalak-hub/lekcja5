<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane z tabelki</h4>
  <?php  
  $name=$_GET['name'];
  $plec=$_GET['plec'];
  $eyes=$_GET['eyes'];

  switch ($plec) {
    case 'M':
        $plec= 'Male';
        break;
    case 'b':
        $plec= 'Female';
        break;
    
}

  if(isset($_GET['6feet']))
{
    $feet = 'Over 6 feet tall';

}else{

    $feet='';
}
if(isset($_GET['200p']))
{
    $pounds = 'Over 200 pounds';

}else{

    $pounds ='';
}

    echo <<<DATA
        Name: $_GET[name]<br> 
        Sex: {$_GET['plec']}<br> 
        Eye color: $eyes<br>
        Other information: <br>
        $feet <br>
        $pounds
DATA;
?>
<br><br><button> <a href="tabelka.php">back to the table</button>
</body>
</html>