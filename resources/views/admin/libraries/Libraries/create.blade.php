<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
                <h4 class="text-uppercase">{{$name}}</h4>
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
                        'label' => ' عنوان ',
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
                        'value' => '',
                        'label' => 'الوصف  ',
                        'icon' =>'icon-phone',
                        'placeholder' => 'اضف وصف ',
                        'disabled' => false,
                        ])
                    </div>
                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.select', [
                        'name' => 'library_main_category_id',
                        'id' => 'library_main_category_id',
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
                    <div class="col-xl-12 col-md-12 col-12" style="display: none">
                        @include('admin.components.inputs.staticSelect', [
                        'name' => 'library_sub_category_id',
                        'id' => 'library_sub_category_id',
                        'class' => 'danger',
                        'value' => 'library_sub_category_id',
                        'label' => 'اختار القسم ',
                        'oldcheaked' => '',
                        'items' =>'',
                        'placeholder' => 'اختر القسم الفرعي  ',
                        'checked' => false,
                        'disabled' => false,
                        ])
                    </div>
                    <div class="divider"></div>
                    <div class="col-xl-6 col-md-6 col-6">
                        @include('admin.components.uploud.file', ['name' =>'image','label'=>'اضف صوره ','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                    </div>
                    <div class="col-xl-6 col-md-6 col-6">
                        @include('admin.components.uploud.file', ['name' =>'file','label'=>'اضف صوت او ملف ','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
                    </div>

                </div>
            </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
            <div class="add-data-btn">
                <button type="submit" class="btn btn-primary">اضافه بيانات </button>
            </div>
            <div class="cancel-data-btn">
                <button type="button"  class="btn btn-outline-danger">الغاء</button>
            </div>
        </div>
    </div>
</div>
</form>
