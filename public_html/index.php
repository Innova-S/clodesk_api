<?php
    $result['result'] = true;
    
    print json_encode($result);
    
    
    
    // setup the autoloading
    $loader = require '../vendor/autoload.php';
    $loader->add('', '../propel');

    // setup Propel
    require_once '../generated-conf/config.php';

    $author = new Author();
$author->setFirstName('Stefano');
$author->setLastName('Cavallaro');
$author->save();

?>