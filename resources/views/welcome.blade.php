<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postaldev</title>
</head>
<body>
    <h1>Postaldev</h1>
    <img src="/images/delivery-box.png" alt="Image de colis" width="200">
    <p>Bienvenue chez Postalven, le leader du colis en France</p>

    @if($nbParcels > 0)
        <p>Il y a actuellement {{ $nbParcels }} colis en traitement</p>
    @else
        <p>Il n'y a aucun colis en traitement</p>
    @endif

    <a href="/register">Enregitrer un nouveau colis ?</a><br/>
    <a href="/tracking">Suivre un colis ?</a>
</body>
</html>