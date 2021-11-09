<!DOCTYPE HTML>
<html>

<head>
</head>

<body>
    <?php
        $lastname = $firstname = $email = $phone = $subject = $message = "";
    ?>

    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname" required value=<?php echo $lastname?>>
            <br><br>
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname" required value=<?php echo $firstname?>>
            <br><br>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" required value=<?php echo $email?>>
            <br><br>
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone" required value=<?php echo $phone?>>
            <br><br>
        </div>
        <div>
            <label for="subject">Sujet :</label>
            <select id="subject" name="user_subject" required>
                <option <?php if (isset($subject) && $subject=="info") echo "checked";?> value="info">Demande d'informations</option>
                <option <?php if (isset($subject) && $subject=="complaint") echo "checked";?> value="complaint">Plainte</option>
                <option <?php if (isset($subject) && $subject=="remark") echo "checked";?> value="remark">Remarque</option>
                <option <?php if (isset($subject) && $subject=="other") echo "checked";?> value="other">Autre</option>
            </select>
            <br><br>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required value=<?php echo $message?>></textarea>
            <br><br>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>
</html>