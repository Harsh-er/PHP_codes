<html>
    <head>
        <title>Stu_data Table</title>
    </head>
    <body>
        <form>
            <?php

            class Accept_data {

                public $localhost, $dbname, $conn, $query, $result, $row;

                function Get_data() {
                    $this->localhost = "127.0.0.1";
                    $this->dbname = "stu_data";
                    
                    try {
                        $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
                        $this->query = "SELECT roll_no,first_name,middle_name,last_name,phone,email FROM admission_form";
                        $this->result = $this->datapdo->query($this->query);
                    } catch (Exception $a) {
                        echo "dead";
                    }
                }

                function Display() {
                    $current_rollno = 1;
                    if ($this->result->rowcount() > 0) {
                        echo '<table border=2 align=center><tr><th>Roll no</th><th>Name</th><th>Contact</th><th>Email ID</th><th>More Info</th></tr>';
                        while ($row = $this->result->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr><td>'. $row["roll_no"] . ' ' .'</td><td>' . $row["first_name"] . ' ' . $row["middle_name"] . ' ' . $row["last_name"] . '</td><td>' . ' ' . $row["phone"] . '</td><td>' . ' ' . $row["email"] . '</td><td> <button><a href="process_fetch_personel_data.php?roll='. $current_rollno.'">More Info</a></button> </td></tr>';
                        }
                        echo '</table>';
                    } else {
                        echo '0 results';
                    }
                }
            }
            $obj = new Accept_data();
            $obj->Get_data();
            $obj->Display();
            ?>
        </form>
    </body>
</html>