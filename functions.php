<?php

// add_action est un hook/ un crochet. Il permet d'utiliser une fonction prédéfinie
// Cette fonction prédéfinie sera widgets_init. C'est le premier argument que  je donne à add_action
// le second aergument est le nom de ma fonction, ici, montheme_init_sidebar
add_action('widgets_init', 'montheme_init_sidebar');

// j'execute ma fonction
function montheme_init_sidebar(){
    // je declare mon widget, dans un tableau
    register_sidebar( array(
        // je lui donne un nom (au widget)
        // attention à la syntaxe, c'est un double underscore __
        'name' => __('Haut gauche', 'montheme'),
        // je lui donne un id (qu'il faudra reprendre dans la partie HTML. Si le nom est composé, ne pas laisser d'espace, mais relier avec un - )
        'id' => ('haut-gauche'),
        // je lui donne une description
        'description' => __('Zone en haut à gauche', 'montheme')
        )
    );
    register_sidebar( array(
        'name' => __('Haut droite', 'montheme'),
        'id' => ('haut-droite'),
        'description' => __('Zone en haut à droite', 'montheme')
        )
    );
    register_sidebar( array(
        'name' => __('Entete', 'montheme'),
        'id' => ('entete'),
        'description' => __('Zone image entete', 'montheme')
        )
    );
    register_sidebar( array(
        'name' => __('Bas gauche', 'montheme'),
        'id' => ('bas-gauche'),
        'description' => __('Zone en bas à gauche', 'montheme')
        )
    );
    register_sidebar( array(
        'name' => __('Bas droite', 'montheme'),
        'id' => ('bas-droite'),
        'description' => __('Zone en bas à droite', 'montheme')
        )
    );
}