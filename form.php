<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Forms Bootstrap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href='style.css'>
    
</head>

    
<body>        
    <div class="container">
        <div class="page-header">
            <h1>Student Results</h1>
            
        </div>
        
        <div class="row">
            <div class="col-sm-4">
                
                <form method='POST' action=''>
                    <div class='form-group'>
                        <input type="text" id="name" name='name' placeholder='Name' class="form-control">
                    </div>
                    
                
                
            </div>
            
            <div class="col-sm-4">
                <div class='form-group'>
                        <input type="integer" name='id' id="id" placeholder = 'Student ID' class="form-control">
                </div>

            </div>
            
            <div class="col-sm-4">
                <div class='form-group'>
                        <input type="text" name='email' id="email" placeholder = 'Email' class="form-control">
                </div>

            </div>
            
        </div>
        
        <br>

        <h2>Courses</h2>
            

                <div class="row">
                    <div class="col-sm-10">
                    
                    <div class="form-group col-sm-2">
                        <label class="control-label">PHP</label>
                        <input id='php' name='php' type="number" class="form-control">
                        
                    </div>
                    
                    <div class="form-group col-sm-2">
                        <label class="control-label">Java</label>
                        <input id='java' name='java' type="number" class="form-control">
                        
                    </div>
                    
                    <div class="form-group col-sm-2">
                        <label class="control-label">NodeJS</label>
                        <input id='nodejs' name='nodejs' type="number" class="form-control">
                        
                    </div>
                    
                    <div class="form-group col-sm-2">
                        <label class="control-label">Ruby</label>
                        <input id='ruby' name='ruby' type="number" class="form-control">
                        
                    </div>
                    
                    <div class="form-group col-sm-2">
                        <label class="control-label">C++</label>
                        <input id='cplusplus' name='cplusplus' type="number" class="form-control">
                        
                    </div>                
                    <br>
                    

                    </div>
                </div>

                <button class='btn btn-primary' name='submit' id='submit' type='submit'>Compute</button>
            </form>    

<?php if(isset ($student) && $student instanceof \App\Student): ?>
            <div class='success'>Your result has been computed and sent to your email</div>
<?php endif;?>
            
                <!-- <h2> AFCS Final Result Sheet</h2>
        <table class="table table-hover">
            <tr><th>#ID</th> <td> </?= $student->getId() ?></td></tr>
            <tr><th>Name</th> <td></?= $student->getName() ?></td></tr>
            <tr><th>PHP</th> <td></?= $php ?></td></tr>
            <tr><th>JAVA</th> <td></?= $java ?></td></tr>
            <tr><th>C++</th> <td></?= $cplusplus ?></td></tr>
            <tr><th>Ruby</th> <td></?= $ruby ?></td></tr>
            <tr><th>NodeJS</th> <td></?= $nodejs ?></td></tr>
            <tr><th>Total Score</th> <td></?= $student->totalSore() ?></td></tr>
            <tr><th>Average Score</th> <td></?= $student->averageScore() ?></td></tr>
            <tr><th>Grade</th> <td></?= $student->grade() ?></td></tr>
            <tr><th>Final Result</th> <td></?= $student->finalResult() ?></td></tr>
            <tr><th>Remark</th> <td></?= $student->remark() ?></td></tr>
        </table> -->
     

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap/bootstrap.js" ></script>

    
</body>
</html>
