<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Subjek: {{ $data['subject'] }}</p>
    <p>Pesan: {{ $data['message'] }}</p>
</body>
</html>
