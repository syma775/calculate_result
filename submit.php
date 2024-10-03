<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Sheet</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .box{
            height: 600px;
            width:80%;
            background-color:white;
            margin:auto;
            margin-top:100px;
            border:2px solid white;
            border-radius:10px;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="background: linear-gradient(to left, #82e0aa 50%, #f1c40f 50%);;width:100%;height:1100px;margin-left:auto;">
       <div class="col-md-12">
         <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="box">
                    <h3  style="text-align:center;margin-top:40px">This is Your Result</h3>

                    <?php
                     $bangla = $_POST["bangla"];
                     echo ("<p style='text-align:center;margin-top:30px;'>Bangla Marks: ".$bangla."</p>");
                     $english = $_POST["english"];
                     echo ("<p style='text-align:center;margin-top:30px;'>English Marks: ".$english."</p>");
                     $math = $_POST["Math"];
                     echo ("<p style='text-align:center;margin-top:30px;'>Mathmatics Marks: ". $math."</p>");
                     $bgs = $_POST["bgs"];
                     echo ("<p style='text-align:center;margin-top:30px;'>BGS Marks: ".$bgs."</p>");
                     $religion = $_POST["religion"];
                     echo ("<p style='text-align:center;margin-top:30px;'>Religion Marks: ".$religion."</p>");
                     $agriculture = $_POST["agriculture"];
                     echo ("<p style='text-align:center;margin-top:30px;'>Agriculture Science Marks: ".$agriculture."</p>");
                     $total =(($bangla+$english+$math+$bgs+$religion+$agriculture)/6);
                     echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;'>Total Marks: ".$total."</h3>");
                     

                     $marks = $total;
                     if($marks<0 || $bangla<0 || $english<0 || $math<0 || $bgs<0 || $religion<0 || $agriculture<0 )
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;color:red'>Please Enter valid number </h3>");
                    }
                    else if($marks<50 || $bangla<50 || $english<50 || $math<50 || $bgs<50 || $religion<50 || $agriculture<50)
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;color:red'>Sorry You are Fail </h3>");
                    }
                    else if($marks>=50 && $marks<=59)
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;'>Your Grade: B </h3>");
                    }
                    else if($marks>=60 && $marks<=69)
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;'>Your Grade: A- </h3>");
                    }
                    else if($marks>=70 && $marks<=79)
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;'>Your Grade: A </h3>");
                    }
                    else if($marks>=80 && $marks<=100)
                    {
                        echo ("<h3 style='font-size:bold;text-align:center;margin-top:30px;color:green;'>Your Grade: A+ </h3>");
                    }

                    ?>
                </div>
            </div>
            <div class="col-md-3"></div>
          <div>
        <div>
</body>
</html>