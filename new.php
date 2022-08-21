<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="new.css">
    <title>KMI skaičiuoklė</title>

<?php ?>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">KMI skaiciuokle</div>
                    <div class="card-body">
                    <form action="out.php" method="get">
                        <div class="mb-3">
                        <label for="" class="form-label">Svoris (kg):</label>    
                        <input type="text" name="kg" value="" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ūgis (cm):</label>
                            <input type="text" name="cm" value="" class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-warning">Gauti KMI</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        
        

  
</body>
</html>