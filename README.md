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

$result = $kartRiderRush->run(new \Neptunerere\PhpKartRiderRush\Command\FindUserByAccessId("ㅇㅇ"));

var_dump($kartRiderRush);
exit;
 ```
