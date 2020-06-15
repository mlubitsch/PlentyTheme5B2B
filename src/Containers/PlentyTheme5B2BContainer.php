<?php

namespace PlentyTheme5\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyTheme5Container
{
    public function call(Twig $twig):string
    {
        return $twig->render('PlentyTheme5::Stylesheet');
    }
}