<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './api/vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => false, // set to false in production
        // Database connection settings
        "db" => [
            "host" => "127.0.0.1",
            "dbname" => "restaurant",
            "user" => "root",
            "pass" => "usbw"
        ],
    ],
];


$app = new \Slim\App ($config);

// DIC configuration
$container = $app->getContainer();

// PDO database library 
$container ['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'],
        $settings['user'], $settings['pass'],[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};
 

$app->get('/', function (Request $request, Response $response, array $args) {
    
    return $response->withRedirect("/restaurant/v3/view/index.php");
});

// $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
//     $name = $args['name'];
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });

// $app->post('/hello', function (Request $request, Response $response) {
//     $data = $request->getParsedBody();
//     $name = filter_var($data['name'], FILTER_SANITIZE_STRING);
//     $response->getBody()->write("Hello, $name");
//     return $response;
// });

$app->get('/getdb', function (Request $request, Response $response, array $args) {
    
    $sql = "Select * from restaurant.menu;";
    $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $this->response->withJson($sth);
});
 
$app->post('/insert_menu', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $menu_id = $params['menu_id'];
    $menu_name = $params['menu_name'];
    $menu_type = $params['menu_type'];
    $menu_price = $params['menu_price'];

    $sql = "INSERT INTO menu VALUES ('$menu_id','$menu_name','$menu_type','$menu_price') ";
    // $sth = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    $this->db->query($sql);
    return $this->response->withJson(array('status' => 'success'));
    
  
});

$app->post('/search', function (Request $request, Response $response, array $args) {

    $params = $_POST;
    $keyword = $params['keyword'];

    $sql1 = "SELECT * from menu WHERE menu_id = '$keyword' or menu_name like '$keyword' ";
    
    $sth = $this->db->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
    return $this->response->withJson($sth);
    
});

$app->post('/search2', function (Request $request, Response $response, array $args) {

    $params = $_POST;
    $keyword = $params['keyword'];

    $sql1 = "SELECT * from menu WHERE menu_id = '$keyword' or menu_name like '$keyword' ";
    $sth = $this->db->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
    $ret = array(
        'nrow' => count($sth),
        'data' => $sth
    );
    return $this->response->withJson($ret);
    
});

$app->post('/update', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $menu_id = $params['menu_id'];
    $menu_name = $params['menu_name'];
    $menu_type = $params['menu_type'];
    $menu_price = $params['menu_price'];

    $sql = "UPDATE menu SET menu_id = '$menu_id' , menu_name = ' $menu_name', menu_type = '$menu_type' , menu_price ='$menu_price' where menu_id = '$menu_id' ";

    try{
        $this->db->query($sql);
        return $this->response->withJson(array('status' => 'OK'));
    }catch(PDOException $e){
        return $this->response->withJson(array('status' => $e));
    }


});
$app->post('/delete', function (Request $request, Response $response, array $args) {
    $params = $_POST;
    $keyword = $params['menu_id'];
    $sql = "DELETE from menu where menu_id = '$keyword'";
    // $sth = $this->db->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
    // return $this->response->withJson($sth);
    try{
        $this->db->query($sql);
        return $this->response->withJson(array('status' => 'OK'));
    }catch(PDOException $e){
        return $this->response->withJson(array('status' => $e));
    }
    
});
$app->run();
