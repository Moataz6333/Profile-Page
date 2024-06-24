let categories =document.querySelectorAll('.categories button');
let posts =document.querySelectorAll('.gallary-post');
//add btn
categories[0].addEventListener('click',function(){
    if(!categories[0].classList.contains('active')){
        categories[0].classList.add('active');
    for(let i=0;i<posts.length;i++){
        posts[i].style.display='flex';
    }
    for(let j=1;j<categories.length-1;j++){
        categories[j].classList.remove('active');
    }
}
    
});
//basic categories
for(let j=1;j<4;j++){
    categories[j].addEventListener('click',function(){
        categories[0].classList.remove('active');
        unactiveOthers(categories[j].textContent);
   if(!categories[j].classList.contains('active')){
    categories[j].classList.add('active');

    for(let i=0;i<posts.length;i++){
        if(posts[i].classList.contains(categories[j].textContent)){
            posts[i].style.display='flex';
        }else{
            posts[i].style.display='none';
        }
        
    }
   }else{
    
    categories[j].classList.remove('active');
   
    for(let i=0;i<posts.length;i++){
        if(posts[i].classList.contains(categories[j].textContent)){
            posts[i].style.display='none';
        }
    
   }
   check_all();
    }
});
}

//classifide categories
for(let i=4;i<8;i++){
    categories[i].addEventListener('click',function(){
        categories[0].classList.remove('active');
        if(!categories[i].classList.contains('active')){
            categories[i].classList.add('active');
          if(theActive() !== 'none'){
            for(let j=0;j<posts.length;j++){
                if(posts[j].classList.contains(theActive())&& posts[j].classList.contains(categories[i].textContent)){
                    posts[j].style.display='flex';

                }else{
                    posts[j].style.display='none';
                }
            }
        }else{
            for(k=0;k<posts.length;k++){
                if(posts[k].classList.contains(categories[i].textContent)){
                    posts[k].style.display='flex';
                }else{
                    posts[k].style.display='none';
                }
            }
        }  
        }else{
            categories[i].classList.remove('active');
            if(theActive() !=='none'){
                for(let j=0;j<posts.length;j++){
                    if(posts[j].classList.contains(theActive())){
                        posts[j].style.display='flex';
                    }else{
                        posts[j].style.display='none';
                    }
                }
            }
        }
        
    });
}

//all
function check_all(){
    let flag=true;
    for(let i=1;i<categories.length;i++){
        if(categories[i].classList.contains('active')){
            flag=false;
        }

    }
    if(flag){
        categories[0].classList.add('active');
        for(let j=0; j<posts.length;j++){
            posts[j].style.display='flex';
        }
    }
}
//the basic category selected
function basicCatigory(){
    let basic;
    for(i=1;i<4;i++){
        if(categories[i].classList.contains('active')){
            basic=categories[i].textContent;
        }
    }
    return basic;
}

//unactive the others
function unactiveOthers(category){
    for(let i=1;i<4;i++){
        if(categories[i].textContent!==category){
            categories[i].classList.remove('active');
        }
    }
}
//find the active one

function theActive(){
    let active='none';
    for(let i=1;i<4;i++){
        if(categories[i].classList.contains('active')){
            active=categories[i].textContent;
        }
    }
    
    return active;
}



const videos = document.querySelectorAll('video');

// Add click event listener to each video
videos.forEach(video => {
    video.addEventListener('click', function() {
        // Play the video
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    });
});

// slide show



