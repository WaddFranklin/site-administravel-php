<?php

if(resolve('/admin')) {
    echo 'administração';
}
elseif(resolve('/admin/pages')) {
    echo 'administração de páginas';
}
else {
    echo 'Página não encontrada';
}