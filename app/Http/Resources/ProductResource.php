<?php

namespace App\Http\Resources;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'company_id'=>$this->company_id,
            'category_id'=>$this->category_id,
            'name_uz'=>$this->name_uz,
            'name_ru'=>$this->name_ru,
            'name_kr'=>$this->name_kr,
            'description_uz'=>$this->description_uz,
            'description_ru'=>$this->description_ru,
            'description_kr'=>$this->description_kr,
            'price'=>$this->price,
            'unit'=>new UnitResource(Unit::where('id',$this->unit_id)->first()),
            'photos'=>$this->photos,
            'is_active'=>$this->is_active,
        ];
    }
}