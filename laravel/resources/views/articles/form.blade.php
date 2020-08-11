@csrf
<div class="form-group mt-5 pb-5">
  <strong>募集ポジション</strong>
  <strong class="text-danger">必須</strong>
  <div class="form-control">

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="ボケ" name="position" value="ボケ"  
        <?php 
          if( !empty($article->position)){
            if($article->position === "ボケ") {
              echo 'checked';
            }
          }
        ?>
      required>
      <label class="custom-control-label" for="ボケ">ボケ</label>
    </div>
   
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="ツッコミ" value="ツッコミ" name="position"
        <?php 
          if( !empty($article->position)){
            if($article->position === "ツッコミ") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="ツッコミ">ツッコミ</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="作家" value="作家" name="position"
        <?php 
          if( !empty($article->position)){
            if($article->position === "作家") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="作家">作家</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="その他(ポジション)" value="その他" name="position"
        <?php 
          if( !empty($article->position)){
            if($article->position === "その他") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="その他(ポジション)">その他</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="問わない(ポジション)" value="問わない" name="position"
        <?php 
          if( !empty($article->position)){
            if($article->position === "問わない") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="問わない(ポジション)">問わない</label>
    </div>
  </div>
</div>

<div class="form-group mt-5 pb-5">
  <strong>募集スタイル</strong>
  <strong class="text-danger">必須</strong>

  <div class="form-control">

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="漫才" value="漫才" name="style" 
        <?php 
          if( !empty($article->style)){
            if($article->style === "漫才") {
              echo 'checked';
            }
          }
        ?>
      required>
      <label class="custom-control-label" for="漫才">漫才</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="コント" value="コント" name="style"
        <?php 
          if( !empty($article->style)){
            if($article->style === "コント") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="コント">コント</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="その他(スタイル)" value="その他" name="style"
        <?php 
          if( !empty($article->style)){
            if($article->style === "その他") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="その他(スタイル)">その他</label>
    </div>

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input bg-danger" id="問わない(スタイル)" value="問わない" name="style"
        <?php 
          if( !empty($article->style)){
            if($article->style === "問わない") {
              echo 'checked';
            }
          }
        ?>
      >
      <label class="custom-control-label" for="問わない(スタイル)">問わない</label>
    </div>

  </div>

</div>

<div class="md-form mt-5 pb-5">
  <strong>タイトル</strong>
  <strong class="text-danger">必須</strong>
  <input type="title" name="title" class="form-control" placeholder="100文字以内" required value="{{ $article->title ?? old('title') }}">
</div>

<div class="md-form mt-5 pb-5">
  <strong>イメージ画像(任意)</strong>
  <input type="file" name="image" class="form-control" value="{{ old('image') }}">
</div>

<div class="form-group shadow-textarea mt-5 pb-5">
  <strong>本文</strong>
  <strong class="text-danger">必須</strong>
  <textarea name="text" required class="form-control z-depth-2" rows="16" placeholder="2000文字まで打てます">{{ $article->text ?? old('text') }}</textarea>
</div>



