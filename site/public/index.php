<?php
require_once '../config/config.php';

$url = $_GET['url'] ?? 'home';

switch ($url) {
    case 'home':
        require_once '../app/controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case 'projects':
        require_once '../app/controllers/ProjectsController.php';
        $controller = new ProjectsController();
        $controller->index();
        break;
    case 'contact':
        require_once '../app/controllers/ContactController.php';
        $controller = new ContactController();
        $controller->index();
        break;
    case 'contact/submit':
        require_once '../app/controllers/ContactController.php';
        $controller = new ContactController();
        $controller->submit();
        break;
    default:
        echo "Page non trouvée";
        break;
}
?>
