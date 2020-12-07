<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// activation du système d'autoloading de Composer
require __DIR__.'/vendor/autoload.php';

// instanciation du chargeur de templates
$loader = new FilesystemLoader(__DIR__.'/templates');

// instanciation du moteur de template
$twig = new Environment($loader);

// initialisation d'une donnée
dump($_POST);

// traitement des données
$errors = [];

if (empty($_POST['mail'])) {
    // le champs est il vide ?
    $errors['mail'] = 'merci de remplir ce champ';   
}
elseif (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) == false) {
    $errors['mail'] = 'merci d\'entrer un mail valide';
}

if (empty($_POST['subject'])) {
    // le champs est il vide ?
    $errors['subject'] = 'merci de remplir ce champ';
} 
elseif (strlen($_POST['subject']) < 3 || strlen($_POST['subject']) > 10) {
    // la longueur du sujet est elle comprise entre 4 et 10 caracteres ?
    $errors['subject'] = 'merci de remplir ce champ avec un sujet d\'une taille comprise entre 4 et 10 caracteres';
}

if (empty($_POST['txt'])) {
    // le champs est il vide ?
    $errors['txt'] = 'merci de remplir ce champ';
}

// affichage du rendu d'un template
echo $twig->render('contact.html.twig', [
    // transmission de données au template
]);