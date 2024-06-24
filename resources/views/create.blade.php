<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/createpost.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

</head>
<body>



<!-- Content div -->
 <div class="container"> 
    <a href="{{route('profile.messagePage')}}" style="display: block; text-decoration:underline;     font-size: 20px;
    text-align: right;">Messages</a>
    <h1>Create post</h1>
    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="file">Upload media</label>
        <input type="file" name="file" id="file">
        <label for="class">Classes: </label>
        <input type="text" name="class" id="class" value=" " style="display: block">
       <ul>
        <li><div class="category"><h4>watercolor</h4></div></li>
        <li><div class="category"><h4>gouache</h4></div></li>
        <li><div class="category"><h4>pencil</h4></div></li><br>
        <li><div class="category"><h4>eye</h4></div></li>
        <li><div class="category"><h4>ghibli</h4></div></li>
        <li><div class="category"><h4>anime</h4></div></li>
        <li><div class="category"><h4>building</h4></div></li>
        <li><div class="category"><h4>shorts</h4></div></li>
       </ul>
       
        <label for="link">Link: </label>
        <input type="text" name="link" id="link">
        <button type="submit">Submit</button>
    </form>
   
    
</div>

   


<script>
let divs =document.querySelectorAll('.category');
let inp =document.getElementById('class');
inp.value=" ";
    for(let i=0;i<divs.length;i++){
        divs[i].addEventListener('click',function(){
            if(divs[i].style.backgroundColor!=='black'){
                
                divs[i].style.backgroundColor='black';
                inp.value=inp.value+" "+divs[i].firstChild.textContent;
          
            }else{
                divs[i].style.backgroundColor='blue';
                inp.value=inp.value.replace(divs[i].firstChild.textContent,"");
               
            }
            
        });
    }</script>
</body>
</html>