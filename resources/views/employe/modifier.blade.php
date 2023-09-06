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
                <h1  class="insc">Modifier les informations des employés </h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>

                @endif

                <div class="container">
                    <form class="was-validated form" action="/modifier/traitement" method="post">
                         <!-- Contenu du formulaire -->
                    @csrf

                    <input type="text" class="form-control" id="nom" name="id" style="display :none;" required value="{{ $employes->id }}">

                    <div class="row g-3">
                      <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Ndjodo Mbesse" required value="{{ $employes->nom }}">
                      </div>
                      <div class="col-md-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ulrich" required value="{{ $employes->prenom }}">
                      </div>
                      <div class="col-md-6">
                        <label for="matricule" class="form-label">Matriclue</label>
                        <input type="text" class="form-control" id="matricule" name="matricule" required value="{{ $employes->matricule }}">
                      </div>
                      <div class="col-md-6">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Biteng" required value="{{ $employes->adresse }}">
                      </div>
                      <div class="col-md-6">
                        <label for="sexe" class="form-label">Sexe</label>
                        <select class="form-select" name="sexe" aria-label="Default select example">
                          <option value="Homme" {{ $employes->sexe }}>Homme</option>
                          <option value="Femme" {{ $employes->sexe }}>Femme</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone"  required value="{{ $employes->telephone }}">
                      </div>
                      <div class="col-md-6">
                        <label for="departement" class="form-label">Departement</label>
                        <select class="form-select" name="departement" aria-label="Default select example">
                          <option value="DT"{{ $employes->departement }}>DT</option>
                          <option value="DG" {{ $employes->departement }}>DG</option>
                          <option value="DP" {{ $employes->departement }}>DP</option>
                          <option value="DCI" {{ $employes->departement }}>DCI</option>
                          <option value="DF" {{ $employes->departement }}>DF</option>
                          <option value="DRH" {{ $employes->departement }}>DRH</option>
                          <option value="DR" {{ $employes->departement }}>DR</option>
                          <option value="DAF" {{ $employes->departement }}>DAF</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="profil" class="form-label">Profil</label>
                        <select class="form-select" name="profil" aria-label="Default select example">
                          <option value="aucun" {{ $employes->profil }}>Aucun</option>
                          <option value="gestionnaire" {{ $employes->profil }}>Gestionnaire</option>
                          <option value="administrateur" {{ $employes->profil }}>Administrateur</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="login" name="login" required value="{{ $employes->login }}">
                      </div>
                      <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required value="{{ $employes->password }}">
                      </div>
                      <div class="col-md-6">
                        <label for="statut" class="form-label">Statut</label>
                        <select class="form-select" name="statut" aria-label="Default select example">
                          <option value="1" {{ $employes->statut }}>Activer</option>
                          <option value="0" {{ $employes->statut }}>Desactiver</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                        <a href="/employe" class="btn btn-danger" type="button">Retour</a>
                      </div>
                      <div class="col-md-6">
                        <button class="btn btn-primary centre" type="submit">Modifier</button>
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
