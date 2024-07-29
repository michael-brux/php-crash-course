<?php

$template = 'path/templateName.html.twig';
$args = [
    'variable1NameForTwig' => $phpVariable1,
    'variable2NameForTwig' => $phpVariable2,
    ...
];
$html = $this->twig->render($template, $args);
print $html;
