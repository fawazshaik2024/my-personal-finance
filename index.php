<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2>
        <form action="add_transaction.php" method="post">
            <h3>Add Transaction</h3>
            <input type="text" name="description" placeholder="Description" required>
            <input type="number" name="amount" placeholder="Amount" required>
            <button type="submit">Add Transaction</button>
        </form>
        <form action="add_budget.php" method="post">
            <h3>Add Budget</h3>
            <input type="text" name="category" placeholder="Category" required>
            <input type="number" name="amount" placeholder="Amount" required>
            <button type="submit">Add Budget</button>
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
