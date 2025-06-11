<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body bgcolor="336699">
        <hr color="yellow">
        <h1 align="center">ADMISSION FORM</h1>
        <hr color="yellow">
        <?php $f_name=$_POST['first'];$m_name=$_POST['middle'];$l_name=$_POST['last']; ?>
        
        <?php $dob=$_POST['dob'];$gen=$_POST['option'];$add=$_POST['Address'];$edu=$_POST['EQ']; ?>
            
        <?php $cntct=$_POST['contact_no'];$email=$_POST['email_id'];$pm=$_POST['MPM'];$height=$_POST['height']; ?>
        
        <?php $weight=$_POST['weight'];$hobby=$_POST['hobby'];$clg=$_POST['clg'];$aadhar=$_POST['aadhar'];$passport=$_POST['pass']; ?>    
        
            <form style="background-color:#9999CC";>
            <h1>Name : <?php echo "$f_name "; echo "$m_name "; echo $l_name; ?></h1>
            <br><br>
            <h1>Date of Birth : <?php echo "$dob"; ?></h1>
            <br><br>
            <h1>Gender : <?php echo "$gen"; ?></h1>
            <br><br>
            <h1>Address : <?php echo "$add"; ?></h1>
            <br><br>
            <h1>Educational Qualification : <?php echo "$edu"; ?></h1>
            <br><br>
            <h1>Contact No : <?php echo "$cntct"; ?></h1>
            <br><br>
            <h1>Email Id : <?php echo "$email"; ?></h1>
            <br><br>
            <h1>Monthly Pocket Money : <?php echo "$pm"; ?></h1>
            <br><br>
            <h1>Height : <?php echo "$height"; ?></h1>
            <br><br>
            <h1>Weight : <?php echo "$weight"; ?></h1>
            <br><br>
            <h1>Hobby : <?php echo "$hobby"; ?></h1>
            <br><br>
            <h1>College : <?php echo "$clg"; ?></h1>
            <br><br>
            <h1>Aadhar Card no  : <?php echo "$aadhar"; ?></h1>
            <br><br>
            <h1>Passport no : <?php echo "$passport"; ?></h1>
            <br><br>
        </form>
    </body>
</html>

