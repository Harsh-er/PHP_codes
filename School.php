<!doctype html>
<html>
    <head>
        <title>School</title>
    </head>
    <body>
        <?php
        $I = array('1'=>'stud1','2'=>'stud2');
        $II = array('1'=>'stud1','2'=>'stud2');
        $III = array('1'=>'stud1','2'=>'stud2');
        $IV = array('1'=>'stud1','2'=>'stud2');
        $V = array('1'=>'stud1','2'=>'stud2');
        $VI = array('1'=>'stud1','2'=>'stud2');
        $VII = array('1'=>'stud1','2'=>'stud2');
        $VIII = array('1'=>'stud1','2'=>'stud2');
        $IX = array('1'=>'stud1','2'=>'stud2');
        $X = array('1'=>'stud1','2'=>'stud2');
        $FYJC = array('1'=>'stud1','2'=>'stud2');
        $SYJC = array('1'=>'stud1','2'=>'stud2');        
                
        $Pri = array('First'=>$I,
            'Second'=>$II,
            'Third'=>$III,
            'Fourth'=>$IV,
            'Fifth'=>$V);
        
        $Sec = array('Sixth'=>$VI,
            'Seventh'=>$VII,
            'Eight'=>$VIII,
            'Nineth'=>$IX,
            'Tenth'=>$X);
        
        $Sr_Sec = array('FYJC'=>$FYJC,'SYJC'=>$SYJC);
        
        $Students = array('Primary'=>$Pri,'Secondary'=>$Sec,'Sr_Secondary'=>$Sr_Sec);
        
        $Eng = array('1'=>'Eng Teacher 1','2'=>'Eng Teacher 2');
        $Hin = array('1'=>'Hin Teacher 1','2'=>'Hin Teacher 2');
        $Mar = array('1'=>'Mar Teacher 1','2'=>'Mar Teacher 2');
        $Pri_Sub = array ('Eng'=>$Eng,'Hin'=>$Hin,'Mar'=>$Mar);
        
        $Sci = array('1'=>'Sci Teacher 1','2'=>'Sci Teacher 2');
        $Mat = array('1'=>'Mat Teacher 1','2'=>'Mat Teacher 2');
        $S_S = array('1'=>'SS Teacher 1','2'=>'SS Teacher 2');
        $Sec_Sub = array ('Sci'=>$Sci,'Mat'=>$Mat,'S_S'=>$S_S);
        
        $Acc = array('1'=>'Acc Teacher 1','2'=>'Acc Teacher 2');
        $Eco = array('1'=>'Eco Teacher 1','2'=>'Eco Teacher 2');
        $Ocm = array('1'=>'Ocm Teacher 1','2'=>'Ocm Teacher 2');
        $Sr_SecSub = array('Acc'=>$Acc,'Eco'=>$Eco,'Ocm'=>$Ocm);
        
        $Subjects = array('Pri_Sub'=>$Pri_Sub,'Sec_Sub'=>$Sec_Sub,'Sr_SecSub'=>$Sr_SecSub);
        
        $Principals = array('1'=>'Primary  Principal','2'=>'Secondary Principal','3'=>'Sr Sec Principal');
        
        $Tea_Staff = array('Teachers'=>$Subjects,'Principals'=>$Principals);
        
        $Non_Tea_Staff = array('1'=>'Peons','2'=>'Accountants');
        
        $Staff = array('Teaching Staff'=>$Tea_Staff,'Non Teaching Staff'=>$Non_Tea_Staff);
        
        $School = array('Staffs'=>$Staff,'Students'=>$Students,'Subject'=>$Subjects);
        
        echo $School['Staffs']['Teaching Staff']['Teachers']['Sr_SecSub']['Ocm'][0]; 
        echo '<br>';
        echo $School['Staffs']['Teaching Staff']['Principals'][0];
        ?>
    </body>
</html>
