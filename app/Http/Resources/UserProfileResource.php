<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class UserProfileResource extends JsonApiResource
{
    /**
     * The resource's relationships.
     */
    public array $relationships = [
        'user',
    ];
}
