<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Contact form tutorial</title>
</head>
<body>
    <main>
<form action="form-to-email.php" method="post" class="contact-form">
    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" />
    <textarea class="form-control" name="message" placeholder="Message"></textarea>
    <button type="submit" name="submit">Send Message</button>
</form>
</main>
</body>
</html>
