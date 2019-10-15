<?php

function setInternalServerError($errno, $errstr, $errfile, $errline) {
    
    http_response_code(500);
    
    if(DEBUG) {
        echo '<h1>Error</h1>';

        switch($errno) {
            case E_USER_ERROR:
                echo "<strong>ERROR</strong> [{$errno}] {$errstr}</br>";
                echo "Fatal error on line {$errline} in file {$errfile}</br>";
                break;

            case E_USER_WARNING:
                echo "<strong>WARNING</strong> [{$errno}] {$errstr}</br>";
                break;

            case E_USER_NOTICE:
                echo "<strong>NOTICE</strong> [{$errno}] {$errstr}</br>";
                break;

            default:
                echo "<strong>UNKNOW ERROR TYPE</strong> [{$errno}] {$errstr}</br>";
        }

        // exibe o backtrace do erro
        echo '<ul>';
        foreach(debug_backtrace() as $error) {
            if(!empty($error['file'])) {
                echo "<li>{$error['file']}: <b>line {$error['line']}</b></li>";
            }
        }
        echo '</ul>';
    }
    
    exit;
}

set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');