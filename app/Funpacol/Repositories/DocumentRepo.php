<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 5:58 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Document;

class DocumentRepo extends BaseRepo {

    public function getModel()
    {
        return new Document();
    }

}