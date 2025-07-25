<?php
class Accept_data{
    public $fname,$mname,$lname,$phone,$email,$gend,$edu,$lan,$per,$passyear,$flat,$bldg,$area,$city,$lndmrk,$pin,$date,$bldgrp,$country,$state,$reference;
    public $datapdo;
    public $localhost,$dbname,$conn,$query;
    function upload_data(){
        $this->localhost="127.0.0.1";
        $this->dbname="stu_data";
        
        try{
           $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;","root","");
           $this->query="insert into admission_form(first_name,middle_name,last_name,phone,email,gender,education,languages,percentage,passing_year,wing,building,area,city,landmark,pincode,dob,blood_grp,country,state,reference_by) values('".$this->fname."','".$this->mname."','".$this->lname."',".$this->phone.",'".$this->email."','".$this->gend."','".$this->edu."','".$this->lan."',".$this->per.",".$this->passyear.",'".$this->flat."','".$this->bldg."','".$this->area."','".$this->city."','".$this->lndmrk."',".$this->pin.",'".$this->date."','".$this->bldgrp."','".$this->country."','".$this->state."','".$this->reference."')";
           $this->datapdo->exec($this->query);
        }
        catch(Exception $a)
        {
            echo $a;
        }
    }
    function read_data(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->fname = empty(filter_input(INPUT_POST,'fn', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'fn', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->mname = empty(filter_input(INPUT_POST,'mn', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'mn', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lname = empty(filter_input(INPUT_POST,'ln', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'ln', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->phone = empty(filter_input(INPUT_POST,'pn', FILTER_SANITIZE_NUMBER_INT))?"Not Defined":(filter_input(INPUT_POST,'pn', FILTER_SANITIZE_NUMBER_INT));
            $this->email = empty(filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL))?"Not Defined":(filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL));
            $this->gend = empty(filter_input(INPUT_POST,'gen', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'gen', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->edu = empty(filter_input(INPUT_POST,'edu', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'edu', FILTER_SANITIZE_STRING));
            $this->lan = empty(filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'lan', FILTER_SANITIZE_STRING));
            $this->per = empty(filter_input(INPUT_POST,'per', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'per', FILTER_SANITIZE_STRING));
            $this->passyear = empty(filter_input(INPUT_POST,'py', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'py', FILTER_SANITIZE_STRING));
            $this->flat = empty(filter_input(INPUT_POST,'flat', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'flat', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->bldg = empty(filter_input(INPUT_POST,'bldg', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'bldg', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->area = empty(filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->city = empty(filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'city', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lndmrk = empty(filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'land', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->pin = empty(filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT))?"No Number":(filter_input(INPUT_POST,'pin', FILTER_SANITIZE_NUMBER_INT));
            $this->date = empty(filter_input(INPUT_POST,'date', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'date', FILTER_SANITIZE_STRING));
            $this->bldgrp = empty(filter_input(INPUT_POST,'bg', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'bg', FILTER_SANITIZE_STRING));
            $this->country = empty(filter_input(INPUT_POST,'cou', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'cou', FILTER_SANITIZE_STRING));
            $this->state = empty(filter_input(INPUT_POST,'state', FILTER_SANITIZE_STRING))?"Not Defined":(filter_input(INPUT_POST,'state', FILTER_SANITIZE_STRING));
            $this->reference = empty(filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS))?"Not Defined":(filter_input(INPUT_POST,'ref', FILTER_SANITIZE_SPECIAL_CHARS));
        }
    }
    
    function display(){
        echo $this->fname;
        echo '<br>';
        echo $this->mname;
        echo '<br>';
        echo $this->lname;
        echo '<br>';
        echo $this->phone;
        echo '<br>';
        echo $this->email;
        echo '<br>';
        echo $this->gend;
        echo '<br>';
        echo $this->edu;
        echo '<br>';
        echo $this->lan;
        echo '<br>';
        echo $this->per;
        echo '<br>';
        echo $this->passyear;
        echo '<br>';
        echo $this->flat;
        echo '<br>';
        echo $this->bldg;
        echo '<br>';
        echo $this->area;
        echo '<br>';
        echo $this->city;
        echo '<br>';
        echo $this->lndmrk;
        echo '<br>';
        echo $this->pin;
        echo '<br>';
        echo $this->date;
        echo '<br>';
        echo $this->bldgrp;
        echo '<br>';
        echo $this->country;
        echo '<br>';
        echo $this->state;
        echo '<br>';
        echo $this->reference;
    }
}

$accept = new Accept_data();
$accept->read_data();
$accept->display();
$accept->upload_data();
?>
