

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Opticalearn</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/updates.css">
        <script src="assets/jquery/jquery-3.7.1.js"></script>
        <script>
            $(function () {
                $("#header").load("main-header.php");
                $("#footer").load("main-footer.php");
            });

            function showOverlay() {
                var overlay = document.getElementById('overlay');
                overlay.style.display = 'block';
            }
            function hideOverlay() {
                var overlay = document.getElementById('overlay');
                overlay.style.display = 'none';
            }
            function validate_name() {
                // Validate required fields (fname, mname, lname)
                var fname = document.getElementById('fname').value.trim();
                var mname = document.getElementById('mname').value.trim();
                var lname = document.getElementById('lname').value.trim();
                if (fname === '') {
                    showAlert('First name is required.');
                    return false;
                }

                if (mname === '') {
                    showAlert('Middle name is required.');
                    return false;
                }

                if (lname === '') {
                    showAlert('Last name is required.');
                    return false;
                }
                return true;
            }
            function validate_number() {
                var phoneInput = document.getElementById("typePhone");
                var phonePattern = /^[789][0-9]{9}$/;
                var phoneValue = phoneInput.value;

                if (!phonePattern.test(phoneValue)) {
                    event.preventDefault(); // Prevent form submission
                    showAlert("Please enter a valid 10-digit mobile number starting with 7, 8, or 9.");
                    return false;
                }
                return true;
            }
            function validate_gender() {
                var checkboxes = document.getElementsByName('genderValue');
                var checkedCount = 0;
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {

                        checkedCount++;
                    }
                }
                if (checkedCount === 0) {
                    showAlert("Please select your gender..");
                    return false;
                }
                return true;
            }
            function validate_edulngperpy() {
                // Validation for Education
                var selectElement = document.getElementsByName('education')[0];
                if (!selectElement.value) {
                    showAlert('Please select your Education');
                    return false;
                }
                // Validation for Language
                var selectElement = document.getElementsByName('medium')[0];
                if (!selectElement.value) {
                    showAlert('Please select your Language');
                    return false;
                }
                // Validation for Percentage
                var selectElement = document.getElementsByName('percentage')[0];
                if (!selectElement.value) {
                    showAlert('Please select your Percentage');
                    return false;
                }

                // Validation for Passing year
                var selectElement = document.getElementsByName('year')[0];
                if (!selectElement.value) {
                    showAlert('Please select your Passing year');
                    return false;
                }
                return true;
            }
            function validate_address() {
                var flatno = document.getElementsByName('Flat_no')[0].value.trim();
                var building = document.getElementsByName('Building')[0].value.trim();
                var area = document.getElementsByName('Area')[0].value.trim();
                var city = document.getElementsByName('City')[0].value.trim();
                var landmark = document.getElementsByName('Landmark')[0].value.trim();
                var pincode = document.getElementsByName('pincode')[0].value.trim();
                var pincodePattern = /^[1-9][0-9]{2}\s?[0-9]{3}$/;
                if (!pincodePattern.test(pincode)) {
                    showAlert('Please enter a valid PIN code.');
                    event.preventDefault(); // Prevent form submission
                    return false;
                }
                if (flatno === '') {
                    showAlert('Please Enter Flat number');
                    return false;
                }
                if (building === '') {
                    showAlert('Please Enter building name');
                    return false;
                }
                if (area === '') {
                    showAlert('Please Enter area');
                    return false;
                }
                if (city === '') {
                    showAlert('Please Enter city');
                    return false;
                }
                if (landmark === '') {
                    showAlert('Please Enter landmark');
                    return false;
                }
                return true;
            }
            function validate_dob() {
                var dob = document.getElementById('dobError').value;
                // Validate Date of Birth
                if (!dob) {
                    showAlert('Date of Birth is required.');
                    return false;
                }
                var selectedDate = new Date(dob);
                var currentDate = new Date();
                // Check if the selected date is in the future
                if (selectedDate > currentDate) {
                    showAlert('Date of Birth cannot be in the future.');
                    return false;
                }
                var ageDifference = currentDate.getFullYear() - selectedDate.getFullYear();

                if (currentDate.getMonth() < selectedDate.getMonth() ||
                        (currentDate.getMonth() === selectedDate.getMonth() && currentDate.getDate() < selectedDate.getDate())) {
                    ageDifference--;
                }
                // Check if the age is less than 12 years
                if (ageDifference < 12) {
                    showAlert('Applicants must be at least 12 years old.');
                    return false;
                }
                return true; // Return true if all validations pass
            }
            function validate_bldgrp_cntrystate() {
                // Validation for Blood Group
                var selectElement = document.getElementsByName('BloodGroup')[0];
                if (!selectElement.value) {
                    showAlert('Please select your Blood Group');
                    return false;
                }
//                Validation for Country
                var countryDropdown = document.getElementsByName('country')[0];
                var selectedCountry = countryDropdown.options[countryDropdown.selectedIndex].value;

                if (selectedCountry === '' || selectedCountry === '0') {
                    showAlert("Please select your country.");
                    return false;
                }
                // Validation for State
                var stateDropdown = document.getElementsByName('state')[0];
                var selectedState = stateDropdown.options[stateDropdown.selectedIndex].value;

                if (selectedState === '' || selectedState === '0') {
                    showAlert("Please select your state.");
                    return false;
                }
                return true;
            }
            function validate_image() {
                var fileInput = document.getElementById('choose-file');
                var file = fileInput.files[0];
                var allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                var maxFileSize = 5000000; // Max file size in bytes (5 MB)

                // Reset error message
                var fileError = document.getElementById('fileError');
                fileError.innerHTML = '';
                // Check if a file is selected
                if (!file) {
                    showAlert("Please upload your photo.");
                    return false;
                }
                // Check file type
                if (!allowedTypes.includes(file.type)) {
                    showAlert("Only JPG, JPEG, PNG, and GIF photos are allowed.");
                    return false;
                }
                // Check file size
                if (file.size > maxFileSize) {
                    showAlert("Photo size exceeds the limit (5 MB).");
                    return false;
                }
                return true; // Return true if all validations pass
            }

            function validateadmissionform() {
                if (!validate_name()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                // Validate phone number first
                if (!validate_number()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_gender()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_edulngperpy()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_address()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_dob()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_bldgrp_cntrystate()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }
                if (!validate_image()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    return false;
                }

                var checkboxesBorivali = document.querySelectorAll('input[name="BbranchValue[]"]:checked');
                var checkboxesMulund = document.querySelectorAll('input[name="MbranchValue[]"]:checked');

                if (checkboxesBorivali.length === 0 && checkboxesMulund.length === 0) {
                    showAlert("Please select at least one timing for either Borivali Branch or Mulund Branch.");
                    return false;
                }

                showOverlay();
                return true;
            }

            var promise = new Promise(function (resolve, reject) {
                processJoin(function () {
                    resolve();
                });
            });
            promise.then(function () {
                return true;
            });

//            Send Email Process
            function processJoin(callback) {
                var email = document.getElementById('email').value;
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "sendemail.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                        if (callback && typeof callback === "function") {
                            callback();
                        }
                    }
                };
                xhr.send("email=" + email);
            }

            //Check Email Process
            function checkEmailExists() {
                var email = document.forms["admissionForm"]["email"].value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        if (this.responseText === "exists") {
                            showAlert("This email is already registered");
                            document.forms["admissionForm"]["email"].value = "";
                            document.forms["admissionForm"]["email"].value;
                        } else {

                        }
                    }
                };
                xhttp.open("GET", "check_email.php?email=" + email + "&table=admission_form", true);
                xhttp.send();

            }

            function showAlert(message) {
                var alertBox = document.getElementById('custom-alert');
                var alertMessage = document.getElementById('alert-message');
                alertMessage.textContent = message;
                alertBox.style.display = 'block';
            }

            function hideAlert() {
                document.getElementById("alert-close-btn").addEventListener("click", function () {
                    document.getElementById("custom-alert").style.display = "none";
                });
            }

            // Function to close the dropdown when focus is lost
            document.addEventListener('click', function (event) {
                const dropdown = document.querySelector('.nice-select.open');
                if (dropdown && !dropdown.contains(event.target)) {
                    dropdown.classList.remove('open');
                }
            });

            // Function to close the dropdown when the page is scrolled
            window.addEventListener('scroll', function () {
                const dropdown = document.querySelector('.nice-select.open');
                if (dropdown) {
                    dropdown.classList.remove('open');
                }
            });

            $(document).ready(function () {
                $('#choose-file').change(function () {
                    var i = $(this).prev('label').clone();
                    var file = $('#choose-file')[0].files[0].name;
                    $(this).prev('label').text(file);
                });
            });
        </script>
    </head>
    <body>
        <div id="overlay">
            <img src="assets/img/logo/loading.gif" alt="Page is Loading" id="loading-gif">
        </div>
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.png" alt="Page is Loading">
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Start -->
        <header id="header">

        </header>
        <!-- Header End -->

        <main>
            <section class="slider-area slider-area2">
                <div class="slider-active">
                    <!-- Single Slider -->
                    <div class="single-slider slider-height2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-11 col-md-12">

                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
            </section>  
            <section>
                                    <h1 style="text-align: center" class="joinn pt-5">Amar Institute of Optical Management</h1>
                    <h4 style="text-align: center">(Affiliated by Bharat Sevak Samaj, Promoted By Govt.of India)<br>
                        B/003, Gomati Smruti, Jambali Gali, Borivali(W), Mumbai-400 092.</h4>
                    <form class="form-default" action="processjoin.php" method="POST" onsubmit="return validateadmissionform()" name="admissionForm" enctype="multipart/form-data">
                        <div class="login-form">

                            <h2 class="form-container">Admission Form</h2>
                            <div class="row">
                                <div class="form-input col-sm-3">
                                    <!--<label>First Name<span style="color:red;"> *</span></label>-->
                                    <input type="text" name="fname" id="fname" placeholder="First name" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
                                </div>
                                <div class="form-input col-sm-3">
                                    <!--<label>First Name<span style="color:red;"> *</span></label>-->
                                    <input type="text" name="mname" id="mname" placeholder="Middle name" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Middle Name'">
                                </div>
                                <div class="form-input col-sm-3">
                                    <!--<label>First Name<span style="color:red;"> *</span></label>-->
                                    <input type="text" name="lname" id="lname" placeholder="Last name" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
                                </div>
                                <div class="form-input col-sm-3">
                                <!--<label>Phone number<span style="color:red;"> *</span></label>-->
                                    <input type="tel" name="number" id="typePhone"  placeholder="Enter mobile no"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required/>
                                </div>
                            </div>
                            <div id="custom-alert" class="alert alert-dismissible custom-alert align-items-center" role="alert">
                                <p id="alert-message"></p>
                                <div class="text-center">
                                    <button onclick="hideOverlay();
                                                hideAlert();" type="button" id="alert-close-btn" class="btn custom-btn d-flex justify-content-center"  data-bs-dismiss="alert" aria-label="Close">OK</button>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="form-input col-lg-6 form-check-inline">
                                <!--<label><i class="fa fa-envelope"></i>   Email Address<span style="color:red;"> *</span></label>-->
                                    <input type="email" id="email"  class="form-control" name="email" placeholder="Enter Email Address"
                                           onfocusout="checkEmailExists()" oninput="checkEmailExists()" onautocomplete="checkEmailExists()"
                                           onblur="this.placeholder = 'Email Address'" required/>
                                </div>


                                <div class="form-input col-lg-6">
                                    <label class="fw-bolder">Select Gender :</label><br>
                                    <div class="row">
                                        <div class="switch-wrap gndr d-flex align-items-start col-md-4 mb-3 pt-3">
                                            <div class="primary-radio-ml">
                                                <input type="checkbox" value="Male" name="genderValue" id="primary-radio-ml"  onclick="alterfemale()">
                                                <label for="primary-radio-ml"></label>
                                                <span>Male</span>
                                            </div>
                                            <div class="primary-radio-fml">
                                                <input type="checkbox" value="Female" name="genderValue" id="primary-radio-fml"  onclick="altermale()">
                                                <label for="primary-radio-fml"></label>
                                                <span>Female</span>
                                            </div>

                                            <div class="primary-radio-othr">
                                                <input type="checkbox" value="Other" name="genderValue" id="primary-radio-othr"  onclick="alterother()">
                                                <label for="primary-radio-othr"></label>
                                                <span>Other</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-input  col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon"><i class="fas fa-graduation-cap" aria-hidden="true">    Education</i></label>

                                    <div class="form-selection" id="default-select">
                                        <select name="education">
                                            <option value disabled selected>Education</option>
                                            <option value="SSC">SSC</option>
                                            <option value="HSC">HSC</option>
                                            <option value="Graduation">Graduation</option>
                                            <option value="Graduation">Diploma</option>
                                            <option value="Post_Graduation">Post Graduation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon" for="dropdown"><i class="fa fa-language" aria-hidden="true">Language</i></label>
                                    <div class="form-selection" id="dropdown">
                                        <select name="medium">
                                            <option value disabled selected>Language</option>
                                            <option value="Marathi">Marathi</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Gujrati">Gujrati</option>
                                            <option value="English">English</option>
                                            <option value="English">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon" for="listbox"><i class="fa fa-percent" aria-hidden="true">    Percentage</i></label>

                                    <div class="form-selection" id="listbox">
                                        <select name="percentage" size="5" style="height: auto;">
                                            <option value disabled selected>percentage</option>
                                            <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon" for="dropdown"><i class="fas fa-calendar-alt" aria-hidden="true">   Passing Year</i></label>

                                    <div class="form-selection" id="dropdown">
                                        <select name="year">
                                            <option value disabled selected>year</option>
                                            <option value="1800">1800</option><option value="1801">1801</option><option value="1802">1802</option><option value="1803">1803</option><option value="1804">1804</option><option value="1805">1805</option><option value="1806">1806</option><option value="1807">1807</option><option value="1808">1808</option><option value="1809">1809</option><option value="1810">1810</option><option value="1811">1811</option><option value="1812">1812</option><option value="1813">1813</option><option value="1814">1814</option><option value="1815">1815</option><option value="1816">1816</option><option value="1817">1817</option><option value="1818">1818</option><option value="1819">1819</option><option value="1820">1820</option><option value="1821">1821</option><option value="1822">1822</option><option value="1823">1823</option><option value="1824">1824</option><option value="1825">1825</option><option value="1826">1826</option><option value="1827">1827</option><option value="1828">1828</option><option value="1829">1829</option><option value="1830">1830</option><option value="1831">1831</option><option value="1832">1832</option><option value="1833">1833</option><option value="1834">1834</option><option value="1835">1835</option><option value="1836">1836</option><option value="1837">1837</option><option value="1838">1838</option><option value="1839">1839</option><option value="1840">1840</option><option value="1841">1841</option><option value="1842">1842</option><option value="1843">1843</option><option value="1844">1844</option><option value="1845">1845</option><option value="1846">1846</option><option value="1847">1847</option><option value="1848">1848</option><option value="1849">1849</option><option value="1850">1850</option><option value="1851">1851</option><option value="1852">1852</option><option value="1853">1853</option><option value="1854">1854</option><option value="1855">1855</option><option value="1856">1856</option><option value="1857">1857</option><option value="1858">1858</option><option value="1859">1859</option><option value="1860">1860</option><option value="1861">1861</option><option value="1862">1862</option><option value="1863">1863</option><option value="1864">1864</option><option value="1865">1865</option><option value="1866">1866</option><option value="1867">1867</option><option value="1868">1868</option><option value="1869">1869</option><option value="1870">1870</option><option value="1871">1871</option><option value="1872">1872</option><option value="1873">1873</option><option value="1874">1874</option><option value="1875">1875</option><option value="1876">1876</option><option value="1877">1877</option><option value="1878">1878</option><option value="1879">1879</option><option value="1880">1880</option><option value="1881">1881</option><option value="1882">1882</option><option value="1883">1883</option><option value="1884">1884</option><option value="1885">1885</option><option value="1886">1886</option><option value="1887">1887</option><option value="1888">1888</option><option value="1889">1889</option><option value="1890">1890</option><option value="1891">1891</option><option value="1892">1892</option><option value="1893">1893</option><option value="1894">1894</option><option value="1895">1895</option><option value="1896">1896</option><option value="1897">1897</option><option value="1898">1898</option><option value="1899">1899</option><option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option>                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-input col-xl-3">
                                    <input type="text" name="Flat_no" placeholder="Wing / Flat no" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Wing / Flat no'">
                                </div>
                                <div class="form-input col-xl-3">
                                    <input type="text" name="Building" placeholder="Building / Society"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Building / Society'">
                                </div>
                                <div class="form-input col-xl-3">
                                    <input type="text" name="Area" placeholder="Area" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Area'">
                                </div>
                                <div class="form-input col-xl-3">
                                    <input type="text" name="City"  placeholder="City"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'">
                                </div>
                                <div class="form-input col-sm-6">
                                    <input type="text" name="Landmark" placeholder="Landmark"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Landmark'">
                                </div>

                                <div class="form-input col-sm-6">
                                                                <!--<label for="pincode">PIN Code :<span style="color:red;"> *</span></label>-->
                                    <input type="text"  id="pincode" name="pincode"
                                           placeholder="Enter PIN code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PIN code'" required/>     
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-input col-xl-3">
                                    <label><i class="fa fa-birthday-cake"></i>  Date of Birth</label>
                                    <input type="date" name="dob" id="dobError" placeholder="Date Of Birth">
                                </div>
                                <div class="form-input col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon"><i class="fas fa-tint" aria-hidden="true">   Blood Group</i></label>
                                    <div class="form-selection" id="default-select">
                                        <select name="BloodGroup" size="3">
                                            <option value disabled selected>Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-input  col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon"><i class="fa fa-globe" aria-hidden="true">   Country</i></label>

                                    <div class="form-selection" id="default-select">
                                        <select name="country">
                                            <option value disabled selected>Select Country</option>

                                            <option value="India">India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input col-xl-3 input-group-icon-outline-primary text-dark" >
                                    <label class="icon" for="dropdown"><i class="fa fa-globe" aria-hidden="true">   State</i></label>

                                    <div class="form-selection" id="dropdown">
                                        <select name="state" id="stateSelect" size="3">
                                            <option value disabled selected>Select State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chattisgarh">Chattisgarh</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jarkhand">Jarkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhaya Pradesh">Madhaya Pradesh</option>
                                            <option value="Maharastra">Maharastra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisa">Odisa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-input col-sm-6">
                                    <!--<label>Reference By : <span style="color:red;"> *</span></label>-->
                                    <input type="text" name="reference" placeholder="Reference by" 
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Refrence by'">
                                </div>

                                <div class="form-input col-sm-6">
                                    <label for="choose-file" class="custom-file-upload" id="choose-file-label"><i class="fa">&#xf1c5;</i>  Upload your Photo</label>
                                    <input type="file" name="file" id="choose-file" style="display: none;">
                                    <!--<input type="submit" name="submit" value="Upload Photo" required/>-->
                                    <div id="fileError" style="color: #1f2b7b; font-weight: bold;"></div>
                                </div>
                            </div>
                            <!--Gender selection part start-->

                            <div class="form-check">
                                <br><br>
                                <!--time slot start-->
                                <div class="container row">
                                    <div class="col-xl-6">
                                        <label class="fw-bolder"><span style="color:red;">* </span> Borivali Branch :</label>
                                                                                    <style>
                                                .bprimary-checkbox-t0{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t0 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t0 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t0 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t0 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t0">
                                                    <input type="checkbox" value="08:00 AM - 09:00 AM (3 months 0 days)" name="BbranchValue[]" id="bprimary-checkbox-t0" onchange="document.getElementById('bbatch_id35').value === '35' ? document.getElementById('bbatch_id35').value = 'NA' : document.getElementById('bbatch_id35').value =35">
                                                    <label for="bprimary-checkbox-t0"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id35" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">08:00 AM - 09:00 AM (3 months 0 days)</span>
                                            </div>
                                                                                        <style>
                                                .bprimary-checkbox-t1{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t1 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t1 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t1 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t1 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t1">
                                                    <input type="checkbox" value="11:00 AM - 01:00 AM (1 months 15 days)" name="BbranchValue[]" id="bprimary-checkbox-t1" onchange="document.getElementById('bbatch_id36').value === '36' ? document.getElementById('bbatch_id36').value = 'NA' : document.getElementById('bbatch_id36').value =36">
                                                    <label for="bprimary-checkbox-t1"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id36" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">11:00 AM - 01:00 AM (1 months 15 days)</span>
                                            </div>
                                                                                        <style>
                                                .bprimary-checkbox-t2{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t2 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t2 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t2 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t2 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t2">
                                                    <input type="checkbox" value="11:00 AM - 01:00 PM (1 months 15 days)" name="BbranchValue[]" id="bprimary-checkbox-t2" onchange="document.getElementById('bbatch_id39').value === '39' ? document.getElementById('bbatch_id39').value = 'NA' : document.getElementById('bbatch_id39').value =39">
                                                    <label for="bprimary-checkbox-t2"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id39" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">11:00 AM - 01:00 PM (1 months 15 days)</span>
                                            </div>
                                                                                        <style>
                                                .bprimary-checkbox-t3{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t3 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t3 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t3 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t3 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t3">
                                                    <input type="checkbox" value="09:00 AM - 10:00 AM (3 months 0 days)" name="BbranchValue[]" id="bprimary-checkbox-t3" onchange="document.getElementById('bbatch_id40').value === '40' ? document.getElementById('bbatch_id40').value = 'NA' : document.getElementById('bbatch_id40').value =40">
                                                    <label for="bprimary-checkbox-t3"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id40" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">09:00 AM - 10:00 AM (3 months 0 days)</span>
                                            </div>
                                                                                        <style>
                                                .bprimary-checkbox-t4{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t4 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t4 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t4 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t4 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t4">
                                                    <input type="checkbox" value="11:00 AM - 01:00 PM (1 months 15 days)" name="BbranchValue[]" id="bprimary-checkbox-t4" onchange="document.getElementById('bbatch_id43').value === '43' ? document.getElementById('bbatch_id43').value = 'NA' : document.getElementById('bbatch_id43').value =43">
                                                    <label for="bprimary-checkbox-t4"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id43" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">11:00 AM - 01:00 PM (1 months 15 days)</span>
                                            </div>
                                                                                        <style>
                                                .bprimary-checkbox-t5{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .bprimary-checkbox-t5 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .bprimary-checkbox-t5 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .bprimary-checkbox-t5 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .bprimary-checkbox-t5 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="bprimary-checkbox-t5">
                                                    <input type="checkbox" value="09:00 AM - 10:00 AM (3 months 0 days)" name="BbranchValue[]" id="bprimary-checkbox-t5" onchange="document.getElementById('bbatch_id44').value === '44' ? document.getElementById('bbatch_id44').value = 'NA' : document.getElementById('bbatch_id44').value =44">
                                                    <label for="bprimary-checkbox-t5"></label>
                                                    <input type="hidden" name="bbatch_idhdn[]" id="bbatch_id44" value='NA'> <!-- Hidden input field for batch_id -->
                                                </div>
                                                <span class="lblchkbx">09:00 AM - 10:00 AM (3 months 0 days)</span>
                                            </div>
                                                                                </div>

                                    <!--time slot 2 start-->
                                    <div class="col-xl-6">
                                        <label class="fw-bolder"><span style="color:red;">* </span> Mulund Branch <u>[Only for Sunday]</u></label>
                                                                                    <style>
                                                .mprimary-checkbox-t0{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .mprimary-checkbox-t0 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .mprimary-checkbox-t0 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .mprimary-checkbox-t0 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .mprimary-checkbox-t0 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="mprimary-checkbox-t0">
                                                    <input type="checkbox"  value="10:30 AM - 01:30 PM (5 months 0 days)" name="MbranchValue[]" id="mprimary-checkbox-t0" onchange="document.getElementById('mbatch_id41').value === '41' ? document.getElementById('mbatch_id41').value = 'NA' : document.getElementById('mbatch_id41').value =41">
                                                    <label for="mprimary-checkbox-t0"></label>
                                                    <input type="hidden" name="mbatch_idhdn[]" id="mbatch_id41" value='NA' >
                                                </div>
                                                <span class="lblchkbx">10:30 AM - 01:30 PM (5 months 0 days)</span>
                                            </div>
                                                                                        <style>
                                                .mprimary-checkbox-t1{
                                                    top: 3px;
                                                    width:16px;
                                                    height:16px;
                                                    border-radius:3px;
                                                    background:#f9f9ff;
                                                    position:relative;
                                                    cursor:pointer
                                                }
                                                .mprimary-checkbox-t1 input{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    opacity:0;
                                                }
                                                .mprimary-checkbox-t1 input+label{
                                                    position:absolute;
                                                    left:0;
                                                    top:0;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;
                                                    border-radius:3px;
                                                    cursor:pointer;
                                                    border:1px solid #f1f1f1
                                                }
                                                .mprimary-checkbox-t1 input+label+span{
                                                    position:absolute;
                                                    left:25px;
                                                    top:5px;
                                                    right:0;
                                                    bottom:0;
                                                    width:100%;
                                                    height:100%;

                                                }
                                                .lblchkbx{

                                                    position: relative;
                                                    top:-17px;
                                                    left:20px;

                                                }
                                                .mprimary-checkbox-t1 input:checked+label{
                                                    background:url(assets/img/elements/primary-check.png) no-repeat center center/cover;
                                                    border:none
                                                }

                                            </style>
                                            <div class="lblchkbx1">
                                                <div class="mprimary-checkbox-t1">
                                                    <input type="checkbox"  value="02:30 PM - 05:30 PM (5 months 0 days)" name="MbranchValue[]" id="mprimary-checkbox-t1" onchange="document.getElementById('mbatch_id42').value === '42' ? document.getElementById('mbatch_id42').value = 'NA' : document.getElementById('mbatch_id42').value =42">
                                                    <label for="mprimary-checkbox-t1"></label>
                                                    <input type="hidden" name="mbatch_idhdn[]" id="mbatch_id42" value='NA' >
                                                </div>
                                                <span class="lblchkbx">02:30 PM - 05:30 PM (5 months 0 days)</span>
                                            </div>
                                                                                </div>
                                </div>

                                <!--time slot end-->

                                <div class="form-input">
                                            <input type="submit" name="submit" value="Submit">
                                </div>
                                <a href="login.php" class="registration">Login</a>
                            </div>
                        </div>

                    </form>
                            </section>
        </main>
        <!--Footer start-->
        <footer id="footer"></footer>
        <!--Footer end-->
        <div id="back-top">
            <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/jquery.slicknav.min.js"></script>
        <!-- Video bg -->
        <script src="./assets/js/jquery.vide.js"></script>
        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>
        <script src="./assets/js/gijgo.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.barfiller.js"></script>
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>
        <script src="./assets/js/jquery.countdown.min.js"></script>
        <script src="./assets/js/hover-direction-snake.min.js"></script>
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script src="assets/js/updates.js"></script>
    </body>
</html>
