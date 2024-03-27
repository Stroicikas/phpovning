<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //-----NOTE TO BOND-----
    //-----I CAN'T COUNT PAST 5 SO I DID 1 EXTRA UPPGIFT BUT I DON'T KNOW WHICH ONE AND WHERE-----
    //-----SORRY FOR BEING LAZY TO TRACK IT DOWN :sob: -----
    //upp1
    $color = array("white", "green", "red", "blue", "black");
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
    //upp2
    $color = array("white", "green", "red"):

    foreach ($color as $clr) {
        echo "$clr, ";
    }
    sort($color);
    echo "<ul>";
    foreach ($color as $c) {
        echo "<li>$y</li>";
    }
    echo "<ul>";
    //Upp3
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    asort($ceu);
    foreach($ceu as $country => $cc) {
        echo "Capital of $country is $cc"."\n";
    }
    //Upp4
    $x = array(1, 2, 3, 4, 5);
    var_dump($x);
    unset($x[3]);
    $x = array_values($x);
    echo " ";
    var_dump($x);
    //Upp5
    $color = array(4 => "white",6 => "green", 11 => "red");
    echo reset($color)."\n";
    //Upp6
    $dDate = "2012-09-12";
    $newDate = date(strtotime($dDate));
    echo $newDate;
    //Upp7
    $timeStamp = strtotime("12-05-2014");
    echo $timeStamp;
    //Upp8
    $dateOne = time();
    $dateTwo = strtotime("2002-01-03");
    $diffDate = $dateOne - $dateTwo;
    echo floor($diffDate/(60*60*24));
    //Upp9
    $dat = "2002-01-03";
    echo "First day : ". date("Y-m-01", strtotime($dat))." - Last day : ". date("Y-m-t", strtotime($dat));  
    //Upp10
    echo date("l \t\h\e jS"); //did with facit cause I was confused
    var_dump(checkdate(2, 30, 2008));
    var_dump(checkdate(1, 3, 2002));
    //Upp11
    $fileName = "i:/iDontHateFile.txt";
    try {
        $contentOfFile = file_get_contents($fileName);
        echo "File content: \n";
        echo $contentOfFile;
    }
    catch (Exception $opa) {
        echo "Opa...error...: ".$opa->getMessage();
    }
    //Upp12
    function checkIfFileExists($filePath) {
        if (file_exists($filePath)) {
            echo "File is located at: " . $filePath;
            else {
                echo "file don't exist at path: " . $filePath;
            }
        }
    }
    $filePath = "whereTheFileAt.txt";
    checkIfFileExists($filePath);
    //Upp13
    $filename = "i:/iDontHaveFile.txt"
    try {
        $lines = 0;
        $handleFile = fopen($filename, "rows");
        if ($handleFile === false) {
            throw new Exception("Error. Couldn't open the file");
        }
        while (!feof($handleFile)) {
            $line = fgets($handleFile);
            if ($line !== false) {
                $lineCount++;
            }
        }
        fclose($handleFile);
        echo "line count: " . $lineCount;
    }
    catch (exception $opa) {
        echo "Error caught: " . $opa->getMessage();
    }
    //Upp14
    ?>
</body>
</html>