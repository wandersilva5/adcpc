<div class="col-md-{{ $col ?? '2' }}">
    <b>{{ $label ?? '' }}</b>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fas fa-lg fa-{{ $icon ?? '' }}"></i>
        </span>
        <div class="form-line">
            <textarea name="{{ $for_name ?? ''}}" rows="{{ $rows ?? '' }}"  class="{{ $class ?? '' }}" id="{{ $id ?? '' }}">{{ $value ?? '' }}</textarea>
        </div>
    </div>
</div>