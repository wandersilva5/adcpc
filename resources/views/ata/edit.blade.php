@extends('layouts.master')

@section('title') 
<i class="fas fa-lg fa-file"></i> Nova Ata @section('description') Lançamento de uma nova ata @endsection       
@endsection

@section('content')
<div class="row clearfix">
    <ul class="nav nav-tabs tab-nav-right" role="tablist" >
        <li role="presentation" class="active">
            <a href="#documentos" data-toggle="tab">
                <i class="fa fa-file-alt"> DOCUMENTOS</i>
            </a>
        </li>
        <li role="presentation">
            <a href="#anexos" data-toggle="tab">
                <i class="fa fa-paperclip"> ANEXOS</i>
            </a>
        </li>
        <li role="presentation">
            <a href="#historico" data-toggle="tab">
                <i class="fa fa-paperclip"> HISTORICO DE ALTERAÇÃO</i>
            </a>
        </li>
    </ul>
    <form action="{{ route('ata.store', $ata->id) }}" method="POST" enctype="multipart/form-data" id="mult_upload">
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="documentos" style="margin-top: 20px">
            @csrf
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Participantes', 'for_name'=>'participantes', 'class'=>'form-control','col'=>'12', 'value'=>$ata->participantes, 'dataRole'=>'tagsinput'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Titulo', 'for_name'=>'titulo', 'class'=>'form-control ','col'=>'12', 'value'=>$ata->titulo])
            @include('layouts.formulario.textarea', ['label'=>'Texto', 'for_name'=>'pauta', 'class'=>'form-control', 'rows'=>'10', 'value'=>$ata->pauta,'col'=>'12'])
            <br>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="anexos" style="margin-top: 20px">
            <div class="col-md-12">
                <div class='input-wrapper'>
                    <label for='file' class="">
                        SELECIONE OS ARQUIVOS
                    </label>
                    <input type='file' name="file[]" multiple="multiple" />
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @include('layouts.formulario.footer', ['link'=>'ata.index'])
        </div>
        <div role="tabpanel" class="tab-pane fade" id="historico" style="margin-top: 20px">
        
        </div>
    </form>
</div>
</div>

@push('styles')
<link href="{{ asset('css/tagsinput.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/tagsinput.min.js') }}"></script>
@endpush

@endsection/