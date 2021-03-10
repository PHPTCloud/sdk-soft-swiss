<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use SoftSwiss\ApiClient;
/**
 * Initialization params
 */
const DOMAIN = 'domain';
const LOGIN = 'login';
const PASSWORD = 'password';
/**
 * Client initialization by 
 * - domain name
 * - login
 * - password
 */
$client = new ApiClient(DOMAIN, LOGIN, PASSWORD);
/**
 * Getting offer from account by offer ID
 */
$offerId = 127834;
$offer = $client->offers()->getOne($offerId);
print_r($offer);