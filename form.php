<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
    </head>
    <body>
    <main class="container">
        <h1>Formulaire de contact</h1>

        <?php
        $errors = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $required_fields = ['firstName', 'lastName', 'email', 'phone', 'subject', 'message'];
            foreach ($required_fields as $field) {
                if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
                    $errors[] = "Le champ $field est obligatoire.";
                }
            }

            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Le format de l'email n'est pas valide.";
            }

            if(!empty($errors)) {
                echo '<div><ul>';
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo '</ul></div>';
            } else {
                header('Location: thanks.php');
                exit;
            }
        }
        ?>

        <form  method="post">
            <div>
                <label for="firstName">Nom :</label>
                <input type="text" id="nom" name="firstName" required>
            </div>
            <div>
                <label for="lastName">Prénom :</label>
                <input type="text" id="prenom" name="lastName" required>
            </div>
            <div>
                <label for="email">Courriel :</label>
                <input type="email" id="courriel" name="email" required>
            </div>
            <div>
                <label for="phone">Téléphone :</label>
                <input type="number" id="tel" name="phone" required>
            </div>
            <div>
                <label for="subject">Subject :</label>
                <select id="objet" name="subject" required>
                    <option value="Week-end">Week-end</option>
                    <option value="Vacances">Vacances</option>
                    <option value="RTT">RTT</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>


    </main>

    </body>
    </html>
