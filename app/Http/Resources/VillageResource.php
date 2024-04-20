<?php

namespace App\Http\Resources;

use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VillageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            // 'meta' => json_encode(["lat" => $this->lat, "long" => $this->long, "pos" => $this->pos])
            'meta' => json_decode($this->meta)
        ];
    }
}
