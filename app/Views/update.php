<?php

helper('form');

echo form_open('bhaskara/frmInserir');
echo '<pre>';
echo form_label('<br><br><br>--------------------------------- <br>', '');
echo form_label('--------------------------------- <br>', '');
echo form_label('MODIFICAR <br>', '');
echo form_label('Digite o ID a modificar ', 'id');
echo form_input('ID', '');
echo form_label('Digite o valor de A ', 'valorA');
echo form_input('A', '');
echo form_label('Digite o valor de B ', 'valorB');
echo form_input('B', '');
echo form_label('Digite o valor de C ', 'valorC');
echo form_input('C', '');
echo form_submit('mysubmit', 'Modificar');
echo form_close();

?>