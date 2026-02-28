<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Work</title>
    <?php include 'header.php'; ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<section class="container mt-5">
    <h2 class="text-center mb-4">My Projects</h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/porfo.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Portfolio Website</h5>
                    <p class="card-text">Built with Bootstrap and PHP.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/Sms.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">School Management System</h5>
                    <p class="card-text">Developed using PHP & MySQL.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <img src="img/HMS.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Hospital Management System</h5>
                    <p class="card-text">Developed using PHP & MySQL.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
