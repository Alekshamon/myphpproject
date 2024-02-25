<form action="thanks.php" method="post">
    <div>
        <label for="firstName">Nom :</label>
        <input type="text" id="nom" name="firstName">
    </div>
    <div>
        <label for="lastName">Prénom :</label>
        <input type="text" id="prenom" name="lastName">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="courriel" name="email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="number" id="tel" name="phone">
    </div>
    <div>
        <label for="subject">Subject :</label>
        <select id="objet" name="subject">
            <option value="Week-end">Week-end</option>
            <option value="Vacances">Vacances</option>
            <option value="RTT">RTT</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>


