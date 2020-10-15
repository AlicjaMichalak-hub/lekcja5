<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane użytkownika</title>
</head>
<body>
    <h4>Dane z formularza</h4>
    <?php
     echo '<pre>',/*pre oznacza tekst preformatowany*/ print_r($_GET),'</pre>'; //jeśli tu jest uzyte get to w poporzednim pliku tez musi byc uzyte get a nie post
    $pass=$_GET['pass'];
    $color=$_GET['color'];
    switch ($color) {
        case 'r':
            $color= 'Czerwony';
            break;
        case 'b':
            $color= 'Niebieski';
            break;
        case 'g':
            $color= 'Zielony';
            break;
    }


if(isset($_GET['regulamin']))
{
    $reg = 'Regulamin zatwierdzony';

}else{

    $reg = 'Proszę zatwierdzić regulamin';
}

     echo <<<DATA
        Login: $_GET[login]<br> 
        Hasło: {$_GET['pass']}<br> 
        Hasło: $pass<br>
        Ulubiony kolor: $color<br>
        $reg
DATA;
//*nie dawac loginu w apostrofei, to blad

    ?>
</body>
</html>