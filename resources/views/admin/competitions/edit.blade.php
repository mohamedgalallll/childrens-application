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
{{request()->cookie('navbar_type') == 'navbar-static' ? 'd-none' : ''}}
            "></div>
        <div class="content-wrapper">
            @include('admin.layout.panels.breadcrumb', ['pageName' => 'تعيدل السؤال' .' : '.$item->name ,'items'=>[
            [
            'name'=>'مسابقات',
            'url'=>url('/admin/competitions'),
            ]
            ]
            ])
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{ 'تعديل السؤال' .' '. $item->name}}</h4>
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
                                                        'id' => 'name',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->name,
                                                        'label' => 'اسم السؤال',
                                                        'placeholder' => 'اضف اسم للسؤال',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-12 col-md-12 col-12">
                                                        @include('admin.components.inputs.textarea', [
                                                        'name' => 'question',
                                                        'id' => 'question',
                                                        'class' => '',
                                                        'value' => $item->question,
                                                        'label' => 'السؤال',
                                                        'placeholder' => 'اضف سؤالا',
                                                        'disabled' => false,
                                                        ])
                                                    </div>


                                                    <div class="col-xl-2 col-md-2 col-2 myradio">
                                                        @include('admin.components.inputs.radio', [
                                                        'name' => 'right_answer',
                                                        'id' => 'right_answer',
                                                        'class' => 'danger',
                                                        'value' => 'q1',
                                                        'label' => '',
                                                        'checked' => $item->right_answer == 'q1' ? true : false ,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-xl-10 col-md-10 col-10">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'q1',
                                                        'id' => 'q1',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->q1,
                                                        'label' => 'السؤال الاول',
                                                        'placeholder' => 'اضف اسم للسؤال الاول',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-2 col-md-2 col-2 myradio">
                                                        @include('admin.components.inputs.radio', [
                                                        'name' => 'right_answer',
                                                        'id' => 'right_answer',
                                                        'class' => 'danger',
                                                        'value' => 'q2',
                                                        'label' => '',
                                                        'checked' => $item->right_answer == 'q2' ? true : false ,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-xl-10 col-md-10 col-10">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'q2',
                                                        'id' => 'q2',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->q2,
                                                        'label' => 'السؤال الثاني',
                                                        'placeholder' => 'اضف اسم للسؤال الثاني',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-2 col-md-2 col-2 myradio">
                                                        @include('admin.components.inputs.radio', [
                                                        'name' => 'right_answer',
                                                        'id' => 'right_answer',
                                                        'class' => 'danger',
                                                        'value' => 'q3',
                                                        'label' => '',
                                                        'checked' => $item->right_answer == 'q3' ? true : false ,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-xl-10 col-md-10 col-10">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'q3',
                                                        'id' => 'q3',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->q3,
                                                        'label' => 'السؤال الثالث',
                                                        'placeholder' => 'اضف اسم للسؤال الثالث',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-xl-2 col-md-2 col-2 myradio">
                                                        @include('admin.components.inputs.radio', [
                                                        'name' => 'right_answer',
                                                        'id' => 'right_answer',
                                                        'class' => 'danger',
                                                        'value' => 'q4',
                                                        'label' => '',
                                                        'checked' => $item->right_answer == 'q4' ? true : false ,
                                                        'disabled' => false,
                                                        ])
                                                    </div>
                                                    <div class="col-xl-10 col-md-10 col-10">
                                                        @include('admin.components.inputs.text', [
                                                        'name' => 'q4',
                                                        'id' => 'q4',
                                                        'type' => 'text',
                                                        'class' => '',
                                                        'value' => $item->q4,
                                                        'label' => 'السؤال الرابع',
                                                        'placeholder' => 'اضف اسم للسؤال الرابع',
                                                        'disabled' => false,
                                                        ])
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">{{trans('web.submit')}}</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">{{trans('web.reset')}}</button>
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
