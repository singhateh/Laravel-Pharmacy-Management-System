<form method="POST" enctype="multipart/form-data" action="{{ route('users') }}">
    @csrf
    <input type="hidden" name="id" id="edit_id">
    <div class="row form-row">
        <div class="col-12">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control edit_name" placeholder="John Doe">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control edit_email">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Role</label>
                <div class="form-group">
                    <select class="select2 form-select form-control edit_role" name="role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-12">
           <div class="row">
               <div class="col-md-8">
                <div class="form-group">
                    <label>Picture</label>
                    <input type="file" name="avatar">
                </div>
               </div>
               <div class="col-md-4" id="avatar">
                  <img width="40" src="{{ asset('storage/users/'.auth()->user()->avatar) }}" alt="">
               </div>
           </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
</form>
