<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Accueil</title>
</head>
<body>
    <div class="main-container d-flex ">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-4">
                <h1 class="fs_4"><span class="bg-white text-dark rounded shasow px-2 me-2">Mbess</span><span class="text-white">Presence</span></h1>
                <button class="btn d-md-none d-block close-tn px-1 py-0 text-white"><i class="fal fa-stream"></i> </button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Tableau de bord</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-regular fa-user"></i>Employe</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-briefcase fa-beat-fade"></i>Gestionnaire</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-screwdriver-wrench fa-shake"></i>Administrateur</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-message"></i>Contact</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-question"></i>Aide</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-gear"></i>Parametre</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-bell"></i>Notification</a></li>
            </ul>

        </div>
        <div class="content">

            <div class="container">
                <form  class="login" method="post" action="">
                  <h1 class="insc">CONNEXION</h1>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label for="login" class="form-label">Login</label>
                      <input type="text" class="form-control" id="login" name="login"  required>
                    </div>
                    <div class="col-md-6">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="col-md-6">
                      <label for="profil" class="form-label">Profil</label>
                      <select class="form-select" name="profil" aria-label="Default select example">
                        <option selected>Aucun</option>
                        <option value="3">Gestionnaire</option>
                        <option value="2">Administrateur</option>
                      </select>
                    </div>
                    <div class="centre">
                      <button class="btn btn-primary" type="submit">Connexion</button>
                    </div>
                  </div>
                </form>
              </div>
        </div>

    </div>
    <footer class="bas">
        <h3 class="bastext"> &copy; Copyright Mbesse & Company 2023 | All Rights Reserved </h3>
    </footer>
    <script src="https://cdn.jsdelivr.net./npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(".sidebar ul li").on('click', function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        })
    </script>
</body>
</html>
