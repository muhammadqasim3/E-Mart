<div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Category Name" name="title" value="{{ isset($category->title) ? $category->title : null }}" required>
</div>

<div class="form-group">
   <label>Parent Category</label>
   <select name="parent_id" class="form-control">
      <option value="0">Select Parent Category</option>
      @foreach($categories as $category)
         <option value="{{ $category->title }}" selected>{{ $category->title }}</option>
      @endforeach
   </select>
</div>

@if(isset($category))
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" @if($category->status == 1) checked="checked" @endif>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0" @if($category->status == 0) checked="checked" @endif>Inactive</label>
</div>
@else
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" checked>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>
</div>
@endif