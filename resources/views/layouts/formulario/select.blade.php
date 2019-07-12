<div class="col-md-{{$col ?? '2'}}">
    <div class="form-group">
        <label>{{$label ?? ''}}</label>
        <select class="form-control select2" style="width: 100%;" name="{{ $for_name ?? '' }}" id="{{ $id ?? '' }}">
            <option value="">--Selecione--</option>
            @if(isset($lista))
            @foreach ($lista as $nome)
        <option value="{{ $nome }}">{{ $nome }}</option>
            @endforeach
            @endif
        </select>
    </div>
</div>
