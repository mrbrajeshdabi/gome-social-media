$(document).ready(function(){
  $("#uploadpic").on("change",function(){
    let reader = new FileReader();
    reader.readAsDataURL(this.files[0]);
    reader.onload=function()
    {
      const url = this.result;
      $("#uploadicon").addClass("d-none");
      $("#upload_img").attr("src",url);
      $("#uploadbtn").removeClass("disabled");
      /*$("#uploadsong").on("change",function(){
        let reader2 = new FileReader();
        reader2.readAsDataURL(this.files[0]);
        reader2.onload=function()
        {
          $("#audio").attr("src",this.result);
          $("#audio").get(0).play();
        }
      })*/
    }
  })
})
//const obj ={status:true,songname:"Yeda Young Bgm",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/yeda-yung-instrumental-66059.mp3"};
//const obj2 = {status:true,songname:"Ham Tere Bin",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/tum-hi-ho-instru-1319-66052.mp3"};
//const obj3 = {status:true,songname:"Sanam Teri Kasam",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/sanam-teri-kasam-reprise-ringtone-17658-1-65898.mp3"};
//const obj4 = {status:true,songname:"Tumhe Yuhi Chayengye",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/new-romantic-ringtone-2024-new-ringtonehindi-ringtone-love-story-ringtone-b-65903.mp3"};
//const obj5 = {status:true,songname:"Sanam Teri Kasam 2",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/sanam-teri-kasam-ringtone-instrumental-download-mp3-mobcup-com-co-65910.mp3"};
//const obj6 = {status:true,songname:"Ayega Ayega",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/downloadfile-0-65913.mp3"};
//const obj7 = {status:true,songname:"Me chillam Ke sutte",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/main-door-mohabbat-ishq-ta-su-chilam-ke-sutte-raj-mawar-haryanvi-65934.mp3"};
//const obj8 = {status:true,songname:"Har Har Mahadev",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/aud-20231222-wa0000-62879-1-62986-3-65951.mp3"};
//const obj9 = {status:true,songname:"Har Din Tujhe Chahu",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/haidilyemeraarijitgsinghwwwwapbosscomringtone-11264-65955.mp3"};
//const obj10 = {status:true,songname:"Vande Matram",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/vande-mataram-a-r-rahman-ringtone-download-mobcup-com-co-65965.mp3"};
//const obj11 = {status:true,songname:"Tu Ishq He To Me Baaho Me Hu",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/tu-hain-toh-main-hoon-65718-3-65998.mp3"};
//const obj12 = {status:true,songname:"Ham Katha Sunate",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/hum-katha-sunate-56711-66016.mp3"};
//const obj13 = {status:true,songname:"Kaithi Special",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/kaithi-bgm-62067.mp3"};
//const obj14 = {status:true,songname:"Vikram Vedha",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/vikramvedharingtone-36267.mp3"};
//const obj15 = {status:true,songname:"Rolex",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/rolex-bgm-57457-57488.mp3"};
//const obj16= {status:true,songname:" Me Jaha Rhu",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/03mainjahanrahoonwwwdownloadmingcomringtone-22564.mp3"};
//const obj17 = {status:true,songname:"Meri Wali Sardani",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/mera-wali-sardarni-ringtone-jag-new-punjabi-latest-mp3-128k-45949.mp3"};
//const obj18 = {status:true,songname:"Mera Wala Sardar",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/download-ringtone-10766-45353.mp3"};
//const obj19 = {status:true,songname:"We Tom And Jerry",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/tom-and-jerry-satbir-aujla-46766.mp3"};
//const obj20 = {status:true,songname:"Gal Karke",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/tom-and-jerry-satbir-aujla-46766.mp3"};
//const obj21 ={status:true,songname:"Ham Jese Ji Rhe He",songurl:"https://www.ringtonesfx.com/wp-content/uploads/2/Hum-Jaise-Jee-Rahe-Hai-Koi-Jee-Ke-To-Bataye-Female-Ringtone.mp3"};
//const obj22 = {status:true,songname:"Tune To Pal Bhar Me",songurl:"https://www.ringtonesfx.com/wp-content/uploads/9/Tune-Bhi-Pal-Bhar-Mein-Chori-Kiya-Re-Jiya-More-Piya-Ringtone.mp3"};
//const obj23 = {status:true,songname:"O Re Priya",songurl:"https://www.ringtonesfx.com/wp-content/uploads/11/O-Re-Piya-Hindi-Song-Ringtone.mp3"};
///const obj24 = {status:true,songname:"Saanso Ki Huya Re Kasur",songurl:"https://www.ringtonesfx.com/wp-content/uploads/12/Piya-O-Re-Piya-Ringtone.mp3"};
////const obj25 = {status:true,songname:"Najre Bole Duniya Tole",songurl:"https://www.ringtonesfx.com/wp-content/uploads/6/Nazre-Bole-Duniya-Tole-Dil-Ki-Zubaan-O-Re-Piya-Ringtone.mp3"};
//const obj26 = {status:true,songname:"O Love You",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/love-you-oye-49307.mp3"};
//const obj27 = {status:true,songname:"Chand Balliya Hoto",songurl:"https://ringtonesnew.com/wp-content/uploads/2022/03/Chaand-Baaliyan-Hindi-Aditya.mp3"};
//const obj28 = {status:true,songname:"Me dhoodne Ko Jamane",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/maindhoondnekozamaanemeindjmazainforingtone-2504.mp3"};
//const obj29 = {status:true,songname:"Mene Payal He Chankai",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/aud-20180201-wa0054-47349.mp3"};
//const obj30 = {status:true,songname:"Esa Dekha Nhi Khobsoorat",songurl:"https://ringtoneop.com/download/?id=5537&post=5536"};
//const obj32 = {status:true,songname:"New World",songurl:"https://pagalworldringtones.click/ringtonedownload/best-world-ringtone-instrumental-ringtone-new-ringtone-english-instrumental-ringtone1140048139.mp3"};
//const obj33 = {status:true,songname:"Spider Man",songurl:"https://pagalworldringtones.click/ringtonedownloadchv1/spider-man-no-way-home-bgm-l-bgm-club69863230.mp3"};
//const obj34 = {status:true,songname:"Iron Man",songurl:"https://pagalworldringtones.click/ringtonedownloadv4/amplifier-ft-iron-man-iron-man-whatsapp-status-hd-tony-stark-shorts-avengers-ironman2083297823.mp3"};
//const obj35 = {status:true,songname:"Captain Jack Sparrow",songurl:"https://pagalworldringtones.click/ringtonedownloadv2/gasolina-ft-two-legends-edit-ironman-edit-caption-jack-sparrow-edit-gasolina-song-status1805609857.mp3"};
//const obj36= {status:true,songname:" Sidhu Moosewala",songurl:"https://pagalworldringtones.click/ringtonedownloadv2/410-song-ringtone-410-song-ringtone-sidhu-moose-wala-410-ringtone343847219.mp3"};
//const obj37 = {status:true,songname:"Masumiyat-Lut-Ji-Gayi",songurl:"https://www.ringtonesfx.com/wp-content/uploads/2/Masumiyat-Lut-Ji-Gayi-Hasa-Udju-Chehre-Ton-Ringtone.mp3"};
//const obj38 = {status:true,songname:"Teri Masoomiyat Ne",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/terimasumiyatwaploftcomringtone-13224.mp3"};
//const obj39 = {status:true,songname:"Surili Ankhiyo Wali",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/surili-akhiyon-wale-instrumental-bgm-romantic-veer-59244.mp3"};
//const obj40 = {status:true,songname:"Kuch Soch Ke Bola Hoga",songurl:"https://dl.prokerala.com/downloads/ringtones/files/mp3/tera-ghata-ringtone-download-free-1-46156.mp3"};

