<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Resume</title>
        
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" href="style.css">
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
           
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
    </head>
    <body>
       <div class="jumbotron text-center">
               <h1>Your Resume</h1>
       </div>
        <div class="container">
<table class="table group-form table-bordered">
    <tr>
       
        <td colspan="5">
                    <?php
                        echo  "<h1>";
                            echo htmlspecialchars($_POST['fname'])  , ' ', htmlspecialchars($_POST['lname']);
                        echo  "</h1>";
                    ?> 
            
                    <?php
                        echo  "<h5>";
                            echo htmlspecialchars($_POST['address']);
                        echo  "</h5>";
                    ?>
            <br>
                    <?php
                        echo htmlspecialchars($_POST['mail']);
                    ?> <br>
            
                    <?php
                        echo htmlspecialchars($_POST['number']);
                    ?>     
        </td> 
    </tr>
    
    <tr style="border-top: 0">
        <td colspan="5" style="border-top: 0"><br>
           <h3>Personal Info</h3> 
        </td>
    </tr>
       <tr>   
        <td>
            <h6>CNIC</h6>
        </td>
        <td colspan="4">
                    <?php
                        echo htmlspecialchars($_POST['cnic']);
                    ?> 
        </td>
    </tr>
          
          
           <tr>   
        <td>
            <h6>Passport Number</h6>
        </td>
        <td colspan="4">
                    <?php
                        echo htmlspecialchars($_POST['pnumber']);
                    ?> 
        </td>
    </tr>
         
          
           <tr>   
        <td>
            <h6>DOB</h6>
        </td>
        <td colspan="4">
                    <?php
                        echo htmlspecialchars($_POST['birthday']);
                    ?> 
        </td>
    </tr>
    
           <tr>   
        <td>
            <h6>Gender</h6>
        </td>
        <td colspan="4">
                    <?php
                        echo htmlspecialchars($_POST['gender']);
                    ?> 
        </td>
    </tr>
    
               <tr>   
        <td>
            <h6>Language</h6>
        </td>
        <td colspan="3">
                    <?php
                        echo htmlspecialchars($_POST['language']);
                    ?> 
        </td>
                <td>
                    <?php
                        echo htmlspecialchars($_POST['langlevel']);
                    ?> 
        </td>
    </tr>                              <tr>   
        <td>
            <h6>Language</h6>
        </td>
        <td colspan="3">
                    <?php
                        echo htmlspecialchars($_POST['language2']);
                    ?> 
        </td>
                <td>
                    <?php
                        echo htmlspecialchars($_POST['langlevel2']);
                    ?> 
        </td>
    </tr>
    
    
               <tr>   
        <td>
            <h6>Profile</h6>
        </td>
        <td colspan="4">
                    <?php
                        echo htmlspecialchars($_POST['info']);
                    ?> 
        </td>
    </tr>
    
     <tr style="border-top: 0">
        <td colspan="5" style="border-top: 0"><br>
           <h3>Academics</h3> 
        </td>
    </tr>
                    <tr style="text-align: center">
             
                    <td>
                        <h5>Degree Title</h5>
                    </td>
                    
                    <td>
                        <h5>Institue Name</h5>
                    </td>
                    <td>
                        <h5>Grade/CGPA</h5>
                    </td>
                    <td>
                        <h5>From</h5>
                    </td>
                    <td>
                       <h5>To</h5>
                    </td>
                   </tr>
                   
                   
                   <tr style="text-align: center">
                        <td>
                <h6>Bachelors</h6>
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['insname']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['grade']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['begin']);
                            ?> 
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['end']);
                            ?>  
                       </td>
                   </tr>
                   
                <tr style="text-align: center">
                        <td>
                <h6>Intermediate / A levels</h6>
                        </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['insname1']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['grade1']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['begin1']);
                            ?> 
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['end1']);
                            ?>  
                       </td>
                </tr>
                <tr style="text-align: center">
                        <td>
                <h6>Matriculation / O Levels</h6>
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['insname2']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['grade2']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['begin2']);
                            ?> 
                       </td>
                       <td>
                            <?php
                echo htmlspecialchars($_POST['end2']);
                            ?>  
                    </td>
                </tr>
                   
                <tr>
                <td colspan="5" style="border-top: 0"><h4><br><b>Experience</b></h4></td>
                </tr>  
                <tr style="text-align: center">
                    <td>
                        <h5>Company Name</h5>
                    </td>
                    
                    <td>
                        <h5>Position</h5>
                    </td>
                    <td>
                        <h5>From</h5>
                    </td>
                    <td>
                        <h5>To</h5>
                    </td>
                    <td>
                        <h5>Job Details</h5>
                    </td>
                   </tr>
                   
                   <tr style="text-align: center">
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['compname']);
                            ?>
                       </td >
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['position']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['jobstart']);
                            ?>  
                       </td>
                       <td>
                            <?php
                                echo htmlspecialchars($_POST['jobend']);
                            ?> 
                       </td>
                       
                       <td style=" width: 200px; resize: both; overflow: auto;">
                            <?php
                                echo htmlspecialchars($_POST['jobdetails']);
                            ?>  
                       </td>
                   </tr>
                   
 
</table>
        </div>
        

    </body>
    
</html>