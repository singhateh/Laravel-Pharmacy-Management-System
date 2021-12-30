@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Backups</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">App Backups</li>
	</ul>
</div>
<div class="col-sm-5 col">
    <form action="{{route('backup.store')}}" method="post">
        @csrf
        @method("PUT")
        <button class="btn btn-primary float-right mt-2" type="submit">Create Backup</button>
    </form>
	{{-- <a href="#add_categories" data-toggle="modal" class="btn btn-primary float-right mt-2">Add Category</a> --}}
</div>

@endpush

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-9 col-auto">
                <div class="page-header-title">
                    <h3 class="m-b-10">Backups</h3>
                </div>
            </div>
            <div class="col-sm-3 col">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                            Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Create Backup</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Users</h5>
                <form action="{{route('backup.store')}}" method="post">
                    @csrf
                    @method("PUT")
                    <button class="btn btn-primary float-right mt-2" type="submit">Create Backup</button>
                </form>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i>
                                        maximize</span><span style="display:none"><i class="feather icon-minimize"></i>
                                        Restore</span></a>
                            </li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                            class="feather icon-minus"></i> collapse</span><span style="display:none"><i
                                            class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i>
                                    reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i>
                                    remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="category-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
                                <th>ID</th>
                                <th>Disk</th>
                                <th>Backup Date</th>
                                <th>File Size</th>
								<th class="text-center action-btn">Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($backups as $k => $b)
                            <tr>
                                <td>{{ $k+1 }}</td>
                                <td>{{ $b['disk'] }}</td>
                                <td>{{ \Carbon\Carbon::createFromTimeStamp($b['last_modified'])->formatLocalized('%d %B %Y, %H:%M') }}</td>
                                <td>{{ round((int)$b['file_size']/1048576, 2).' MB' }}</td>
                                <td class="text-center">
                                    <div class="actions">
                                        @if ($b['download'])
                                        <a class="float-left" href="{{ route('backup.download') }}?disk={{ $b['disk'] }}&path={{ urlencode($b['file_path']) }}&file_name={{ urlencode($b['file_name']) }}">
                                            <button title="download backup" class="btn btn-primary" >
                                                <i class="fe fe-download"></i>
                                            </button>
                                        </a>
                                        @endif
                                        <form action="{{route('backup.destroy',$b['file_name'])}}?disk={{ $b['disk'] }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button title="delete backup" class="btn btn-danger" type="submit">
                                                <i class="fe fe-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Delete Modal -->
<x-modals.delete :route="'categories'" :title="'Category'" />
<!-- /Delete Modal -->
@endsection


@push('page-js')
<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#category-table').on('click','.editbtn',function (){
				event.preventDefault();
				jQuery.noConflict();
				$('#edit_category').modal('show');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#edit_id').val(id);
				$('.edit_name').val(name);
			});
			//
		});
	</script>

@endpush
