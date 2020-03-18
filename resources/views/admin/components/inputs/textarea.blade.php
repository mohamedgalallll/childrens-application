<fieldset class="form-label-group mb-1">
    <textarea name="{{$name}}" id="{{$id}}" data-length="90" class="form-control char-textarea {{$class}}"  id="textarea-counter" rows="4"
              @if (isset($disabled) && $disabled == true)
              disabled readonly="readonly"
              @endif
              placeholder="{{$placeholder}}">{{isset($value) ? $value  : old($name)}}</textarea>
    <label for="{{$id}}">{{$label}}</label>
</fieldset>
