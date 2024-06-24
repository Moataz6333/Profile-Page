<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Message;

 

class ProfileController extends Controller
{


    public function index(){
        $lastIndex =Post::where('type','photo')->max('name');
        $id =Post::where('type','photo')->max('id');
        $link =Post::find($id)->link;
        $idforVideo =Post::where('type','video')->max('id');
        $LatestVideo=Post::find($idforVideo);
        return view('index',['lastIndex'=>$lastIndex,'link'=>$link,'video'=>$LatestVideo]);
    }
    public function gallery(){
        $photos =Post::where('type','photo')->get();
        
        return view('gallery',['photos'=>$photos]);
    }
    public function videos(){
        $videos =Post::where('type','video')->get();
        return view('videos',['videos'=>$videos]);
    }
   
    public function upload(){
        return view('create');
    }
    public function store(Request $request){
     
       

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // Get file extension
            // Check if the file is a photo or video
            if (in_array($extension, ['jpeg','jpg', 'png', 'gif'])) {
                $lastIndex =Post::where('type','photo')->max('name');
                if($lastIndex == null){
                    $lastIndex =1;
                    $name=$lastIndex ;
                }else{
                  
                    $name= $lastIndex+1 ;
                   
                }
                
                // Process photo upload
                $fileType = 'photo';
                
              
             
               
                $path = $request->file('file')->storeAs('images/gallery', $name.'.' .$extension , 'public');


            } elseif (in_array($extension, ['mp4', 'mov', 'avi'])) {
                $lastIndex =Post::where('type','video')->max('name');
                // Process video upload
                $originalName = $file->getClientOriginalName();
                $fileType = 'video';
              

                $name=$lastIndex+1;
                $path = $request->file('file')->storeAs('videos', $name.'.' .$extension , 'public');
            } else {
                // Handle other types of files
                $fileType = 'other';
            }

              }
             
             
              $post =new Post;
              $post->name=$name;
              $post->type=$fileType;
              $post->path=$path;
              $post->link=$request->link;
              $post->class=$request->class;
              $post->user_id=1;
              $post->save();
              return to_route('profile.upload');

}
public function sendme() {
    return view('sendme');
    
}
public function getMessage(Request $request){
   
    $msg =new Message();
    if($request->name == null){
        $msg->From='unknown';
    }else{
        $msg->From =$request->name;
    }
    $msg->Message=$request->message;
    $msg->save();
    return to_route('profile.thanks');
    

}
public function thankyou(){
    return view('thankYouPage');
}

public function messageView(){
    $messages=  Message::orderBy('created_at', 'desc')->get();
    return view('Messages',['messages'=>$messages])  ;
}
}
