@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="text" required class="form-control" rows="16" placeholder="本文">{{ $article->text ?? old('body') }}</textarea>
</div>