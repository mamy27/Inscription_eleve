<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>

    <div class="signup-container">
        <h2>Inscription</h2>
        <form action="add_student.php" method="POST">
            <input type="text" name="name" placeholder="Entrez votre prénom" required>
            <select name="class" required>
                <option value="">Votre classe</option>
                <option value="Seconde 1">Seconde 1</option>
                <option value="Seconde 2">Seconde 2</option>
                <option value="Première 1">Première 1</option>
                <option value="Terminale 1">Terminale 1</option>
            </select>
            <input type="email" name="email" placeholder="Votre E-mail" required>
            <input type="password" name="password" placeholder="Votre mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
        <a href="students.php"><button>Voir la liste des élèves</button></a>
    </div>


</body>
</html>