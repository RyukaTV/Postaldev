<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postaldev | Suivre un colis</title>
</head>
<body>
    <h1>Suivi d'un Colis</h1>

    <form action="" method="post">
        @csrf
        <input type="text" name="tracking_number" placeholder="Numero de suivi">
        <button type="submit">Rechercher</button>
    </form>

    @if (isset($parcel)) 
        <p>Colis trouvé ! {{$parcel->weight}}kg</p>
        <p>Etat du colis :  {{$parcel->status}}</p>
    @endif 

    <a href="/">Retour</a>
</body>
</html>