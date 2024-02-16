
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_name = "organization-db";
    $db_user = "root";
    $db_pass = "";

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $email = $_POST["email"];
        

        $query = "INSERT INTO client_email_footer (email) 
        VALUES (:email)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();

        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

