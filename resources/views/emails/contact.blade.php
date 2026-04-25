<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nouveau message du formulaire de contact</title>
</head>
<body>
    <h2>Nouveau message de {{ $data['name'] }}</h2>

    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Téléphone :</strong> {{ $data['phone'] }}</p>
    <p><strong>Service demandé :</strong> {{ $data['service'] }}</p>
    <p><strong>Message :</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
