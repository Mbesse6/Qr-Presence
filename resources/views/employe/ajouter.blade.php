<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <title>CRUD EMPLOYE</title>
</head>
<body>

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1  class="insc">Remplir les informations des employés </h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>

                @endif

                <div class="container">
                    <form class="was-validated form" action="/ajouter/traitement" method="post">
                         <!-- Contenu du formulaire -->
                    @csrf
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Ndjodo Mbesse" required>
                      </div>
                      <div class="col-md-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ulrich" required>
                      </div>
                      <div class="col-md-6">
                        <label for="matricule" class="form-label">Matriclue</label>
                        <input type="text" class="form-control" id="matricule" name="matricule" required>
                      </div>
                      <div class="col-md-6">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Biteng" required>
                      </div>
                      <div class="col-md-6">
                        <label for="sexe" class="form-label">Sexe</label>
                        <select class="form-select" name="sexe" aria-label="Default select example">
                          <option selected>Homme</option>
                          <option value="2">Femme</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone"  required>
                      </div>
                      <div class="col-md-6">
                        <label for="departement" class="form-label">Departement</label>
                        <select class="form-select" name="departement" aria-label="Default select example">
                          <option selected>DT</option>
                          <option value="DG">DG</option>
                          <option value="DP">DP</option>
                          <option value="DCI">DCI</option>
                          <option value="DF">DF</option>
                          <option value="DRH">DRH</option>
                          <option value="DR">DR</option>
                          <option value="DAF">DAF</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="profil" class="form-label">Profil</label>
                        <select class="form-select" name="profil" aria-label="Default select example">
                          <option selected>Aucun</option>
                          <option value="gestionnaire">Gestionnaire</option>
                          <option value="administrateur">Administrateur</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                      </div>
                      <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                      </div>
                      <div class="col-md-6">
                        <label for="statut" class="form-label">Statut</label>
                        <select class="form-select" name="statut" aria-label="Default select example">
                          <option value="1">Activer</option>
                          <option value="0">Desactiver</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                        <a href="/employe" class="btn btn-danger" type="button">Retour</a>
                      </div>
                      <div class="col-md-6">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>


            </div>
        </div>
    </div>


</body>
</html>
