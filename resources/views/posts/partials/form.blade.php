<input type="hidden" name="published" value="0">

<div class="form-group">
  <label for="title">Title</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
  @error('title')
    <span style="color: red;">{{ $message }}</span>
  @enderror
</div>
<div class="form-group">
  <label for="content">Title</label>
  <textarea id="content" name="content" cols="30" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
  @error('content')
    <span style="color: red;">{{ $message }}</span>
  @enderror 
</div>
<div class="form-group form-check">
  <input type="checkbox" id="published" name="published" class="form-check-input" value="1" 
         {{ old('published', $post->published) == '1' ? 'checked' : '' }}>  
  <label for="published" class="form-check-label">Published</label>      
</div>