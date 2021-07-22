function gallary(){
    var elem = document.querySelector("#captions");
    var gradient = "linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),";
    var images = [
        "vlcsnap-2021-02-07-22h05m47s372.png",
        "jacqueline-kelly-PeUJyoylfe4-unsplash.jpg",
       "vlcsnap-2021-02-07-22h06m12s023.png",
       "vlcsnap-2021-02-07-22h06m16s953.png"
    ];
    

    var id = setInterval(changeImage,5000);

    function changeImage(){

         var point = Math.floor(Math.random() *(4-0))+0;
         var imageSrc = "../assets/"+images[point];
         elem.style.backgroundImage = gradient +'url('+ imageSrc+ ')';
      
    }

}