<?php

namespace Revered\Dont\Controller\Eat;

use Magento\Framework\App\Action\Action;

class Nonveg extends Action
{
    
   public function execute()
     {
         echo 'Dont eat nonveg';
         exit();
     }
}?>
