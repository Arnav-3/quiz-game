<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "quiz";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 

        $sql = "SELECT * FROM quiz_questions";
        $result = $conn->query($sql);
        $ques= array();  
        $opt1= array(); 
        $opt2= array();
        $opt3= array();
        $opt4= array();
        $correctoption= array();
        if ($result->num_rows > 0)
        {
            $i = 0;
            while($row = $result->fetch_assoc()) 
            {
                $ques[$i] = $row["ques"];
                $opt1[$i] = $row["opt1"];
                $opt2[$i] = $row["opt2"];
                $opt3[$i] = $row["opt3"];
                $opt4[$i] = $row["opt4"];
                $correctoption[$i]=$row["correct_opt"];
                $i++;
            }
        } else 
        {
            echo "0 results";
        }

        $conn->close();
      
    }
  
?>