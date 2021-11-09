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
        $lastnameErr = $firstnameErr = $emailErr = $telErr = $subjectErr = $messageErr = "";
        $lastname = $firstname = $email = $phone = $subject = $message = "";

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
    ?>

    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname" value=<?php echo $lastname?>>
            <br>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname" value=<?php echo $firstname?>>
            <br>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" value=<?php echo $email?>>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone" value=<?php echo $phone?>>
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select id="subject" name="user_subject">
                <option <?php if (isset($subject) && $subject=="info") echo "checked";?> value="info">Demande d'informations</option>
                <option <?php if (isset($subject) && $subject=="complaint") echo "checked";?> value="complaint">Plainte</option>
                <option <?php if (isset($subject) && $subject=="remark") echo "checked";?> value="remark">Remarque</option>
                <option <?php if (isset($subject) && $subject=="other") echo "checked";?> value="other">Autre</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" value=<?php echo $message?>></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>
