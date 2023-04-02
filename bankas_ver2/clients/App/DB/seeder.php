<?php
$users = [
    ['name' => 'baubas@gmail.com', 'psw' => md5('0000')],
    ['name' => 'vaiduoklis@gmail.com', 'psw' => md5('0000')],
    ['name' => 'vanda@gmail.com', 'psw' => md5('0000')]
];

file_put_contents(__DIR__ .'/users.json', json_encode($users));

echo 'All is OK';
