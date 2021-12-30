@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oh Nooo!! 😢</strong> {{ Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>

@elseif(Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Oh Yess! 👍</strong> {{ Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@elseif ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@endif
