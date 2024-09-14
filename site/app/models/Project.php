<?php
class Project {
    public static function getAllProjects() {
        // Cette méthode devrait interagir avec une base de données pour récupérer les projets
        return [
            ['title' => 'Univers de la Démocratie', 'description' => 'Promouvoir la transparence...'],
            ['title' => 'Univers de l\'Entrepreneuriat', 'description' => 'Formation et mentorat...'],
            ['title' => 'Univers de la Paix', 'description' => 'Promouvoir la paix internationale...']
        ];
    }
}
?>
