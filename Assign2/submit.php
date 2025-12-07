<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = nl2br(htmlspecialchars($_POST['address']));

    $course = htmlspecialchars($_POST['course']);
    $batch = htmlspecialchars($_POST['batch']);
    $mode = htmlspecialchars($_POST['mode']);
    $duration = htmlspecialchars($_POST['duration']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f1e8; /* Cream */
            color: #4e342e; /* Dark brown */
        }

        header {
            background-color: #6d4c41; 
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 26px;
            font-weight: bold;
        }

        .result-box {
            width: 60%;
            margin: 40px auto;
            background: #fff7ee; /* light cream */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.25);
            line-height: 1.7;
        }

        h3 {
            text-align: center;
            color: #6d4c41;
            margin-bottom: 20px;
            font-size: 28px;
        }

        strong {
            color: #6d4c41;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ccbea8;
            margin: 25px 0;
        }

        .btn-home {
            display: block;
            width: 200px;
            margin: 30px auto 10px;
            padding: 12px 20px;
            background-color: #8d6e63;
            color: white;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }

        .btn-home:hover {
            background-color: #6d4c41;
            transform: scale(1.05);
        }
    </style>

</head>

<body>

<header>Application Submitted</header>

<div class="result-box">
    <h3>Registration Successful!</h3>

    <p><strong>Full Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Address:</strong><br><?php echo $address; ?></p>

    <hr>

    <p><strong>Course Selected:</strong> <?php echo $course; ?></p>
    <p><strong>Preferred Batch:</strong> <?php echo $batch; ?></p>
    <p><strong>Training Mode:</strong> <?php echo $mode; ?></p>
    <p><strong>Duration:</strong> <?php echo $duration; ?></p>

    <a href="index.html" class="btn-home">Go to Home</a>
</div>

</body>
</html>
