        ``                                                                <!DOCTYPE html>
                                                                        <head>
                                                                        <title>PHP Tutorial</title>
                                                                        </head>
                                                                        <body>

                                                                        <?php //echo "Hello World" ;  
                                                                        //$num = 3.20;
                                                                        //$cast = (int)  $num;
                                                                        //echo  $cast;
                                                                        //$y = 2;
                                                                        //$ans = $y **2;
                                                                        //echo $ans;

                                                                        //$x = 99;
                                                                        //$y = 7;
                                                                        //$ans = $x%$y;
                                                                        //echo $ans;

                                                                        //  echo "<br>";
                                                                        //  $x = 5;
                                                                        //  $y = 3;
                                                                        //  $x -= $y;
                                                                        //  echo "X =" . $x . "<br>";
                                                                        //  $x = $x + $y;
                                                                        //  echo "Y =" . $x . "<br>";
                                                                        // $x = 12; 
                                                                        // for ($i = 2; $i <= $x; $i+=2) { echo  $i, ',';
                                                                            
                                    //                                     // }
                                    //                                     echo "<br>";
                                    //                                     $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");
                                    //                                     for ($i = 0; $i < count($letters); $i++) { echo  $letters[$i] . ',';
                                    //                                     }

                                    //                                     echo "<br>";
                                    //                                     $letters = array("a", "b", "c", "d", "e",   "f", "g", "h", "i", "j");
                                    //                                     foreach ($letters as $letter) { echo  $letter . ',';    
                                    //                                     }

                                    //                                     echo "<br>";
                                    //                                     $y = 4;
                                    //                                     if ($y ==4){
                                    //                                         echo "Y is 4";
                                    //                                     }

                                    //                                     echo "<br>";
                                    //                                     $name = "John";
                                    //                                     if ($name == "John") {
                                    //                                         echo "Hello John";
                                    //                                     } elseif ($name == "Jane") {
                                    //                                         echo "Hello Jane";
                                    //                                     } else {
                                    //                                         echo "You are not John or Jane";
                                    //                                     }

                                    //                                     echo "<br>";
                                    //                                     $score = 85;
                                    //                                     if ($score >= 90) {
                                    //                                         echo "Grade: A";
                                    //                                     } elseif ($score >= 80) {
                                    //                                         echo "Grade: B";
                                    //                                     } elseif ($score >= 70) {
                                    //                                         echo "Grade: C";
                                    //                                     } elseif ($score >= 60) {
                                    //                                         echo "Grade: D";
                                    //                                     } else {
                                    //                                         echo "Grade: F";
                                    //                                     }

                                echo "<br>";

        $scores = [

            ["name" => "Lawrence", "matricno" => "12345", "ca" => 15, "exam" => 40],

            ["name" => "Precious", "matricno" => "67890", "ca" => 23, "exam" => 55],

            ["name" => "Bandit", "matricno" => "54321", "ca" => 12, "exam" => 36],

            ["name" => "Seun", "matricno" => "67662", "ca" => 10, "exam" => 70],

            ["name" => "Pella", "matricno" => "508971", "ca" => 15, "exam" => 31],

        ];

        echo '<table border="8"cellpadding="10" cellspacing="0" >';

        echo '<tr>
                <th>Name</th>
                <th>Matric No</th>
                <th>CA</th>
                <th>Exam</th>
                <th>Total</th>
                <th>Grade</th>
            </tr>';

        foreach ($scores as $score) {

            $total = $score["ca"] + $score["exam"];

            if ($total >= 31) {
                $grade = "A";
            } elseif ($total >= 26) {
                $grade = "B";
            } elseif ($total >= 21) {
                $grade = "C";
            } elseif ($total >= 16) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            echo '<tr>';

            echo '<td>' . $score["name"] . '</td>';

            echo '<td>' . $score["matricno"] . '</td>';

            echo '<td>' . $score["ca"] . '</td>';

            echo '<td>' . $score["exam"] . '</td>';

            echo '<td>' . $total . '</td>';

            echo '<td>' . $grade . '</td>';

            echo '</tr>';
        }

        echo '</table>';
                                





            echo "<br>";
                                        $scores = [];

                    $students1 = [

                        ["name" => "Lawrence", "matricno" => "CSC/24/1847"],

                        ["name" => "Precious", "matricno" => "CSC/24/3921"],

                        ["name" => "Daniel", "matricno" => "CSC/24/5176"],

                        ["name" => "Favour", "matricno" => "CSC/24/2639"],

                        ["name" => "Esther", "matricno" => "CSC/24/7415"]

                    ];

                    foreach ($students1 as $student) {

                        $scores[] = [

                            "name" => $student["name"],

                            "department" => "Computer Science",

                            "matricno" => $student["matricno"],

                            "ca" => 20,

                            "exam" => 60

                        ];

                    }

                    $students2 = [

                        ["name" => "Michael", "matricno" => "CSC/24/6382"],

                        ["name" => "Samuel", "matricno" => "CSC/24/9154"],

                        ["name" => "David", "matricno" => "CSC/24/4278"],

                        ["name" => "Blessing", "matricno" => "CSC/24/3065"],

                        ["name" => "Joy", "matricno" => "CSC/24/8523"],

                        ["name" => "Emmanuel", "matricno" => "CSC/24/1746"],

                        ["name" => "Ruth", "matricno" => "CSC/24/5690"]

                    ];

                    foreach ($students2 as $student) {

                        $scores[] = [

                            "name" => $student["name"],

                            "department" => "Computer Science",

                            "matricno" => $student["matricno"],

                            "ca" => 10,

                            "exam" => 50

                        ];

                    }

                    $students3 = [

                        ["name" => "Joshua", "matricno" => "CSC/24/7834"],

                        ["name" => "Victor", "matricno" => "CSC/24/2159"],

                        ["name" => "Mercy", "matricno" => "CSC/24/9462"],

                        ["name" => "Ibrahim", "matricno" => "CSC/24/5317"]

                    ];

                    foreach ($students3 as $student) {

                        $scores[] = [

                            "name" => $student["name"],

                            "department" => "Computer Science",

                            "matricno" => $student["matricno"],

                            "ca" => 15,

                            "exam" => 30

                        ];

                    }

                    $students4 = [

                        ["name" => "Peter", "matricno" => "CSC/24/6841"],

                        ["name" => "Gift", "matricno" => "CSC/24/3297"],

                        ["name" => "Anthony", "matricno" => "CSC/24/7586"],

                        ["name" => "Janet", "matricno" => "CSC/24/4032"]

                    ];

                    foreach ($students4 as $student) {

                        $scores[] = [

                            "name" => $student["name"],

                            "department" => "Computer Science",

                            "matricno" => $student["matricno"],

                            "ca" => 12,

                            "exam" => 30

                        ];

                    }

                    echo '<h1>Computer Science Student Assessment Results</h1>';

                    echo '<table border="8.8" cellpadding="12" cellspacing="0">';

                    echo '<tr>

                            <th>Name</th>

                            <th>Department</th>

                            <th>Matric No</th>

                            <th>CA</th>

                            <th>Exam</th>

                            <th>Total Score</th>

                            <th>Grade</th>

                        </tr>';

                    foreach ($scores as $score) {

                        $total = $score["ca"] + $score["exam"];

                        if ($total >= 70) {

                            $grade = "A";

                        } elseif ($total >= 60) {

                            $grade = "B";

                        } elseif ($total >= 50) {

                            $grade = "C";

                        } elseif ($total >= 45) {

                            $grade = "D";

                        } elseif ($total >= 40) {

                            $grade = "E";

                        } else {

                            $grade = "F";

                        }

                        echo '<tr>';

                        echo '<td>' . $score["name"] . '</td>';

                        echo '<td>' . $score["department"] . '</td>';

                        echo '<td>' . $score["matricno"] . '</td>';

                        echo '<td>' . $score["ca"] . '</td>';

                        echo '<td>' . $score["exam"] . '</td>';

                        echo '<td>' . $total . '</td>';

                        echo '<td>' . $grade . '</td>';

                        echo '</tr>';

                    }

                    echo '</table>';
                                    

                                        ?>

                                                                        </body>

                                                                        </html>



``