<div class="col-md-{{$col ?? '2'}}">
    <div class="form-group is-empty">
        <label for="{{ $id ?? '' }}">{{ $label ?? '' }}</label>
        <input type="{{ $type }}" name="{{ $for_name ?? '' }}"  value="{{ $value ?? null}}"
        class="{{ $class ?? '' }}" id="{{ $id ?? '' }}" placeholder="{{ $placeholder ?? '' }}" 
        data-role="{{ $dataRole ?? '' }}" {{ $disabled ?? '' }}>
     </div>
</div>

{{-- ============================================= --}}
