        <?php 
        $myname = "David";

        $partial = substr($myname, 0, 3);

        $uppercase = strtoupper($myname);

        $lowercase = strtolower($uppercase);

        strpos("emily", "e"); 

        $round = round(M_PI);
        print $round;  // prints 3

        // This time, round pi to 4 places
        $round_decimal = round(M_PI, 4);
        print $round_decimal; // prints 3.1416

        // Use your knowledge of strlen(), substr(), and rand() to
        // print a random character from your name to the screen.
        $name = "Isabella";
        $max = strlen($name) - 1;
        $rndchar = rand(0,$max);
        print substr($name, $rndchar, 1);
    
        $fav_bands = array();
        array_push($fav_bands, "Maroon 5");
        print count($fav_bands);



        $array = array(5, 3, 7, 1);
        sort($array);
        print join(", ", $array);   
        // prints "1, 3, 5, 7"

        $array = array(5, 3, 7 ,1);
        rsort($array);
        print join(":", $array);
        // prints "7:5:3:1"

?>
