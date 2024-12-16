<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="input.php" method="GET">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone</label>
        <input type="phone" id="phone" name="phone" required>

        <label for="gender">gender</label>
        <input type="text" id="gender" name="gender" required>

        <button type="submit">Submit</button>
    </form>

    <?php
        include "connDb.php"
    ?>

</body>
</html>
