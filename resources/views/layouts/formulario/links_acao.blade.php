<div class="text-center">
    <form action="{{ route( "$control.destroy", $list->id) }}" method="POST">
        @csrf
        <a href="{{ route("$control.show", $list->id) }}" class="btn btn-success btn-social-icon">
            <i class="fa fa-eye"></i>
        </a>
        <a href="{{ route("$control.edit", $list->id) }}" class="btn btn-warning btn-social-icon">
            <i class="fa fa-edit"></i>
        </a>
        <button class="btn btn-danger btn-social-icon">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</div>