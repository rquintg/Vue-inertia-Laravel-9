<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'prof' => $this->prof,
            'content' => $this->content,
            'prereq' => $this->prereq,
            'horasautonomo' => $this->horasautonomo . ' horas',
            'horasdirigido' => $this->horasdirigido . ' horas',
            'sem' => $this->sem,
            'created_at' => $this->created_at->toDateString()
        ];
    }
}
