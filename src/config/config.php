<?php
date_default_timezone_set('Europe/Lisbon');
setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'portuguese');

//---Pastas do projeto
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

//acesso ah base de dados
require_once(realpath(dirname(__FILE__).'/database.php'));