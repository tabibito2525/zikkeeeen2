var images = ["./images/1.jpg",
"./images/2.jpg",
"./images/3.jpg",
"./images/4.jpg",
"./images/5.jpg"];
var indexx = 0;
images[Math.floor(Math.random()*images.length)];

//var list_num = 8
//var element_num = 8
//var first_setting = 1

//var flag = [[0]*element_num for i in range(list_num)]

//for (i in range(list_num)):
//    for j in range(element_num):        
//        flag[i][j] = first_setting

//console.log(flag);


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
   indexx;
   //indexx++;
   indexx = indexx % images.length; 
   img.src = images[indexx];
   //<audio src="audiotest1.mp3">
}



function send_data(){
   console.log("テスト");
   //<audio src="audiotest1.mp3">
}