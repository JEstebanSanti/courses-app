<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'start_date' => (new Carbon($this->start_date))->format('Y-m-d'),
            'end_date' => (new Carbon($this->end_date))->format('Y-m-d'),
            'name' => $this->name,
            'user_id' =>  new UserResource($this->user),
            'category_id' => new CategoryResource($this->category),

        ];
    }
}
