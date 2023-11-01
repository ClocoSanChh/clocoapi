<?php

namespace App\Http\Resources;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);
        if (isset($data['songs'])) {
            $data['songs_count'] = count($data['songs']);
        }
        if (isset($data['comments'])) {
            $data['comments_count'] = count($data['comments']);
        }
        return $data;
    }
}
