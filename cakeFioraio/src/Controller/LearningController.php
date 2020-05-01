<?php

declare(strict_types=1);


namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class LearningController extends AppController
{
    public function mostra()
    {
        $flowers = TableRegistry::getTableLocator()->get('Flowers'); //trasformo la mia table in oggetto
        $query = $flowers->find('all', [  //metodo find come select
            'contain' => ['opportunities']
        ]);

        $this->set('query', $query);
    }
}
