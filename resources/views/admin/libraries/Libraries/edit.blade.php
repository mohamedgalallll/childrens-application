@extends('admin.layout.index')
@section('page_css')
    <link rel="stylesheet" type="text/css" href="{{url('design/admin/css/plugins/forms/wizard.css')}}">
@stop
@section('page_js')
    <script src="{{url('design/admin/vendors/js/extensions/jquery.steps.min.js')}}"></script>
    <script src="{{url('design/admin/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <script src="{{url('design/admin/js/scripts/forms/wizard-steps.js')}}"></script>
@stop
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow
            {{request()->cookie('navbar_type') == 'navbar-hidden' ? 'd-none' : ''}}
            {{request()->cookie('navbar_type') == 'navbar-static' ? 'd-none' : ''}}">
        </div>
        <div class="content-wrapper">
            @include('admin.layout.panels.breadcrumb', ['pageName' =>  trans('web.editCategory') . ' : '.$item->name ,'items'=>[
            [
            'name'=>trans('Libraries'),
            'url'=>url('/admin/sub-sub-categories'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{$item->name . ' تعديل المكتبه '}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                            <form action="{{str_replace('/edit','',url()->current())}}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PATCH') }}
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'name',
                                                        'id' => 'name_ar',
                                                        'type' => 'text',
                                                        'class' => 'name_ar',
                                                        'value' => $item->name,
                                                        'label' =>' عنوان ',
                                                        'icon' =>'feather icon-user',
                                                        'placeholder' => 'اضف عنوان ',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <hr class="divider">

                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.textarea', [
                                                        'name' => 'description_ar',
                                                        'id' => 'description_ar',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->description_ar,
                                                        'label' => 'الوصف ',
                                                        'icon' =>'icon-phone',
                                                        'placeholder' =>'اضف الوصف ',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.select', [
                                                        'name' => 'library_main_category_id',
                                                        'id' => 'main_category_id',
                                                        'class' => 'danger',
                                                        'value' => '',
                                                        'label' => 'اختار القسم ',
                                                        'oldcheaked' => $item->library_main_category_id,
                                                        'items' => \App\Model\libraryMainCategory::get(),
                                                        'placeholder' => 'اختر القسم ',
                                                        'checked' => false,
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.select', [
                                                        'name' => 'library_sub_category_id',
                                                        'id' => 'main_category_id',
                                                        'class' => 'danger',
                                                        'value' => '',
                                                        'label' => 'اختار القسم الفرعي ',
                                                        'oldcheaked' => $item->library_sub_category_id,
                                                        'items' => \App\Model\librarySubCategory::get(),
                                                        'placeholder' => 'اختر القسم ',
                                                        'checked' => false,
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 col-6">
                                                        @include('admin.components.uploud.file', ['name' =>'image','label'=>trans('web.categoryArabicCover'),'max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>url('storage' . $item->image)])
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-6">
                                                        @include('admin.components.uploud.file', ['name' =>'file','label'=>trans('web.categoryEnglishCover'),'max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>url('storage' . $item->file)])
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">اضافه</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">اعاده تعيين </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@stop
