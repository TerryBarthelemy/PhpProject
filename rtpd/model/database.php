<?php
        
    $connect2sql = array(
        'server' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_008004925',
        'username' => 'se266_008004925',
        'password' => '008004925'
    );

    $database = new PDO($connect2sql['server'], $connect2sql['username'], $connect2sql['password']);
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>
