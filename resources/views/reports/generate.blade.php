<form method="POST" action="{{ route('reports') }}">
    @csrf
    <div class="row form-row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>From</label>
                        <input type="date" value="{{ request()->from_date ?? '' }}" name="from_date" class="form-control from_date">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>To</label>
                        <input type="date" value="{{ request()->to_date ?? '' }}" name="to_date" class="form-control to_date">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Resource</label>
                <select class="select2 form-control select" name="resource">
                    <option value="products" {{ request()->resource == "products"  ? 'selected' : ''}}>Medicines</option>
                    <option value="purchases" {{ request()->resource == "purchases"  ? 'selected' : ''}}>Stocks</option>
                    <option value="sales" {{ request()->resource == "sales"  ? 'selected' : ''}}>Sales</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Search Report</button>
</form>