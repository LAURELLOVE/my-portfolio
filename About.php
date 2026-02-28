<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <?php include 'header.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- About Section -->
<section class="container mt-5">
    <div class="row align-items-center">

        <div class="col-md-4 text-center">
            <img src="img/Laurelpic.jpeg"
                 class="img-fluid rounded shadow"
                 alt="Bennash Mah"
                 width="250">
        </div>

        <div class="col-md-8">
            <h2>About Me</h2>
            <p>
                Hello! I'm TAMBE EGBE LAURA, a passionate web developer from Cameroon.
                I specialize in building responsive and dynamic websites using
                HTML, CSS, Bootstrap, PHP, and MySQL.
            </p>

            <p>
                I enjoy solving real-world problems with technology and
                continuously improving my coding skills.
            </p>
        </div>

    </div>
</section>

<!-- Skills Section -->
<section class="bg-light py-5 mt-5">
    <div class="container text-center">
        <h3>My Skills</h3>

        <div class="row mt-4">

            <div class="col-md-3">
                <h5>HTML</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width:90%"></div>
                </div>
            </div>

            <div class="col-md-3">
                <h5>CSS / Bootstrap</h5>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width:85%"></div>
                </div>
            </div>

            <div class="col-md-3">
                <h5>PHP</h5>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width:75%"></div>
                </div>
            </div>

            <div class="col-md-3">
                <h5>MySQL</h5>
                <div class="progress">
                    <div class="progress-bar bg-danger" style="width:70%"></div>
                </div>
            </div>

        </div>
    </div>
</section>
    <?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
