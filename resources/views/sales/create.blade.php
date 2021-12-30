<form method="POST" action="{{ route('sales') }}">
    @csrf
    <div class="row form-row">
        <div class="col-12">
            <div class="form-group">
                <label>Product <span class="text-danger">*</span></label>
                <select class="select2 form-select form-control edit_product" name="product">
                    <option value="" selected disabled>Select Product</option>
                    @foreach ($products as $product)
                        @if (!empty($product->purchase))
                            @if (!($product->purchase->quantity <= 0))
                                <option value="{{ $product->id }}">{{ $product->purchase->name }}
                                </option>
                            @endif
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <input type="hidden" name="edit_id" id="edit_id">
        <div class="col-12">
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" value="1" class="form-control edit_quantity" name="quantity">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
</form>