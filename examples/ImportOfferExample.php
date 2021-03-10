<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use SoftSwiss\ApiClient;
use SoftSwiss\Exceptions\InvalidRequestException;

/**
 * Initialization params
 */
const DOMAIN = 'samuraipartners.com';
const LOGIN = 'm.margera@alflaeads.net';
const PASSWORD = 'Alfaleads123';
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
try
{
    $offerId = 127834;
    $offer = $client->offers()->getOne($offerId);
    /**
     * Use offer object model
     */
    print_r($offer);
    /**
     * ... or use as array
     */
    print_r($offer->toArray());
}
catch(InvalidRequestException $e)
{
    print_r($e);
}