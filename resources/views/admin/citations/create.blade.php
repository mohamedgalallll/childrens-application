<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
                <h4 class="text-uppercase">اضف ذكر جديد</h4>
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
                        'name' => 'title',
                        'id' => 'title',
                        'type' => 'text',
                        'class' => '',
                        'value' => '',
                        'label' => 'عنوان الذكر',
                        'placeholder' => 'اضف عنوان',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.text', [
                        'name' => 'text',
                        'id' => 'text',
                        'type' => 'text',
                        'class' => '',
                        'label' => 'نص الذكر',
                        'placeholder' => 'اضف نصا',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.textarea', [
                        'name' => 'description',
                        'id' => 'description',
                        'class' => '',
                        'value' => '',
                        'label' => 'وصف الذكر',
                        'placeholder' => 'اضف وصفا',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.text', [
                        'name' => 'count',
                        'id' => 'count',
                        'type' => 'number',
                        'class' => '',
                        'label' => 'عدد مرات التكرار',
                        'placeholder' => 'اضف عدد المرات',
                        'disabled' => false,
                        ])
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.inputs.text', [
                        'name' => 'icon',
                        'id' => 'icon',
                        'type' => 'text',
                        'class' => '',
                        'label' => 'الايون',
                        'placeholder' => 'اضف  ايقونه',
                        'disabled' => false,
                        ])
                    </div>
                    <div class="col-xl-12 col-md-12 col-12">
                        @include('admin.components.uploud.file', ['name' =>'image','label'=>'اضف  صوره','max'=>'5','accept'=>'image/*' , 'disabled' => false, 'value'=>''])
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
