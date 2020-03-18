<fieldset class="form-group">
    <label for="{{$id}}">{{$label}}</label>
    <input type='text' name="{{$name}}" value="{{$value}}" placeholder="{{$placeholder}}"   id="{{$id}}" class="form-control pickadateInput"
           @if (isset($disabled) && $disabled == true)
           disabled readonly="readonly"
        @endif
    />
</fieldset>

