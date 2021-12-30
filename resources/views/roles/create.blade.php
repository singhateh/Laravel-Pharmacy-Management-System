<form method="POST" action="{{ route('roles') }}">
    @csrf
    <div class="row form-row">
        <div class="col-12">
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" class="form-control edit_role">
            </div>
            <div class="form-group">
                <lable>Select Permissions</lable>
                <select class="select2 form-select form-control edit_perms" name="permission[]"
                    multiple="multiple">
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
</form>