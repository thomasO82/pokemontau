<?php 

require_once '../core/Router.php';

require_once '../src/controllers/MainController.php';

require_once '../src/controllers/CaptureController.php';

require_once '../src/controllers/ReleaseController.php';

require_once "../src/models/Db.php";

require_once "../src/models/repositories/PokemonRepository.php";

require_once '../src/models/Pokemon.php';


$router = new Router();
$router->start();

