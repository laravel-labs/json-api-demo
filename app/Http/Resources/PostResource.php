<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class PostResource extends JsonApiResource
{
    /**
     * The resource's relationships.
     * 
     * @var list<string>
     */
    protected array $relationships = [
        'comments',
        'user',
    ];

    /**
     * The resource's attributes.
     *
     * @var list<string>
     */
    protected array $attributes = [
        'title',
        'content',
    ];
}
