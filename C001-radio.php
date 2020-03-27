

<form name="radioB[]">
  <?php
$city=["オタワ",
"トロント",
"モントリオール",
"ジュネーブ",
"チューリッヒ","
ベルン",
"ハンブルク",
"ブレーメン",
"ベルリン",
"バルセロナ",
"マドリード",
"リスボン",
"シドニー",
"メルボルン",
"キャンベラ"];

$okuni = ["カナダ","スイス","ドイツ","スペイン","オーストラリア"];
$c=0;
foreach ($city as $key => $value) {
  if($key % 3 ==0){
  echo $okuni[$c++],"の首都は?<br>";}
  echo "<input type ='radio' name='Q$c' value='$key'>$value<br>";
  
}

?>


カナダの首都は？<br>
<label><input type="radio" name="Q1" value="0" checked="checked">オタワ</label><br>
<label><input type="radio" name="Q1" value="1">トロント</label><br>
<label><input type="radio" name="Q1" value="2">モントリオール</label><br>
<br>
スイスの首都は？<br>
<label><input type="radio" name="Q2" value="3" checked="checked">ジュネーブ </label><br>
<label><input type="radio" name="Q2" value="4">チューリッヒ</label><br>
<label><input type="radio" name="Q2" value="5">ベルン</label><br>
<br>
ドイツの首都は？<br>
<label><input type="radio" name="Q3" value="6" checked="checked">ハンブルク</label><br>
<label><input type="radio" name="Q3" value="8">ブレーメン</label><br>
<label><input type="radio" name="Q3" value="8">ベルリン</label><br>
<br>
スペインの首都は？<br>
<label><input type="radio" name="Q4" value="9" checked="checked">バルセロナ</label><br>
<label><input type="radio" name="Q4" value="10">マドリード</label><br>
<label><input type="radio" name="Q4" value="11">リスボン</label><br>
<br>
オーストラリアの首都は？<br>
<label><input type="radio" name="Q5" value="12" checked="checked">シドニー</label><br>
<label><input type="radio" name="Q5" value="13">メルボルン</label><br>
<label><input type="radio" name="Q5" value="14">キャンベラ</label><br>
<br>
<input type="submit" value="採点" name="submit" />
</form>

<?php
if(isset($_REQUEST["submit"])){ //もしname=サブミットに値が入ったら⇒採点ボタンを押したら
  $seikai = 0;                  //変数seikaiを作る。
  $trueans = [0,5,8,10,14];     //配列tureansを作る。
  for ($i=0; $i < 5; $i++) { //5回繰り返す
    $q = $i+1; //変数＄qを作り$iが増えるたびに1増える。 0回目のチェックでQ1を示す。
    if (isset($_REQUEST["Q$q"])&&$_REQUEST["Q$q"] == $trueans[$i]) { //もしQ＄qのvalueの数字が$trueansと一致していたら
      $seikai++;
    }
  }
  
  echo "あなたは",$seikai*20,"点でした";
}
  ?>