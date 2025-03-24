<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Contact</h1>
    
    <form method="post" action="includes/send-email.php">
        <label for="name">Nume</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subject">Subiect</label>
        <input type="text" name="subject" id="subject" required>

        <label for="messsage">Mesaj</label>
        <textarea  name="message" id="message" required></textarea>

        <br>

        <button>Trimite</button>

    </form>
</body>
</html>