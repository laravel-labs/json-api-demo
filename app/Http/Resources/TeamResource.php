<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class TeamResource extends JsonApiResource
{
    /**
     * The resource's relationships.
     */
    public array $relationships = [
        'users',
    ];
}
