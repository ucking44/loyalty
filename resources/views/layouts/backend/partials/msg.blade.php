@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">x</i>
                </button>
                <span><b> {{ $error }} </b> </span>
            </div>
        @endforeach
    </ul>
@endif

@if (session('successMsg'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">x</i>
        </button>
        <span><b> {{ session('successMsg') }} </b> </span>
    </div>
@endif


{{-- @if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span><b> {{ $error }} </b> </span>
        </div>
    @endforeach
</ul>
@endif --}}



{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
            <span>
                <b> Danger - </b> {{ $error }}
            </span>
        </div>
    @endforeach
@endif

@if(session('successMsg'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
        <span>
            <b> Success - </b> {{ session('successMsg') }}
        </span>
    </div>
@endif --}}
