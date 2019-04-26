<?php

namespace App\Http\Responder;

use App\Http\Resources\ShowUserResource;
use App\UserRepository;

class ShowUserResponder
{
    public function emit(?UserRepository $entity)
    {
        return new ShowUserResource($entity);
    }
}
