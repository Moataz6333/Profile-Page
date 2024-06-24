<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary</title>
  
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
   <a href="{{route('profile.index')}}" class="back"><i class="fa-solid fa-arrow-left"></i></a>


 <div class="categories">
    <button class="all active">All</button>
    <button class="watercolor ">watercolor</button>
    <button class="gouache">gouache</button>
    <button class="pencil">pencil</button><br>
    <button class="eyes">eye</button>
    <button class="ghibli">ghibli</button>
    <button class="anime">anime</button>
    <button class="buliding">building</button>

    
 </div>
 <div class="medium-container">
   @foreach ($photos as $photo)
       
   
    <div class="gallary-post {{$photo->class}}">
       
        <img src="storage{{asset($photo->path)}}" alt="not found" srcset="">
       <a href="{{$photo->link}}"  target="_blank">view post</a> 
    </div>
    @endforeach
    
  
   
 






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

    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>