<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <label for="input-file-now-custom-1">{{$label}}</label>
                <input type="file" id="input-file-now-custom-1" name="{{$name}}" class="dropify" accept="{{$accept}}"
                       data-max-file-size="{{$max}}M" data-default-file="{{$value}}"
                       @if (isset($disabled) && $disabled == true)
                       disabled readonly="readonly"
                    @endif
                />
            </div>
        </div>
    </div>
</div>
