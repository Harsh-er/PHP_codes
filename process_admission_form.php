<html>
    
</html>
<?php

class Accept_data {

    public $fname, $mname, $lname, $phone, $email, $gend, $edu, $lan, $per, $passyear, $flat, $bldg, $area, $city, $lndmrk, $pin, $date, $bldgrp, $country, $state, $reference;
    public $datapdo;
    public $localhost, $dbname, $conn, $query;
    public $target_dir, $target_file, $uploadOk, $imgfiletype,$check,$imageFileType,$newname,$newpath,$sanitize_name,$sanitize_email;

    function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "stu_data";

        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->query = "insert into admission_form(first_name,middle_name,last_name,phone,email,gender,education,languages,percentage,passing_year,wing,building,area,city,landmark,pincode,dob,blood_grp,country,state,reference_by,profile_photo) values('" . $this->fname . "','" . $this->mname . "','" . $this->lname . "'," . $this->phone . ",'" . $this->email . "','" . $this->gend . "','" . $this->edu . "','" . $this->lan . "'," . $this->per . "," . $this->passyear . ",'" . $this->flat . "','" . $this->bldg . "','" . $this->area . "','" . $this->city . "','" . $this->lndmrk . "'," . $this->pin . ",'" . $this->date . "','" . $this->bldgrp . "','" . $this->country . "','" . $this->state . "','" . $this->reference . "','".$this->newpath."')";
            $this->datapdo->exec($this->query);
        } catch (Exception $a) {
            echo $a;
        }
    }

    function read_data() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->fname = empty(filter_input(INPUT_POST, 'fn', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'fn', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->mname = empty(filter_input(INPUT_POST, 'mn', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'mn', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lname = empty(filter_input(INPUT_POST, 'ln', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'ln', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->phone = empty(filter_input(INPUT_POST, 'pn', FILTER_SANITIZE_NUMBER_INT)) ? "Not Defined" : (filter_input(INPUT_POST, 'pn', FILTER_SANITIZE_NUMBER_INT));
            $this->email = empty(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)) ? "Not Defined" : (filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
            $this->gend = empty(filter_input(INPUT_POST, 'gen', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'gen', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->edu = empty(filter_input(INPUT_POST, 'edu', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'edu', FILTER_SANITIZE_STRING));
            $this->lan = empty(filter_input(INPUT_POST, 'lan', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'lan', FILTER_SANITIZE_STRING));
            $this->per = empty(filter_input(INPUT_POST, 'per', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'per', FILTER_SANITIZE_STRING));
            $this->passyear = empty(filter_input(INPUT_POST, 'py', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'py', FILTER_SANITIZE_STRING));
            $this->flat = empty(filter_input(INPUT_POST, 'flat', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'flat', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->bldg = empty(filter_input(INPUT_POST, 'bldg', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'bldg', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->area = empty(filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->city = empty(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lndmrk = empty(filter_input(INPUT_POST, 'land', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'land', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->pin = empty(filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_NUMBER_INT)) ? "No Number" : (filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_NUMBER_INT));
            $this->date = empty(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING));
            $this->bldgrp = empty(filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_STRING));
            $this->country = empty(filter_input(INPUT_POST, 'cou', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'cou', FILTER_SANITIZE_STRING));
            $this->state = empty(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING)) ? "Not Defined" : (filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING));
            $this->reference = empty(filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS)) ? "Not Defined" : (filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS));
            
            
        }
    }

    function upload_photo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->target_dir = "uploads/";
            $this->target_file = $this->target_dir . basename($_FILES["photo"]["name"]);
            var_dump($this->target_file);
            $this->email = $_POST['email'];
            $this->sanitize_name = $_FILES['photo']['name'];
            $this->sanitize_email = str_replace(['@','.'],'_', $this->email);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
            $this->newname = $this->sanitize_email.'.'.$imageFileType;
            $this->newpath = "uploads/".$this->newname;
            
            if (isset($_POST["submit"])) {
                $this->check = getimagesize($_FILES["photo"]["tmp_name"]);
                if ($this->check !== false) {
                    echo "File is an image - " . $this->check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

//            if (file_exists($this->target_file)) {
//                echo "Sorry, file already exists.";
//                $uploadOk = 0;
//            }

            if ($_FILES["photo"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $this->newpath)) {
                    echo "The file " . htmlspecialchars($this->newname). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }

    function display() {
//        echo $this->fname;
//        echo '<br>';
//        echo $this->mname;
//        echo '<br>';
//        echo $this->lname;
//        echo '<br>';
//        echo $this->phone;
//        echo '<br>';
//        echo $this->email;
//        echo '<br>';
//        echo $this->gend;
//        echo '<br>';
//        echo $this->edu;
//        echo '<br>';
//        echo $this->lan;
//        echo '<br>';
//        echo $this->per;
//        echo '<br>';
//        echo $this->passyear;
//        echo '<br>';
//        echo $this->flat;
//        echo '<br>';
//        echo $this->bldg;
//        echo '<br>';
//        echo $this->area;
//        echo '<br>';
//        echo $this->city;
//        echo '<br>';
//        echo $this->lndmrk;
//        echo '<br>';
//        echo $this->pin;
//        echo '<br>';
//        echo $this->date;
//        echo '<br>';
//        echo $this->bldgrp;
//        echo '<br>';
//        echo $this->country;
//        echo '<br>';
//        echo $this->state;
//        echo '<br>';
//        echo $this->reference;
    }
}

$accept = new Accept_data();
$accept->read_data();
$accept->display();
$accept->upload_data();
$accept->upload_photo();
header('Location: optical_thankyou.php');
exit;
?>
