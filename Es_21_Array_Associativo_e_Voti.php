<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
</head>
<body style="background-color: lightblue;">

<?php 
    $studente=array("cognome" => "Gori" , "nome" => "Mattia" ,"listaVoti" => array(random_int(2,10),random_int(2,10),random_int(2,10),random_int(2,10),random_int(2,10)));
    
    $str="<ul>";
    foreach ($studente as $chiave => $valore) {
        if($chiave == "listaVoti"){
            $str = $str . "<ol>";
            for ($i=0; $i < count($studente["listaVoti"]); $i++) { 
                $str = $str . "<li>".$studente["listaVoti"][$i]."</li>"; 
            }
            $str = $str . "</ol>";
            
        } else {
            $str = $str . "<li>".$valore."</li>";
        }
        $str = $str . "</ul>";

    }
    echo "$str";
   
  
?>


</table>
</body>
</html>
