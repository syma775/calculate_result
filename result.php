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
            height: 700px;
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
                    <h3  style="text-align:center;margin-top:20px">Please Give your Subject Marks</h3>
                    <form action="submit.php" method="POST"> 
                        <div class="mb-3" style="margin-top:30px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputEmail1" class="form-label">Bangla</label>
                            <input type="number" placeholder="Enter Your BanGla Marks" name="bangla" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" style="margin-top:20px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">English</label>
                            <input type="number" placeholder="Enter Your English Marks" name="english" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" style="margin-top:20px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">Mathmatics</label>
                            <input type="number" placeholder="Enter Your Mathmatics Marks" name="Math" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" style="margin-top:20px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">BGS</label>
                            <input type="number" placeholder="Enter Your BGS Marks" name="bgs" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" style="margin-top:20px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">Religion</label>
                            <input type="number"placeholder="Enter Your Religion Marks"  name="religion" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3" style="margin-top:30px;margin-left:20px;margin-right:20px">
                            <label for="exampleInputPassword1" class="form-label">Agricultural Science</label>
                            <input type="number" placeholder="Enter Your Agricultur Science Marks"name="agriculture" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" style="margin-top:30px;margin-left:20px;margin-right:20px;padding:10px 30px" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
         </div>
       </div>
    </div>
</body>
</html>