<?php
include('../vendor/autoload.php');
use thipages\quick\QTable;
$data=[
    ['Lucien',23],
    ['Paul',12],
    ['Hippolyte ',3]
];
$table=QTable::create(['name','age'],$data,['border'=>1]);
echo($table);