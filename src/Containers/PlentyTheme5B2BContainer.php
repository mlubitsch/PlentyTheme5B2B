<?php

namespace PlentyTheme5B2B\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyTheme5B2BContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('PlentyTheme5B2B::Stylesheet');
    }
}