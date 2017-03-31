<?php
$config = [
'create-user'=> [
[ 
'field' => 'email',
'label' => 'E-mail',
'rules' => 'required'|'valid_email| is_unique[users,email]',
],
]
'field' => 'password',
'label' => 'password',
'rules' => 'requires',
],
[
'field' => 'name',
'label' => 'Name',
'rules' => 'requires',
]
],
];