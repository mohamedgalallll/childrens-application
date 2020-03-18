<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class libraryMainCategory extends Model
{
    protected $appends = ['sub_cat_count'];
    protected $fillable = [
        'name',
        'image',
        'icon',
        'description_ar',
        'status',
    ];

    public function getSubCatCountAttribute(){
        $attribute= librarySubCategory::where('library_main_category_id',$this->id)->count();
        return $attribute;
    }
}
