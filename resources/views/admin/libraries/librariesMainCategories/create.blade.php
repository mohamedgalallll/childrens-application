<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
                <h4 class="text-uppercase">اضف قسم جديد </h4>
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
                        'label' => 'الاسم  ' ,
                        'icon' =>'feather icon-user',
                        'placeholder' => 'اضف اسم ',
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
                        'label' => ' الوصف عربي  ',
                        'icon' =>'icon-phone',
                        'placeholder' => 'اضف وصف عربي  ',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="divider"></div>

                </div>
            </div>
        </div>
        <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
            <div class="add-data-btn">
                <button type="submit" class="btn btn-primary">اضف البيانات </button>
            </div>
            <div class="cancel-data-btn">
                <button type="button"  class="btn btn-outline-danger">الغاء</button>
            </div>
        </div>
    </div>
</div>
</form>
