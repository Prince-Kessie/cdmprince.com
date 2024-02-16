
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_name = "organization-db";
    $db_user = "root";
    $db_pass = "";

    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST["username"];
        $password  = $_POST["password"];
        $reset = $_POST["reset"];
        $datat = $_POST["datat"];
       
        

        $query = "INSERT INTO adminuser (username, password, reset_token, date_created) 
        VALUES (:username,:password,:reset,:datat)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':reset', $reset);
        $statement->bindParam(':datat', $datat);
        $statement->execute();

        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

