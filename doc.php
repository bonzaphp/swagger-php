<?php
/**
 * Created by yang
 * User: bonzaphp@gmail.com
 * Date: 2020-02-27
 * Time: 09:37
 */
//require('../vendor/autoload.php');
//$openapi = \OpenApi\scan('ydt.php');
//header('Content-Type: application/x-yaml');
//echo $openapi->toYaml();

require('./vendor/autoload.php');
@$swagger = \Swagger\scan('ydt.php');
//var_dump(json_encode($swagger,JSON_UNESCAPED_UNICODE)) ;die;
header('Content-Type: application/json');
//echo $swagger;开辟
@file_put_contents('swagger.json',json_encode($swagger,JSON_UNESCAPED_UNICODE));
