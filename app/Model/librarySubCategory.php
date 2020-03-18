<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class librarySubCategory extends Model
{
    protected $appends = ['library_main_cat_name'];
    protected $fillable = [
        'name',
        'image',
        'icon',
        'description_ar',
        'description_en',
        'status',
        'library_main_category_id',
    ];

    public function parent(){
        return $this->hasOne(libraryMainCategory::class,'id','library_main_category_id');
    }
    public function getLibraryMainCatNameAttribute(){
        $attribute='';
        if ($this->parent()) {
            $attribute = $this->parent->name;
        }
        return $attribute;
    }



}
