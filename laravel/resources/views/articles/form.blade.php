@csrf
<div class="md-form">
  <strong>タイトル</strong>
  <strong class="text-danger">必須</strong>
  <input type="title" name="title" class="form-control" placeholder="100文字以内" required value="{{ $article->title ?? old('title') }}">
</div>

<div class="md-form">
  <input type="file" name="image" class="form-control" >
</div>

<div class="form-group">
  <strong>希望ポジション</strong>
  <strong class="text-danger">必須</strong>
  <div class="form-control">
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="ボケ" name="position" value="ボケ" required>
      <label class="custom-control-label" for="ボケ">ボケ</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="ツッコミ" value="ツッコミ" name="position">
      <label class="custom-control-label" for="ツッコミ">ツッコミ</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="作家" value="作家" name="position">
      <label class="custom-control-label" for="作家">作家</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="その他(ポジション)" value="その他" name="position">
      <label class="custom-control-label" for="その他(ポジション)">その他</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="問わない(ポジション)" value="問わない" name="position">
      <label class="custom-control-label" for="問わない(ポジション)">問わない</label>
    </div>
  </div>
</div>

<div class="form-group">
  <strong>希望形態</strong>
  <strong class="text-danger">必須</strong>
  <div class="form-control">
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="漫才" value="漫才" name="type" required>
      <label class="custom-control-label" for="漫才">漫才</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="コント" value="コント" name="type">
      <label class="custom-control-label" for="コント">コント</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="その他(スタイル)" value="その他" name="type">
      <label class="custom-control-label" for="その他(スタイル)">その他</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="問わない(スタイル)" value="問わない" name="type">
      <label class="custom-control-label" for="問わない(スタイル)">問わない</label>
    </div>
  </div>

</div>


<div class="form-group shadow-textarea">
  <strong>本文</strong>
  <strong class="text-danger">必須</strong>
  <textarea name="text" required class="form-control z-depth-2" rows="16" placeholder="本文">{{ $article->text ?? old('text') }}</textarea>
</div>


