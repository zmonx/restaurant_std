
<?php
$conn = new mysqli('127.0.0.1', 'root', 'usbw', 'restaurant');
$sql = "select * from menu";
$sql .=" where menu_id = '". $_REQUEST['keyword']."'";

$rs = $conn->query($sql);
$data = array();
while($row = $rs->fetch_array()){
    array_push($data, $row);
}
$ret = array(
    'nrow' => count($data),
    'data' => $data
);
print json_encode($ret);