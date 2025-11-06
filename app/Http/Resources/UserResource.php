<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\JsonApi\JsonApiResource;

class UserResource extends JsonApiResource
{
    /**
     * The resource's relationships.
     */
    public function toRelationships(Request $request)
    {
        return [
            'posts',
            'profile',
            'teams',
        ];
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toAttributes(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'verified_at' => fn () => $this->email_verified_at,
            'avatar' => function () {
                if ($this->avatar_path) {
                    return url("storage/{$this->avatar_path}");
                }

                return null;
            },
        ];
    }
}
