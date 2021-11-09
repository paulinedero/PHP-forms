<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
        $email = $_POST["user_email"];
        $lastnameErr = $firstnameErr = $emailErr = $telErr = $subjectErr = $messageErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user_lastname"])) {
                $lastnameErr = "Lastname is required";
            }

            if (empty($_POST["user_firstname"])) {
                $firstnameErr = "Firstname is required";
            }
            
            if (empty($_POST["user_email"])) {
                $emailErr = "Email is required";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["user_phone"])) {
                $telErr = "Phone is required";
            }

            if (empty($_POST["user_subject"])) {
                $subjectErr = "Subject is required";
            }

            if (empty($_POST["user_message"])) {
                $messageErr = "Message is required";
            }
        }
    ?>
    <?php
        if ($lastnameErr || $firstnameErr || $emailErr || $telErr ||  $subjectErr || $messageErr ) {
    ?>
            <div class="error"> <?php echo $lastnameErr; ?></div>
            <div class="error"> <?php echo $firstnameErr; ?></div>
            <div class="error"> <?php echo $emailErr; ?></div>
            <div class="error"> <?php echo $telErr; ?></div>
            <div class="error"> <?php echo $subjectErr; ?></div>
            <div class="error"> <?php echo $messageErr; ?></div>
    <?php        
        } else {
    ?>
            <p>
                Merci <?php echo $_POST['user_firstname'] ?> de nous avoir contacté à propos de “<?php echo $_POST['user_subject'] ?>”.<br>
                Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande :<br>
                <?php echo $_POST['user_message'] ?>
            </p>
    <?php
        }
    ?>
</body>
</html>