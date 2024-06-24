<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- <link rel="stylesheet" href="CSS/all.min.css"> -->
    
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>



<!-- Content div -->
 <div class="container">
       <!-- backround cover -->
<div class="background">
    
</div>

<!-- prifile picture -->
<div class="profile-div">
    <div class="profile-pic">
    
    </div>
</div>

<!-- Description div -->
   <div class="description">
        <h2>Moataz</h2>
        <p>21 y.o Egyption Fine Artist and Youtuber.</p>
        <h4>"be like the moon, even alone it doesn't stop shining 🌖✨🪐"</h4>
        <p>#FreePalstine🍉</p> 
        <nav>
            <a href="https://www.instagram.com/moataz_63/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://youtube.com/channel/UChSeSZL5JybY6fS6iiMEUGg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.facebook.com/moatazghander" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </nav>
       
    </div>

    <!-- send me btn -->
     <button id="sendMe"><a href="{{route('profile.sendme')}}"><i style="display:block;"  class="fa-solid fa-paper-plane"></i></a></button>

<!-- small container -->
 <div class="small-container">
    <div class="post">
      
       <a href="#"><h4>Latest Artwork </h4></a> 
        <img src="storage/images/gallery/{{$lastIndex}}.jpg" alt="not found" srcset="">
        
      <a href="{{$link}}" style="display: block;">view post -></a>

    </div>
    <div class="post gallary">
     
     
       <a href="{{route('profile.gallery')}}"><h4>Gallary -></h4></a> 
        <img src="storage/images/gallery/1.jpg" alt="not found" srcset="">
       

    </div>
    <div class="post video">
       <a href="{{route('profile.vidoes')}}"><h4>Videos -></h4></a> 
        <video src="storage/{{$video->path}}" type="video/mp4" muted loop autoplay></video>
      <a href="{{$video->link}}">view video</a>

    </div>
 
 </div>





 </div>

<!-- footer -->
 <footer id="footer">
    <p>
      Email : moatazahmdeghander2003@gmail.com <br>
        updated at  : 6/16/2024
    </p>
    <nav>
        <a href="https://www.instagram.com/moataz_63/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://youtube.com/channel/UChSeSZL5JybY6fS6iiMEUGg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://www.facebook.com/moatazghander" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    </nav>

 </footer>


 <script >
    let  slideIndex=0;
function showSlides(){
 let slide =document.querySelector('.gallary img');
 slideIndex++;
 if(slideIndex==6){
  slideIndex=0;
 }
 
  slide.src=`storage/images/gallery/${slideIndex+1}.jpg`;

 

  setTimeout(showSlides, 3000); // Change slide every 2 seconds (adjust as needed)
   }


document.addEventListener("DOMContentLoaded", function() {
  showSlides();
});



</script>
</body>
</html>