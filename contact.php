<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    
<?php
include 'header.php';    // includes navbar, CSS
include 'config.php';    // connects to your MySQL database

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");

    if($stmt){
        $stmt->bind_param("sss", $name, $email, $message);

        if($stmt->execute()){
            echo "Message saved successfully!";
        } else {
            echo "Execute Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Prepare Error: " . $conn->error;
    }
}
?>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="container mt-5">
    <h2 class="text-center mb-4">Contact Me</h2>

    <form method="POST">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" required>Send Message</button>
    </form>
</section>


    <?php include 'footer.php'; ?>
</body>
</html>
