<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
        'id' => (string)$this ->id, //defined datatype to be string instead integer
        'type' => 'Company',
        'attributes' => [
            'name' => $this ->name,
            'email' => $this ->email,
            'created_at' => $this ->created_at,
            'updated_at' => $this ->updated_at
        ]];
    }
}
