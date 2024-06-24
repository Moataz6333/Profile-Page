<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Me</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/sendme.css">
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
   
    <div class="small-container">
        <h2>Leave me a Message✨</h2>
    <form action="{{route('profile.message')}}" method="post">
        @csrf
        <label for="name">From: </label>
        <input type="text" name="name" id="name" placeholder="(optional)">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="10" cols="20" required></textarea>
        <button type="submit" id="sendme">Send</button>
    </form>
</div>
<div class="thanks">
    <h1>Thank you, I will see your message as soon as possible.💙</h1>
    <a href="index.html">Back to Home page</a>
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

</body>
</html>