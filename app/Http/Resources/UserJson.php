<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class UserJson extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        #'dob','name', 'designation', 'email', 'gender', 'status', 'mobile', 'alt_mobile', 'profile_image', 'password', 'address', 'uid','percentage','type','ref_per',
        return 
            ['uid' => $this->uid,
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'gender' => $this->gender,
            'profile_image' => $this->profile_image,
            'dob' => $this->dob,
            'address' => $this->address,
            'designation' => $this->designation,
            'type' => $this->type,
            'status' => $this->status,
            $this->mergeWhen(/*Auth::user()->isAdmin()*/0, [
            'percentage' => $this->percentage,
            'ref_per' => $this->ref_per,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
