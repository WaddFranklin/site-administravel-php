<?php

function flash($message = NULL, $type = NULL) {
    if($message) {
        $_SESSION['flash'][] = compact('message', 'type');
    }
    else {
        $flash = $_SESSION['flash'] ?? [];
        if(!count($flash)) {
            return;
        }
        
        foreach($flash as $key => $message) {
            render('flash', 'ajax', $message);
            unset($_SESSION['flash'][$key]);
        }
    }
}
