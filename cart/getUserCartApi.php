<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require '../conn.php';
require './cartDb.php';


$database = new Database();
$db = $database->getDbConnection();

$objCart = new UserCart($db);

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $data = $objCart->getUserAddedCart($email);
    echo json_encode($data);
}
