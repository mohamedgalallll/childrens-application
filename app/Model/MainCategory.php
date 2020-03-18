<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $appends = ['name','sub_cat_count'];
    protected $fillable = [
        'name_ar',
        'name_en',
        'image_ar',
        'image_en',
        'icon',
        'description_ar',
        'description_en',
        'keyword_ar',
        'keyword_en',
        'order',
        'status',

    ];


    public function getNameAttribute(){
        $attribute='';
        if (session('lang' ) == 'en'){
            $attribute=$this->name_en;
        }elseif (session('lang' ) == 'ar'){
            $attribute=$this->name_ar;
        }
        return $attribute;
    }


    public function getSubCatCountAttribute(){
        $attribute= SubCategory::where('main_category_id',$this->id)->count();

        return $attribute;
    }

}
