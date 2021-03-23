<div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" placeholder="Enter Banner Name" name="title" value="{{ isset($banner->title) ? $banner->title : null }}" required>
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