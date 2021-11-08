<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_lastname">
        <br>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname">
        <br>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="user_subject">
            <option value="info">Demande d'informations</option>
            <option value="complaint">Plainte</option>
            <option value="remark">Remarque</option>
            <option value="other">Autre</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>


<!-- Use form with GET method. Pass parameter in URL -->
<?php
// var_dump($_POST);
// echo $_GET['user_name'];
?>