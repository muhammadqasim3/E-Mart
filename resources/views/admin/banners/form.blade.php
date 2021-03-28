<div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Banner Name" name="title" value="{{ isset($banner->title) ? $banner->title : null }}" required>
</div>
<div class="form-group">
   <label>Text Syle</label>
   <input type="text" class="form-control" placeholder="Enter Text Style" name="text_style" value="{{ isset($banner->text_style) ? $banner->text_style : null }}" required>
</div>
<div class="form-group">
   <label>Sort Order</label>
   <input type="text" class="form-control" placeholder="Enter Sort Order" name="sort_order" value="{{ isset($banner->sort_order) ? $banner->sort_order : null }}" required>
</div>

<div class="form-group">
   <label>Content</label>
   <input type="text" class="form-control" placeholder="Enter Banner Content" name="content" value="{{ isset($banner->content) ? $banner->content : null }}" required>
</div>

<div class="form-group">
   <label>Link</label>
   <input type="text" class="form-control" placeholder="Enter Banner Link" name="link" value="{{ isset($banner->link) ? $banner->link : null }}" required>
</div>

@if(isset($banner))
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" @if($banner->status == 1) checked="checked" @endif>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0" @if($banner->status == 0) checked="checked" @endif>Inactive</label>
</div>
@else
<div class="form-check">
   <label>Status</label><br>
   <label class="radio-inline">
   <input type="radio" name="status" value="1" checked>Active</label>
   <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>
</div>
@endif