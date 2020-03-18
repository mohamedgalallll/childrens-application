<form method="POST" action="{{$action}}" id="" class="" enctype="multipart/form-data">
    @csrf
    <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
        <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
            <div>
                <h4 class="text-uppercase">اضف سؤال جديد</h4>
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
                        'id' => 'name',
                        'type' => 'text',
                        'class' => '',
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
                        'value' => '',
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
                            'checked' => false,
                            'disabled' => false,
                            ])
                        </div>
                        <div class="col-xl-10 col-md-10 col-10">
                            @include('admin.components.inputs.text', [
                            'name' => 'q1',
                            'id' => 'q1',
                            'type' => 'text',
                            'class' => '',
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
                            'checked' => false,
                            'disabled' => false,
                            ])
                        </div>
                        <div class="col-xl-10 col-md-10 col-10">
                            @include('admin.components.inputs.text', [
                            'name' => 'q2',
                            'id' => 'q2',
                            'type' => 'text',
                            'class' => '',
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
                            'checked' => false,
                            'disabled' => false,
                            ])
                        </div>
                        <div class="col-xl-10 col-md-10 col-10">
                            @include('admin.components.inputs.text', [
                            'name' => 'q3',
                            'id' => 'q3',
                            'type' => 'text',
                            'class' => '',
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
                            'checked' => false,
                            'disabled' => false,
                            ])
                        </div>
                        <div class="col-xl-10 col-md-10 col-10">
                            @include('admin.components.inputs.text', [
                            'name' => 'q4',
                            'id' => 'q4',
                            'type' => 'text',
                            'class' => '',
                            'label' => 'السؤال الرابع',
                            'placeholder' => 'اضف اسم للسؤال الرابع',
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
