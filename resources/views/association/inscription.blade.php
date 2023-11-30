<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inscription Client</title>
</head>
<h1>Inscription</h1>
<body class="d-flex justify-content-center align-items-center vh-100">
    <form method="POST" action="/formulaireInscriptionAssociation" class="p-3 border rounded" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">slogan</label>
            <input type="text" class="form-control" name="slogan" id="prenom" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Logo</label>
            <input type="file" class="form-control" name="logo" id="telephone" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Date Creation</label>
            <input type="date" class="form-control" name="datecreation" id="telephone" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" class="btn btn-primary ">Enregistrer</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
