<?php
/**
 * Plugin Name: Alumnis
 * Plugin URI: http://iness.simplon.co/alumnis.php
 * Description: Permet de stocker via un formulaire d'enregistrement et ensuite d'afficher les anciens élèves sur une page du site
 * Version: 1
 * Author: Team Simplon Narbonne
 * Author URI: http://iness.simplon.co
 * License: GPL v3
 */


 function inscription_alumnis( $atts ) {

    $codehtml = '<label for="mon_id">
    Chercher:
    <input id="mon_id" type="text" />
</label>';

    return $codehtml;

 }

 add_shortcode( 'inscription_alumnis', 'inscription_alumnis' );
