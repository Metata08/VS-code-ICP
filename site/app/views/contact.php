<?php require 'layouts/header.php'; ?>
<h1>Contactez-nous</h1>
<form action="<?= BASE_URL ?>contact/submit" method="POST">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Envoyer</button>
</form>
<?php require 'layouts/footer.php'; ?>
