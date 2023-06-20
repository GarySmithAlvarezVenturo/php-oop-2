<?php
require_once __DIR__ . '/../models/prodotti.php';
require_once __DIR__ . '/../models/animals.php';

$arrayProdotti = [
    new Animali('Freesbee', '€ 10,00', 'https://images.unsplash.com/photo-1601758125946-6ec2ef64daf8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80', 'Giochi', 'cane'),
    new Animali('Tiragraffi', '€ 50,00', 'https://images.unsplash.com/photo-1636543459633-53c7216fee3c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80', 'Giochi', 'gatto'),
    new Animali('Biscotti', '€ 20,00', 'https://images.unsplash.com/photo-1597843786186-826cc3489f56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=464&q=80', 'Cibo', 'cane'),
    new Animali('MeoWOW', '€ 20,00', 'https://images.unsplash.com/photo-1623903088094-dba345c6a7b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=436&q=80', 'Cibo', 'gatto')
];

?>