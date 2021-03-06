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
            {{request()->cookie('navbar_type') == 'navbar-static' ? 'd-none' : ''}}"></div>
        <div class="content-wrapper">
            @include('admin.layout.panels.breadcrumb', ['pageName' => $item->name . ' تعديل ','items'=>[
            [
            'name'=>'الاقسام ',
            'url'=>url('/admin/main-categories'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{$item->name . ' تعديل ' }}</h4>
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
                                                        'label' => 'الاسم ',
                                                        'icon' =>'feather icon-user',
                                                        'placeholder' => 'الاسم ',
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
                                                        'label' => 'الوصف',
                                                        'icon' =>'icon-phone',
                                                        'placeholder' =>'الوصف ',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="divider"></div>
                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'icon',
                                                        'id' => 'icon',
                                                        'type' => 'text',
                                                        'class' => 'icon',
                                                        'value' => $item->icon,
                                                        'label' =>'ايكون',
                                                        'icon' =>'feather icon-user',
                                                        'placeholder' => 'ادخل الايكون',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 col-6">
                                                        @include('admin.components.uploud.file', ['name' =>'image','label'=>'الصوره','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>url('storage' . $item->image)])
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">تحديث </button>
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