let array = new Array(obj,obj2,obj3,obj4,obj5,obj6,obj7,obj8,obj9,obj10,obj11,obj12,obj13,obj14,obj15,obj16,obj17,obj18,obj19,obj20,obj21,obj22,obj23,obj24,obj25,obj26,obj27,obj28,obj29,obj30,obj31,obj32,obj33,obj34,obj35,obj36,obj37,obj38,obj39,obj40);


for(i=0; i<array.length; i++)
{
  //console.log(array[i].songurl)
  let listbox= document.querySelector(".musiclistbox");
  let tools = document.createElement("DIV");
  tools.setAttribute("class","toolbox d-flex justify-content-center mb-5")
  const playbtn = document.createElement("I");
  playbtn.setAttribute("class","btn btn-dark fa fa-volume-up");
  playbtn.setAttribute("url",array[i].songurl);
  //playbtn.className = "playBtn";
  const pausebtn = document.createElement("I");
  pausebtn.setAttribute("class","btn btn-dark fa fa-plus-square ms-5");
  pausebtn.setAttribute("url",array[i].songurl);
 // pausebtn.className = "pauseBtn";
  let names = document.createElement("DIV");
  names.setAttribute("class","name");
  let songname = document.createElement("P");
  songname.innerHTML=array[i].songname;
  songname.setAttribute("class","alert alert-success");
  // append child
  try{
    names.appendChild(songname);
    tools.appendChild(playbtn);
    tools.appendChild(pausebtn);
    listbox.appendChild(names);
    listbox.appendChild(tools);
    playbtn.onclick=function(){
     // this.innerHTML="Playing..";
      let url = this.getAttribute("url");
      let dos = document.querySelector("#listaudio")
      dos.setAttribute("src",url);
      dos.play();
    }
    pausebtn.onclick=function(){
      let url = this.getAttribute("url");
      let dos = document.querySelector("#listaudio")
      dos.setAttribute("src",url);
    }
  }
  catch(err)
  {
    console.log(err)
  }
  
}