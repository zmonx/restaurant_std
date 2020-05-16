<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery-3.5.0.min.js"></script>
    <script src="../js/search.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/position.css">


    <title>SEARCH MENU</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/restaurant/v3/view/index.php">RESTAURANT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/restaurant/v3/view/index.php">HOME </a>

                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/restaurant/v3/view/add.php">ADD MENU</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/restaurant/v3/view/search.php">SEARCH<span class="sr-only">(current)</span></a>
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
                <h1 class="position">SEARCH PAGE</h1>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-3 pos">
                        <h5>MENU ID / MENU NAME</h5>
                    </div>
                    <div class="col-md-5"><input type="text" class="form-control" placeholder="MENU ID / MENU NAME" id="keyword" /></div>
                    <div class="col-md-4"><input type="button" id="btnSearch" class="form-control  btn btn-outline-info" value="🔎 SEARCH" /></div>
                </div>
               
                <div class="row">
                  
                    <div class="col-md-12">
                        <table class="table table-striped " border=1 width="600px">
                        <hr><br>
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
            </div>






            <!-- <table>
                <tr>
                </tr>
            </table>

            <table border=1 width="600px">
                <thead>
                    <th>รหัสเมนู</th>
                    <th>ชื่อเมนูอาหาร</th>
                    <th>ประเภทอาหาร</th>
                    <th>ราคา</th>
                </thead>
                <tbody id="tblData"></tbody>
            </table> -->
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