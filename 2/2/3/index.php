<?php

require 'autoload.php';
require 'config/SystemConfig.php';

$some = new JsonFileAccessModel('some');

$some->write('{"name": "Matematika","kabinet": 54,"time": "8:30-9:50","teacher": "Panasyuk Galyna Volodymyrivna"}');
echo $some->readJson();
