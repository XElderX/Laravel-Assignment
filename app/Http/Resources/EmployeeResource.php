<?php

namespace App\Http\Resources;

use App\Models\Company;
use Illuminate\Http\Resources\Json\JsonResource;


class EmployeeResource extends JsonResource
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
        'type' => 'Employee',
        'attributes' => [
            'first_name' => $this ->first_name,
            'last_name' => $this ->last_name,
            'company' => Company::where('id', $this->company)
            ->get()
            ->makeHidden(['created_at','updated_at' ]),
            'email' => $this ->email,
            'phone' => $this ->phone,
            'age' => $this ->age,
            'salary' => $this ->salary/100
        ]];
}
}

