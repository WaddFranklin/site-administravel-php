<?php

$pages_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) {
    // buscar uma única página
};

$pages_create = function () {
    // cria uma página
    flash('O registro foi criado!', 'success');
};

$pages_edit = function ($id) {
    // atualiza uma página
    flash('Atualizou registro com sucesso!', 'success');
};

$pages_delete = function ($id) {
    // remove uma página
    flash('Removeu registro com sucesso!', 'success');
};

