<?php
require_once 'app/models/Project.php';

class ProjectsController {
    public function index() {
        $projects = Project::getAllProjects();
        require_once 'app/views/projects.php';
    }
}
?>
