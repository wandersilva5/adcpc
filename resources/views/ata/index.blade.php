@extends('layouts.master')

@section('title') <i class="fas fa-lg fa-id-card"></i> Ata @section('description') Lista de Atas Lançadas @endsection       
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <a class="btn btn-primary waves-effect" href="{{ route('ata.create') }}">
            <i class="fas fa-plus-circle"></i>
            <span> NOVA ATA</span>
        </a>
    </div>
    <div class="col-md-12">
        @include('ata.list', ['atas_list' => $atas])
    </div>
</div>

@push('styles')
    <style>
    td {
    max-width: 100px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
@endpush

@push('script')
<script src="{{asset('js/plugins/chartjs/Chart.bundle.js')}}"></script>
<script src="{{asset('js/pages/charts/chartjs.js')}}"></script>
@endpush
@endsection