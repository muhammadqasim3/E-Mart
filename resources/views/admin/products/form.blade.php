

<div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Product Name" name="name" value="{{ $product->name }}" required>
</div>
<div class="form-group">
   <label>Code</label>
   <input type="text" class="form-control" placeholder="Enter Product Code" name="code" value="{{ $product->code }}" required>
</div>
<div class="form-group">
   <label>Color</label>
   <input type="text" class="form-control" placeholder="Enter Product Color" name="color" value="{{ $product->color }}" required>
</div>
<div class="form-group">
   <label>Description</label>
   <textarea name="description" class="form-control">{{ $product->description }}</textarea>
</div>
<div class="form-group">
   <label>Price($)</label>
   <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" placeholder="Enter Product Price" required>
</div>
  
<img src="{{ asset('uploads/products/'.$product->image) }}" width="100px">
  
<div class="form-group">
   <label>Picture upload</label>
   <input type="file" name="image">
</div>
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" @if($product->status == 1) checked="checked" @endif>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0" @if($product->status == 0) checked="checked" @endif>Inactive</label>
</div>
