<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $email = $_POST['email'];

    $sql = "UPDATE students SET name='$name', class='$class', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: students.php");
        exit();
    } else {
        echo "Erreur: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier l'élève</title>
</head>
<body>

    <h2>Modifier l'élève</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <input type="text" name="name" value="<?= $student['name'] ?>" required>
        <input type="text" name="class" value="<?= $student['class'] ?>" required>
        <input type="email" name="email" value="<?= $student['email'] ?>" required>
        <button type="submit">Mettre à jour</button>
    </form>

    <a href="students.php">Retour</a>

</body>
</html>