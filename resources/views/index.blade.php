<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Produits disponibles :</h1>

    @if ($produits->isEmpty())
        <p>Aucun produit disponible.</p>
    @else
        <ul>
            @foreach ($produits as $produit)
                <li>
                    {{ $produit->nom }} - {{ $produit->prix }} €
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
