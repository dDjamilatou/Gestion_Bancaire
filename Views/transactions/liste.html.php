<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Bancaire</title>
    <link rel="stylesheet" href="<?=WEBROOT?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
</head>
<body>
<header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid col-12 d-flex vh-100 ">
            <div class="container col-2  shadow">
                <img src="Images/logo.jpg" class="img-fluid col-7" alt="">
                <p class="fw-light fs-6 mt-3 mb-3">-MENU</p>
                <ul class="list-group">
                    <li class="list-group-item ">

                        <a href="<?=WEBROOT?>/?ressource=html&controller=demande" class="list-group-item list-group-item-action active d-flex align-item-center"> <span
                                class="material-symbols-outlined px-2"> dashboard </span>Demande</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?=WEBROOT?>/?ressource=api&controller=demande" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> checkbook </span>Api</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?=WEBROOT?>/?ressource=html&controller=client" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> date_range </span>Client</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?=WEBROOT?>/?ressource=html&controller=compte" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Compte</a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?=WEBROOT?>/?ressource=html&controller=agence" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Agence</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?=WEBROOT?>/?ressource=html&controller=transaction" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> account_circle </span>Transaction</a>
                    </li>
                    <li class="list-group-item">
                    <a href="<?=WEBROOT?>/?ressource=html&controller=typecpt" class="list-group-item list-group-item-action d-flex align-item-center"><span
                                class="material-symbols-outlined px-2"> checkbook </span>Types</a>
                    </li>
                </ul>

            </div>

          
<div class="container">
<div class="container col-12 mt-3 border shadow d-flex align-items-center justify-content-around p-3 rounded">
                    <div class="col-md-3 d-flex align-items-center">
                        <label for="inputCity" class="form-label  mx-2">Tel</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="col-md-4 d-flex d-flex align-items-center">
                        <label for="inputState" class="form-label  mx-2">Type</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <label for="inputState" class="form-label mx-2">Statut</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                
                </div>

               
                <div class="container rounded-3 col-12  mt-5  shadow p-1  rounded">
                    <h4 class="mb-3 px-2">Transaction</h4>
                    <div class="container col-12 d-flex align-items-center justify-content-between mb-4">
                        <div class="col-md-3 ">
                            <h5 class="fs-5">Listes des Transactions</h5>
                        </div>
                        
                    </div>
                    
                    <table class="table">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Montant</th>
                                <th scope="col">Type</th>
                                <th scope="col">Type de Compte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $value):?>
                            <tr>
                                <td><?= $value->datetr ?></td>
                                <td><?= $value->montant?></td>
                                <td><?= $value ->type ?></td>
                                <td><?= $value->libtc?></td>
                            </tr>
                            <?php endforeach; ?>
                    
                           
                        </tbody>
                    </table>


                </div>
</div>
</div>
</div>

</div>
</main>
<footer>
<!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
crossorigin="anonymous"></script>
<script src="http://localhost:8000/JS/client.js"></script>





</body>
</html>
