<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DELETE MENU</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/delete.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/position.css">

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
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/search.php">SEARCH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurant/v3/view/edit.php">EDIT MENU</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/restaurant/v3/view/del.php">DELETE MENU<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="card border-dark mb-3 position">
            <div class="card-header ">
                <h1 class="position">DELETE PAGE</h1>
            </div>
            <div class="card-body">
            <div class="row">
                    <div class="col-md-3 pos">
                        <h5>MENU ID / MENU NAME</h5>
                    </div>
                    <div class="col-md-5"><input type="text" class="form-control" placeholder="MENU ID / MENU NAME" id="keyword" /></div>
                    <div class="col-md-4"><input type="button" id="btnSearch" class="form-control  btn btn-outline-info" value="🔎 SEARCH" /></div>
                </div>
                <hr><br>
                    <div class="row">
                        <div class="col-md-2">
                            <h5> MENU ID :</h5><br>
                            <h5> MENU NAME :</h5><br>
                            <h5> MENU TYPE : </h5><br>
                            <h5> MENU PRICE :</h5>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="MENU ID" id="menu_id" readonly />
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control" placeholder="MENU NAME" id="menu_name" readonly />
                            </div>
                            <div class="form-group">
                                <!-- <select class="form-control" id="menu_type" readonly> -->
                                <input type="text" class="form-control" placeholder="MENU TYPE"id="menu_type" readonly />
                                  
                                </select>
                            </div>
                            <div class="form-group ">
                                <input type="number" class="form-control" placeholder="MENU PRICE " id="menu_price" maxlength="4" min=0 max=9999 readonly />
                            </div>
                            <div class="form-group ">
                                <input class="form-control btn btn-outline-danger" type="button" value="DELETE" name='submit' id="btnDelete" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

<!-- 

    
    <h1 class="position">DELETE PAGE</h1>
    <hr>
    <table>
        <tr>
            <th>รหัสเมนู</th>
            <td><input type="text" id="keyword"></td>
            <td><input type="button" id="btnSearch" value="สืบค้น"></td>
        </tr>
    </table>

    <table>
        <tr>
            <th>รหัสเมนู</th>
            <td><span id="menu_id"></span></td>
        </tr>
        <tr>
            <th>ชื่อเมนู</th>
            <td><span id="menu_name"></span></td>
        </tr>
        <tr>
            <th>ประเภทอาหาร</th>
            <td><span id="menu_type"></span></td>
        </tr>
        <tr>
            <th>ราคา</th>
            <td><span id="menu_price"></span></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="button" value="ลบข้อมูล" id='btnDelete'></td>
        </tr>

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