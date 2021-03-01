<div class="form-group">
   
   <label>Name</label>
   <select name="category_id" class="form-control">
      <option value="">--- Select Category ---</option>
      @foreach($categories as $category)
         <option value="{{ $category->id }}">{{ $category->title }}</option>
      @endforeach
   </select>
</div>
<div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Product Name" name="name" value="{{ isset($product->name) ? $product->name : null }}" required>
</div>
<!-- Name Field -->
<div class="form-group">
   <label>Code</label>
   <input type="text" class="form-control" placeholder="Enter Product Code" name="code" value="{{ isset($product->code) ? $product->code : null }}" required>
</div>
<div class="form-group">
   <label>Color</label>
   <input type="text" class="form-control" placeholder="Enter Product Color" name="color" value="{{ isset($product->color) ? $product->color : null }}" required>
</div>
<div class="form-group">
   <label>Description</label>
   <textarea name="description" class="form-control">{{ isset($product->description) ? $product->description : null  }}</textarea>
</div>
<div class="form-group">
   <label>Price($)</label>
   <input type="number" step="0.01" class="form-control" name="price" value="{{ isset($product->price) ? $product->price : null }}" placeholder="Enter Product Price" required>
</div>

@if(isset($product->image))  
<img src="{{ asset('uploads/products/'.$product->image) }}" width="100px">
@else
<img src="{{ asset('admin_assets/dist/img/default_image.png') }}" width="100px">
@endif

<div class="form-group">
   <label>Picture upload</label>
   <input type="file" name="image">
</div>

@if(isset($product))
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" @if($product->status == 1) checked="checked" @endif>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0" @if($product->status == 0) checked="checked" @endif>Inactive</label>
</div>
@else
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" checked>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>
</div>
@endif