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
                <h1>Liste des employés <a href="/ajouter" class="btn btn-primary">Ajouter un employé</a></h1>
                <hr>


                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Penom</th>
                            <th>Matricule</th>
                            <th>Adresse</th>
                            <th>Departement</th>
                            <th>Telephone</th>
                            <th>Sexe</th>
                            <th>Profil</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $employe )
                        <tr>
                            <td>{{ $employe->id }}</td>
                            <td>{{ $employe->nom }}</td>
                            <td>{{ $employe->prenom }}</td>
                            <td>{{ $employe->matricule }}</td>
                            <td>{{ $employe->adresse }}</td>
                            <td>{{ $employe->departement }}</td>
                            <td>{{ $employe->telephone }}</td>
                            <td>{{ $employe->sexe }}</td>
                            <td>{{ $employe->profil }}</td>
                            <td>{{ $employe->statut }}</td>
                            <td>
                                <a href="modifier_employe/{{ $employe->id }}" class="btn btn-secondary">Modifier</a>
                                <a href="#" class="btn btn-success">Activer</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</body>
</html>
