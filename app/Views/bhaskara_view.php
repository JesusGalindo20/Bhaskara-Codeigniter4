<?php
$table = new \CodeIgniter\View\Table();


$template = [
    'table_open'         => '<table border="1" cellpadding="4" cellspacing="0">',

    'table_close'        => '</table>'
];
$table->setHeading('ID', 'A', 'B', 'C', 'DELTA', 'X1', 'X2', 'AÇÃO', 'AÇÃO');
$table->setTemplate($template);

echo $table->generate($tabela);
?>  
