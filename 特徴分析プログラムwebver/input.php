<!DOCTYPE html>
<html lang="ja">
<head>
<style>
	h1 {
  color:orange;
      text-align: center;
}

.contents {
  background-color: #FFC778;
    text-align: center;
}

.set_button {
  border-top :solid 2px #FFA07A;
  border-left: solid 2px #FFA07A;
      text-align: center;
}

.set_button2 {
  border-bottom: solid 2px #FFA07A;
  border-right: solid 2px #FFA07A;
      text-align: center;
}

.button11{
    /*コレ*/text-align: center;

}

.button12{
    /*コレ*/text-align: center;
    border: 1px solid #999;
    padding: 10px;
    background: #fff9cc;
    margin-top:10px;
}


</style>

<meta charset="utf-8">
<script src="imageArray.js"></script>
<script src="button2.js"></script>
<script src="music.js"></script>
<script>
	var images = ["./images/1.jpg",
"./images/2.jpg",
"./images/3.jpg",
"./images/4.jpg",
"./images/5.jpg"];

var min = 5 ;
var max = 10 ;

var music = Math.floor( Math.random() * (max + 1 - min) ) + min ;

var indexx = music;


function makeImage() {
   var img = document.createElement('img')
   img.src = images[indexx];

   document.getElementById('content').appendChild(img);
   //<audio src="audiotest1.mp3">
}


function audio() {
    document.getElementById('btn_audio').currentTime = 0; //連続クリックに対応
    document.getElementById('btn_audio').play(); //クリックしたら音を再生
}


function nextImage(){
   var img = document.getElementById('content').getElementsByTagName('img')[0]
   indexx++;
   indexx = indexx % images.length; 
   img.src = images[indexx];
   //<audio src="audiotest1.mp3">
}



function send_data(){
   console.log("テスト");
   //<audio src="audiotest1.mp3">
}

</script>

<link rel="stylesheet" href="styles.css">
<title>画像表示君_</title>

<body onload="makeImage()">


<h1>キャラクタの声が合っていると感じましたか</h1>
<div class="button11">
<button class="button12" id="button1" onclick="func1();nextImage();audio();butotnClick()">押下するとランダム画像表示</button>
</div>
<br>

<div class="contents" id="content" ></div>

<audio id="btn_audio">
    <source src="./musics/1.mp3" type="audio/mp3">
</audio>

<p class="set_button">評価値を選んだら下のボタンを押して下さい</p>
<!-- 実験 
  <div> メールアドレス</div>
  <input type="button" value="おせえええ" name="mail">
-->
<div class="set_button2">
	<form method="post" action="send.php" id="travelbox">
<label><input type="radio" name="checkValue" value="1">1(全然感じない)</label>
<label><input type="radio" name="checkValue" value="2">2(感じない)</label>
<label><input type="radio" name="checkValue" value="3">3(どちらでもない)</label>
<br>
<label><input type="radio" name="checkValue" value="4">4(感じる)</label>
<label><input type="radio" name="checkValue" value="5">5(とても感じる)</label>
</div>

<!-- phpでデータ送信 -->


  <div class="name">氏名</div>
  <input type="text" name="name" >
  <div class="2_mail"> メールアドレス</div>
  <input type="email" name="mail">

 
  <div class="3_music"> 音声の番号</div>
  <input type=""text name="music" placeholder ="consoleログを見て下さい" ></textarea>
  <div>


  <div class="4_gazou"> 画像の番号</div>
  <input type=""text name="index2" placeholder ="consoleログを見て下さい"></textarea>
  <!--
  <textarea name="index2"></textarea>

 <div> 評価値</div>
  <textarea name="checkValue"></textarea>
-->
  <div>
  <input type="submit" id="button2" onclick="butotnClick()" disabled id="checkButton" onclick="func2()"  value="評価値決定ボタン"  >
  </div>

</div>

</form>

<!-- ラジオボタン送信 -->
<script>
function butotnClick(){
  //let checkValue = travelbox.elements['travel'].value;
  console.log('音声は ' + 1 +'画像は ' + indexx + 'です。');
  //console.log('選ばれた画像は ' + btn_audio + ' です');
}



let travelbox = document.getElementById('travelbox');
travelbox.elements[1].checked = true;

let checkButton = document.getElementById('checkButton');
checkButton.addEventListener('click', butotnClick);

        function func1() {
          document.getElementById("button1").disabled = true;
          document.getElementById("button2").disabled = false;
          // let myname_val = document.getElementById("myname").value;
          //document.getElementById("output").innerHTML = `入力された値は「${myname_val}」です。`; 
        }

        function func2() {
          document.getElementById("button1").disabled = false;
          document.getElementById("button2").disabled = true;
          //document.getElementById("myname").value = "";
          //document.getElementById("output").innerHTML = "";
        }
</script>

</body>
</html>