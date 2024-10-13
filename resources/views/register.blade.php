<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postaldev | Nouveau colis</title>
</head>
<body>
    <h1>Enregitrer un colis</h1>

    <form action="" method="post">
        @csrf
        <label for="address_dep">Adresse de départ</label>
        <input type="text" name="address_dep" placeholder="1 rue des papillons"><br/>
        
        <label for="address_arr">Adresse d'arrivée</label>
        <input type="text" name="address_arr" placeholder="22 rue des oiseaux"><br/>

        
        <label for="weight">Poids du colis (en kilogramme)</label>
        <input type="number" name="weight" placeholder="20"><br/>

        <button type="submit">Envoyer</button>
    </form>

    @if (isset(message))
        <p>{{$message}}</p>

    <a href="/">revenir</a>
</body>
</html>