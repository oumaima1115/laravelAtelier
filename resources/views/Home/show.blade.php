<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <header>
        <h1>Bienvenue</h1>
    </header>
    
    <main>
        <p>Bienvenue, {{ $name }} !</p>
        <p>Ceci est un exemple de contenu pour votre page.</p>
        <br>
        <form action="result" method="get">
            Pseudo: <input type="text" name="pseudo">
            <input type="submit" value="valider">
        </form>
    </main>
    
</body>
</html>
