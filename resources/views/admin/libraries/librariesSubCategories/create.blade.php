<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
                <h4 class="text-uppercase">اضف قسم فرعي </h4>
            </div>
            <div class="hide-data-sidebar">
                <i class="feather icon-x"></i>
            </div>
        </div>
        <div class="data-items pb-3">
            <div class="data-fields px-2 mt-3">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.text', [
                        'name' => 'name',
                        'id' => 'name_ar',
                        'type' => 'text',
                        'class' => 'name_ar',
                        'value' => '',
                        'label' => 'الاسم  ',
                        'icon' =>'feather icon-user',
                        'placeholder' =>  'اضف اسم ',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="col-xl-6 col-md-6 col-6">
                        @include('admin.components.uploud.file', ['name' =>'image','label'=>'اضف صوره ','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.text', [
                        'name' => 'icon',
                        'id' => 'icon',
                        'type' => 'text',
                        'class' => 'icon',
                        'value' => '',
                        'label' => 'ايكون القسم  ',
                        'icon' =>'fa fa-black-tie',
                        'placeholder' => 'اضف ايكون القسم ',
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
                        'value' => '',
                        'label' =>  trans('web.categoryArabicDescription'),
                        'icon' =>'icon-phone',
                        'placeholder' =>  'وصف ',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="divider"></div>
{{--                    <div class="col-xl-12 col-md-12 col-12">--}}
{{--                        @include('admin.components.inputs.staticSelect', [--}}
{{--                        'name' => 'status',--}}
{{--                        'id' => 'status',--}}
{{--                        'class' => 'danger',--}}
{{--                        'value' => 'name',--}}
{{--                        'label' => trans('web.status'),--}}
{{--                        'oldcheaked' => '',--}}
{{--                        'placeholder' => trans('web.status'),--}}
{{--                        'checked' => false,--}}
{{--                        'disabled' => false,--}}
{{--                         'items' => [--}}
{{--                         [--}}
{{--                         'name'=>  'نشط',--}}
{{--                         'value'=>'1',--}}
{{--                         ],--}}
{{--                         [--}}
{{--                         'name'=> 'معطل ',--}}
{{--                         'value'=>'0',--}}
{{--                         ],--}}
{{--                         ],--}}
{{--                        ])--}}
{{--                    </div>--}}

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.select', [
                        'name' => 'library_main_category_id',
                        'id' => 'main_category_id',
                        'class' => 'danger',
                        'value' => 'library_main_category_id',
                        'label' => 'اختار القسم ',
                        'oldcheaked' => '',
                        'items' => \App\Model\libraryMainCategory::get(),
                        'placeholder' => 'اختر القسم ',
                        'checked' => false,
                        'disabled' => false,
                        ])
                    </div>

                </div>
            </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
            <div class="add-data-btn">
                <button type="submit" class="btn btn-primary">{{trans('web.addData')}}</button>
            </div>
            <div class="cancel-data-btn">
                <button type="button"  class="btn btn-outline-danger">{{trans('web.cancel')}}</button>
            </div>
        </div>
    </div>
</div>
</form>
