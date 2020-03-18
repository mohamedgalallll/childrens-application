<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $appends = ['library_main_cat_name','library_sub_cat_name'];
    protected $fillable = [
        'name',
        'image',
        'file',
        'description_ar',
        'description_en',
        'status',
        'library_main_category_id',
        'library_sub_category_id',
    ];

    public function parent(){
        return $this->hasOne(libraryMainCategory::class,'id','library_main_category_id');
    }
    public function parentOfParent(){
        return $this->hasOne(librarySubCategory::class,'id','library_sub_category_id');
    }
    public function getLibraryMainCatNameAttribute(){
        $attribute='';
        if ($this->parent()) {
            $attribute = $this->parent->name;
        }
        return $attribute;
    }
    public function getLibrarySubCatNameAttribute(){
        $attribute='';
        if ($this->parentOfParent()) {
            $attribute = $this->parentOfParent->name;
        }
        return $attribute;
    }
}
