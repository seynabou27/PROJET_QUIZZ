<?php
    define('WEB_ROUTE','http://localhost:8000/');

    //define('WEB_ROUTE','http://seynabouka.alwaysdata.net/');

    define('ROUTE_DIR',str_replace('public','',$_SERVER['DOCUMENT_ROOT']));

    define('FILE_USERS', ROUTE_DIR. 'data/user.data.json');

    define('FILE_QUESTION', ROUTE_DIR. 'data/question.data.json');

    define( 'UPLOAD_DIR',WEB_ROUTE. 'public/img/upload/');


?>