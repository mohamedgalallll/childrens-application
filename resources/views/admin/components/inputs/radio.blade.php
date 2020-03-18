<div class="vs-radio-con vs-radio-{{$class}}">
    <input name="{{$name}}" type="radio" value="{{$value}}"
           {{old($name) ? 'checked' : ''}} {{$checked == true ? 'checked' : ''}}
           @if (isset($disabled) && $disabled == true)
                disabled readonly="readonly"
           @endif
    >
    <span class="vs-radio">
<<<<<<< HEAD
    <span class="vs-radio--border"></span>
    <span class="vs-radio--circle"></span>
=======
        <span class="vs-radio--border"></span>
        <span class="vs-radio--circle"></span>
>>>>>>> cc93a97def7955c346d4c24b21c810fad7edfe44
    </span>
    <span class="">{{$label}}</span>
</div>




