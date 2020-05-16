<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/restaurant.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/position.css">

    <title>RESTAURANT</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/restaurant/v3/view/index.php">RESTAURANT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/restaurant/v3/view/index.php">HOME <span class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/add.php">ADD MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/search.php">SEARCH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/edit.php">EDIT MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/del.php">DELETE MENU</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="card border-dark mb-3 position">
            <div class="card-header ">
                <h1 class="positions">RESTAURANT DETAIL</h1>
            </div>
            <div class="row position ">
                <div class="col-md-1"></div>
                <div class="card-body">
                    <div class="col-md-11">
                        <table class="table table-striped " border=1 width="600px">
                            <thead class="thead-dark  text-center ">
                                <th>รหัสเมนู</th>
                                <th>ชื่อเมนูอาหาร</th>
                                <th>ประเภทอาหาร</th>
                                <th>ราคา</th>
                            </thead>
                            <tbody class="text-center" id="tblData">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-1"> </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-image: url('../img/bg3.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</body>

</html>


</html>