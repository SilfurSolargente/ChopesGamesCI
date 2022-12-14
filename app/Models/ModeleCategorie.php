<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeleCategorie extends Model
{

    protected $table = 'categorie';

    public function retourner_categories($pNoCategorie = false)
    {
        if ($pNoCategorie === false) {
            return $this->orderBy('LIBELLE', 'asc')
            ->findAll();
        }

        return $this->where(['NOCATEGORIE' => $pNoCategorie])
        ->first();
    }
}
