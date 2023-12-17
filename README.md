 ```
#!/usr/bin/env php
<?php

include_once __DIR__ . "/../vendor/autoload.php";

use GuzzleHttp\Client;
use Neptunerere\PhpKartRiderRush\Utility\GuzzleUrlBuilder;
use Neptunerere\PhpKartRiderRush\{
    Configuration,
    KartRiderRush
};
use Neptunerere\PhpKartRiderRush\Runner\{
    DecodeJsonStringRunner,
    GuzzleRunner
};

$kartRiderRush = new KartRiderRush(new Configuration([
    Configuration::API_KEY => '',
]));
$kartRiderRush->addRunner(new GuzzleRunner(new Client(), new GuzzleUrlBuilder()));
$kartRiderRush->addRunner(new DecodeJsonStringRunner());

/**
 * array(1) {
 * ["ouid_info"]=>
 * array(1) {
 *   [0]=>
 *   array(3) {
 *     ["ouid"]=>
 *     string(64) ""
 *     ["racer_date_create"]=>
 *     string(20) ""
 *     ["racer_level"]=>
 *     int(50)
 *   }  
 */
$result = $kartRiderRush->run(new \Neptunerere\PhpKartRiderRush\Command\FindUserByAccessId("user_name"));
$ouid = $result["ouid_info"][0]["ouid"] ?? "";

/**
 * array(5) {
 *  ["racer_name"]=>
 *  string(6) ""
 *  ["racer_date_create"]=>
 *  string(20) ""
 *  ["racer_date_last_login"]=>
 *  string(20) ""
 *  ["racer_date_last_logout"]=>
 *  string(20) ""
 *  ["racer_level"]=>
 *  int(50)
 * }
 */
$basicResult = $kartRiderRush->run(new \Neptunerere\PhpKartRiderRush\Command\User\FindUserByName($ouid));

/**
 * array(1) {
 *  ["title_equipment"]=>
 *  array(0) {
 *  }
 * }
 */
$titleEquipmentResult = $kartRiderRush->run(new \Neptunerere\PhpKartRiderRush\Command\User\FindUserByTitleEquipment($ouid));

var_dump($result);
var_dump($basicResult);
var_dump($titleEquipmentResult);
exit;
 ```
