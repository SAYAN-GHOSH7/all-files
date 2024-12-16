<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
           
            $newarr = array("shubham","sayan","sanju","mainak");
            echo $newarr[3];

            echo"<br>";

             // associative array//
            $newarr2 =array("name"=> "sayan","age"=>"20","class"=>"firstyear");
            echo  $newarr2 ["name"];

            echo"<br>";

            //multidimensional arry//
            $newarr3 = array ("a");



            //foreach//

            echo "<br>";
            $arr = array (1, 2, 3, 4);
            // 
            
            echo "<br>";
            foreach($arr as $abc){
               
                echo $abc ;
                echo "<br>";
            }
            
        //check //

        echo "<br>";
        $arr = array ("jon","is","a","good","boy");

         
        echo "<br>";
        foreach($arr as $check){
           
            echo $check ;
            echo "<br>";
        }


        //function//
        // echo "<br>";

        // function add_new5 (&$a)
        // {
        //     $a =10;
        //     echo $a;
        //     echo"<br>";
        // }

        // $b = 20;
        // echo $b ;
        // echo"<br>";

        // add_new5($b);
        // echo$b;


        function square ($sum)
        
        {
            // return 'hi';
            return $sum * $sum ;
        }
        echo square (4)



    ?>      
</body>
</html>