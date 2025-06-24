<!doctype html>
<html>
    <head>
        <title>Opticalearn Admission Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background:linear-gradient(45deg,#895cad,#431f61);
            }
            .container{
                box-shadow: 5px 5px 8px black;
                margin: 50px auto;
                max-width: 600px;
                background: linear-gradient(45deg,#431f61,#895cad);
                padding: 50px;   
            }
            
            input{
                outline: none;
            }
            
            input::placeholder{
                color: white;
            }
            
            input,select,b{
                color: white;
            }
            
            
            @media (min-width:150px) and (max-width: 576px)
            {
                .md_ad_form{
                    margin: 20px 20px 20px 0px;
                }

                .mb_a_form{
                    margin-bottom: 20px;
                }
                
                h2{
                    overflow: hidden;
                }
            }
        
            
        </style>
    </head>
    <body >

        <form class="container">
            
            <div class="text-center md_ad_form">
                <h2 class="bg-white border border-3 border-black rounded-pill">Admission Form</h2>
            </div>
                
            <div class="row mt-5">
                <div class="col-sm-3">
                    <input class="md_ad_form col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0  text-white" type="text" placeholder="First Name" name="fn">
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Middle Name" name="mn">
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Last Name" name="ln">
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Phone Number" name="pn">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6">
                    <input class="md_ad_form col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="email" placeholder="Email Address" name="email">
                </div>

                <div class="col-lg-6 md_ad_form ">
                    <b>Select Gender:</b>
                    <br>
                    <span class="col-lg mt-2 me-2 text-white">
                    <input type="radio" name="gen" value="male">Male
                    </span>
                    
                    <span class="col-lg mt-2 me-2 text-white ">
                    <input type="radio" name="gen" value="female">Female
                    </span>
                    
                    <span class="col-lg mt-2 me-2 text-white">
                    <input type="radio" name="gen" value="other">Other
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                    <b>Education</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Education</option>
                        <option>SSC</option>
                        <option>HSC</option>
                        <option>Graduation</option>
                        <option>Diploma</option>
                        <option>Post-Graduation</option>
                    </select>

                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Language</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Language</option>
                        <option>Marathi</option>
                        <option>Hindi</option>
                        <option>Gujarati</option>
                        <option>English</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>%Percentage</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Percentage</option>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo '<option>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Passing Year</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Year</option>
                        <?php
                        for ($i = 2015; $i <= 2025; $i++) {
                            echo '<option>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Wing/Flat no" name="flat">
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Building/Society" name="bldg">
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Area" name="area">
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="City" name="city">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Landmark" name="land">
                </div>

                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Enter PIN Code" name="pin">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                    <b>Date of birth</b><br>
                    <input class="col-lg-12 bg-transparent" type="date" name="dob">
                </div>


                <div class="col-lg-3 mb_a_form">
                    <b>Blood Grp</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Select Blood Grp</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Country</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Select Country</option>
                        <option>India</option>
                    </select>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>State</b><br>
                    <select class="col-lg-12 bg-transparent">
                        <option>Select State</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chattisgarh</option>
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jarkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttarakhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 md_ad_form ">
                    <input class="col-lg-12 bg-transparent border-top-0 border-start-0 border-end-0 text-white" type="text" placeholder="Reference By" name="ref">
                </div>

                <div class="col-lg-6 md_ad_form ">
                    <input class="col-lg-12 bg-transparent" type="file" name="photo">
                </div>
            </div>

            <div class="mt-3 text-center">
                <button class="col-lg-6 rounded-pill border border-2 border-black" type="submit">Submit</button>
            </div>
            
            <div class="mt-2 text-white">
                <label class="md_ad_form"><b>*Fill the details as asked</b></label>
            </div>
        </form>

    </body>
</html>


