<?php

namespace PlentyTheme5B2B\Containers;

use Plenty\Plugin\Templates\Twig;

class PlentyTheme5B2BItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PlentyTheme5B2B::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}