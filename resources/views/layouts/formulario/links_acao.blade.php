<div class="text-center tools">
    <form action="{{ route( "$control.destroy", $list->id) }}" method="POST" id="formDelete">
        @csrf
        <a href="{{ route("$control.show", $list->id) }}" class="btn-social-icon btn-bitbucket btn bg-aqua-active">
            <i class="fa fa-file"></i>
        </a>
        <a href="{{ route("$control.edit", $list->id) }}" class="btn-social-icon btn-bitbucket btn bg-orange-active">
            <i class="fa fa-edit"></i>
        </a>
        <a href="javascript:{0}"  onclick="document.getElementById('formDelete').submit(); return false;" class="btn-social-icon btn-bitbucket btn bg-red-active">
            <i class="fa fa-trash"></i>
        </a>
    </form>
</div>