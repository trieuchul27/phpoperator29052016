<html>
    <body>
        <h1> My First PHP Pages</h1>
        <?php
        $x = 10;
        $y = 6;
        echo $x+$y;
        ?><br>
        
        <?php
        $x = 10;
        $y = 6;
        echo $x-$y;
        ?><br>
        
        <?php
        $x = 10;
        $y = 6;
        echo $x*$y;
        ?><br>
        
        <?php
        $x = 10;
        $y = 6;
        echo $x/$y;
        ?><br>
        
        <?php
        $x = 10;
        $y = 6;
        echo $x%$y;
        ?>
         <?php
        $return = $x == $y;
        var_dump($return);
        ?><br>
        <?php
        $return = $x <= $y;
        var_dump($return);
        ?><br>
        <?php
        $return = $x >= $y;
        var_dump($return);
        ?><br>
        <?php
        $return = $x === $y;
        var_dump($return);
        ?><br>
        <?php
        $return = $x <= $y;
        var_dump($return);
        ?><br>
        
        <?php
        $return = $x and$y;
        var_dump($return);
        ?><br>
        
        <?php
        $return = $x or $y;
        var_dump($return);
        ?><br>
        
        <?php
        $return = $x xor $y;
        var_dump($return);
        ?><br>
        
        <?php
         $x = 10;
        $y = 5;
        
        if ($x>$y){
        echo "x lebih besar";
        }else if ($x!=0) {
            echo "x tidak sama dengan 0"; 
    }else{
        echo "x = 0";
    }
    ?><br>
        
        <?php
        $favcolor = "red";
        
        switch ($favcolor) {
            case "red":
                echo "your favorite color is red!";
                break;
            
            case "blue":
                echo "your favorite color is blue!";
                break;
            
            case "green":
                echo "your favorite color is green!";
                break;
            default:
                echo "your favorite color is meither,";
            
        }
        ?><br>
        
        <?php
        for ($x = 0; $x<=10; $x++){
            echo "the number is : $x <br>";
        }
        ?><br>
        
        <?php
        $x =1;
        
        while ($x <=5 ){
            echo "the number is : $x <br>";
            $x++;
        }
        ?><br>
    </body> 
</html>
