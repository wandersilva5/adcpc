<div class="btn-group">
    <form action="{{ route( "$control.destroy", $list->id) }}" method="POST">
        @csrf
        <a href="{{ route("$control.show", $list->id) }}" class="btn btn-success waves-effect">
            <i class="fas fa-eye"></i>
        </a>
        <a href="{{ route("$control.edit", $list->id) }}" class="btn btn-warning waves-effect">
            <i class="fas fa-edit"></i>
        </a>
        <button class="btn btn-danger waves-effect">
            <i class="fas fa-trash"></i>
        </button>
    </form>
</div>