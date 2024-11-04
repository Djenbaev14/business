<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            // 'main_category_id'=>new CategoryResource(Category::find($this->main_category_id)),
            'slug'=>$this->slug,
            'name_uz'=>$this->name_uz,
            'name_ru'=>$this->name_ru,
            'name_kr'=>$this->name_kr,
            'photo'=>$this->photo,
            'products'=>ProductResource::collection(Product::where('id',$this->id)->where('deleted_at',null)->orderBy('id','desc')->get())
        ];
    }
}