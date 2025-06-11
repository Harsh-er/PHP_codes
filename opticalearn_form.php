<!doctype html>
<html>
    <head>
        <title>Opticalearn Admission Form</title>
    </head>
    <style>
        body{
            font-family: "Mulish",sns-serif;
            font-weight: normal;
            font-style: normal;
            font-size: 16px;
            background-color: #808B96;
        }
        .container{
            
           max-width:675px;
           margin: 40px auto;
           padding:30px; 
           background-color: #5d6D7E;
           color: white;
        }
        
        .formcontainer{
            max-width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #f7f9fc;
            border-radius: 8px;
            text-align: center;
            margin-top: -10px;
        }
        
        select{
            width: 80px;
        }
        
        .edu{
            max-width: 100px;
        }
        
        .submit{
            padding-left: 150px;
            padding-right: 150px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-left: 165px;
            border-radius: 15px;
            
            
        }
    </style>
    <body>
        <div class="container">
            <form>
                <h2 class="formcontainer">Admission Form</h2>
            
            <input type="text" placeholder="First Name" name="fn">
            <input type="text" placeholder="Middle Name" name="mn">
            <input type="text" placeholder="Last Name" name="ln">
            <input type="number" placeholder="Phone Number" name="pn">
            <br><br><!-- comment -->
            
            <input class="email" type="email" placeholder="Email Address" name="email"> 
            <b>Select Gender:</b><br>
            <pre>
                   <input type="radio" name="male" value="male">Male <input type="radio" name="female" value="female">Female <input type="radio" name="other" value="other">other 
            </pre>
        
           <b>Education</b>   
           <select class="edu">           
                <option>SSC</option> 
                <option>HSC</option>
                <option>Graduation</option>
                <option>Diploma</option>
                <option>Post-Graduation</option> 
           </select>
           
           <b>Language</b>
           <select class="edu">
                <option>Marathi</option>
                <option>Hindi</option>
                <option>Gujarati</option>
                <option>English</option>
                <option>Others</option>
           </select>
           
           <b>%Percentage</b>
           <select class="edu">
               <?php
               for($i=1;$i<=100;$i++)
               {
                   echo '<option>'.$i.'</option>';
               }
               ?>
           </select>
           
           <b>Passing Year</b>
           <select class="edu">
               <?php
               for($i=2015;$i<=2025;$i++)
               {
                   echo '<option>'.$i.'</option>';
               }
               ?>  
           </select> 
           <br><br><!-- comment -->
           
           <input type="text" placeholder="Wing/Flat no" name="flat">
           <input type="text" placeholder="Building/Society" name="bldg">
           <input type="text" placeholder="Area" name="area"> 
           <input type="text" placeholder="City" name="city">
           <br><br><!-- comment -->
           
           <input type="text" placeholder="Landmark" name="land">
           <input type="text" placeholder="Enter PIN Code" name="pin">
           <br><br><!-- comment -->
           
           <b>Date of birth</b>
           <input type="date" name="dob">
           <b>Blood Grp</b>
           <select class="edu">
               <option>O+</option>
               <option>O-</option> 
               <option>A+</option>
               <option>A-</option>
               <option>B+</option>
               <option>B-</option>
               <option>AB+</option> 
               <option>AB-</option>
           </select>
           <b>Country</b>
           <select class="edu">
               <option>India</option>
           </select>
           <b>State</b><!-- comment -->
           <select class="edu">
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
           <br><br><!-- comment -->
           
           <input type="text" placeholder="Reference By" name="ref"><!-- comment -->
           <input type="file" placeholder="Upload Your Photo" name="photo">
           <br><br><!-- comment -->
           <button type="submit" class="submit">Submit</button>
           
           </form>
       </div>
    </body>
</html>


