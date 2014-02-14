<?php
$balances = array();
$balances['adv_balance'] = file_get_contents("http://198.144.178.108:2750/chain/Fedoracoin/q/addressbalance/EgDMAsW6FYtwDtVTmtp42Gyw8KfpoddHPV");
$balances['dev_balance'] = file_get_contents("http://198.144.178.108:2750/chain/Fedoracoin/q/addressbalance/ELYMNnpmAkA7cNxYQck4pfiiu7tLvbHNkA");
$balances['fed_balance'] = file_get_contents("http://198.144.178.108:2750/chain/Fedoracoin/q/addressbalance/EaDRb5eUWrYgBgo1XFoXb8n58r81mYSpEr");
 
echo json_encode($balances);
