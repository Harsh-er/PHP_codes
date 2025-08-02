<?php

class Single_detail {

    public $localhost, $dbname, $conn, $query, $result, $row, $email;

    function single_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "stu_data";
        $current_roll = isset($_GET['roll']) ? (int) $_GET['roll'] : 1;
        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;", "root", "");
            $this->maxquery = $this->datapdo->query("SELECT MAX(roll_no) AS max_roll FROM admission_form");
            $this->max_total = $this->maxquery->fetch(PDO::FETCH_ASSOC)['max_roll'];
            $this->query = "SELECT * FROM admission_form WHERE roll_no =" . $current_roll;
            $this->result = $this->datapdo->query($this->query);
            echo '<!doctype html>
    <html>
    <head>
        <title>Personal details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="opticalearn_form.css">
        <script src="opticalearn_form.js"></script>
    </head>
    <body class="boody">
        <form enctype="multipart/form-data">';
            if ($this->result->rowCount() > 0) {
                $row = $this->result->fetch(PDO::FETCH_ASSOC);
                echo '
            <div class="container2">
            <div class="md_ad_form wid">
                <h2 class="text-center bg-white border border-3 border-black rounded-pill">Admission Form</h2>
            </div>
                
            <div class="row mt-5 ">
                <div class="col-sm-3">
                    
                </div>

                <div class="col-sm-3">
                    
                </div>

                <div class="col-sm-3">
                    
                </div>

                <div class="col-sm-3">
                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6">
                    
                </div>

                <div class="col-lg-6 md_ad_form">
                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                    
                </div>

                <div class="col-lg-3 mb_a_form">
                   
                </div>

                <div class="col-lg-3 mb_a_form">
                    
                </div>

                <div class="col-lg-3 mb_a_form">
                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 md_ad_form">
                    
                </div>

                <div class="col-lg-3 md_ad_form">
                    
                </div>

                <div class="col-lg-3 md_ad_form">
                    
                </div>

                <div class="col-lg-3 md_ad_form">
                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 md_ad_form">
                    
                </div>

                <div class="col-sm-6 md_ad_form">
                   
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                   
                </div>


                <div class="col-lg-3 mb_a_form">
                   
                </div>

                <div class="col-lg-3 mb_a_form">
                    
                </div>

                <div class="col-lg-3 mb_a_form">
                    
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 md_ad_form">
                    
                </div>

                <div class="col-sm-6 md_ad_form">
                    
                </div>
            </div>
        </form>
    </body>
</html>';
            }
        } catch (Exception $a) {
            echo $a;
        }
    }
}
$obj1 = new Single_detail();
$obj1->single_data();
?>
