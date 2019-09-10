    <!DOCTYPE html>
    <html>
    <head>
        <style>
            /*table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }
            th {text-align: left;}*/
            #question{
                font-size: 25px;
            }
            #ans{

            }
            tr.td:hover{
                background-color: red;
            }
        </style>
    </head>
    <body>
         <script type="text/javascript">
                function myFunction()
                {
                   /* document.getElementById("demo").innerHTML = 5 + 6*/
                   window.alert(5 + 6);
                }
            </script>
        <div id="demo"></div>
        <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','vikas','projectdata');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }


        $sql="SELECT * FROM driver_licence WHERE QNO = '".$q."'";
        $result = mysqli_query($con,$sql);

        echo "<form>";
        while($row = mysqli_fetch_array($result)) { 

            echo "<label id='question'>" . $row['QUESTION'] . "</label><br><br>";
            echo "<input type='radio' name='ans'  value='1' onclick = insert()>";
            echo "&nbsp&nbsp<label>" . $row['ANS1'] . "</label><br><br>";
            echo "<input type='radio' name='ans' value='2'>";
            echo "&nbsp &nbsp<label>" . $row['ANS2'] . "</label><br><br>";
            echo "<input type='radio' name='ans' value='3'>";
            echo "&nbsp&nbsp<label>" . $row['ANS3'] . "</label><br><br>";
            echo "<input type='radio' name='ans' value='4'>";
            echo "&nbsp&nbsp<label>" . $row['ANS4'] . "</label><br><br>";
            echo "<input type='submit' text='submit' >";
            echo "</form>";
            // echo "<label>";
            // echo "<label>" . $row['QNO'] . "</label>";
            // echo "<table>";
            // echo "<tr id='question'>" . $row['QUESTION'] . "</tr><br><br>";
            // echo "<input type='radio' name='ans' vlaue='1'>";
            // echo "&nbsp&nbsp<tr id='ans'>" . $row['ANS1'] . "</tr><br><br>";
            // echo "<input type='radio' name='ans' vlaue='2'>";
            // echo "&nbsp &nbsp<tr id='ans'>" . $row['ANS2'] . "</tr><br><br>";
            // echo "<input type='radio' name='ans' vlaue='3'>";
            // echo "&nbsp&nbsp<tr id='ans'>" . $row['ANS3'] . "</tr><br><br>";
            // echo "<input type='radio' name='ans' vlaue='4'>";
            // echo "&nbsp&nbsp<tr id='ans'>" . $row['ANS4'] . "</tr>";
            // ";
        }
        //echo "</form>";
        function myFunction()
        {
            echo "hello";
        }
        mysqli_close($con);
        ?>
    </body>
    </html>