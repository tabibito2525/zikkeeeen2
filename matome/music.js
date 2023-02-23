var musics = ["./musics/1.mp3",
"./musics/2.mp3",
"./musics/3.mp3",
"./musics/4.mp3",
"./musics/5.mp3"];
var index2 = 0;

function makemusic() {
   var audio = document.createElement('audio')
   audio.src = musics[index2];
   document.getElementById('content2').appendChild(audio);
   //<audio src="audiotest1.mp3">
}

function nextmusics(){
   const audio = document.getElementById('content2').getElementsByTagName('audio')[0]
   index2++;
   index2 = index2 % musics.length; 
   audio.src = musics[index2];
   //<audio src="audiotest1.mp3">
}