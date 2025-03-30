<!DOCTYPE html>
<html>
<head>
    <title>Registration Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            width: 100%;
        }
        .section-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form {
            width: 100%;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .radio-group {
            margin: 5px 0;
        }
        .radio-group label {
            display: inline;
            margin-right: 15px;
        }
        .back-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
        $lastname = isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
        $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : "";
        $dob = isset($_POST["dob"]) ? htmlspecialchars($_POST["dob"]) : "";
        
       
        ?>
        <section id="signup" class="contact-section">
            <div class="container">
                <h2 class="section-title">Registration Information</h2>
                <form id="signupForm" class="contact-form">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo $email; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" value="<?php echo $password; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio-group">
                            <input type="radio" id="male" name="gender" value="male" <?php echo ($gender == "male") ? "checked" : ""; ?> disabled>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female" <?php echo ($gender == "female") ? "checked" : ""; ?> disabled>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" readonly>
                    </div>
                    
                    <button type="button" class="back-btn" onclick="window.location.href='index.php'">Back to Form</button>
                </form>
            </div>
        </section>
        <?php
    } else {
        
        echo "<div class='container'><p>No form data submitted. <a href='index.php'>Go to the registration form</a>.</p></div>";
    }
    ?>
</body>
</html>
