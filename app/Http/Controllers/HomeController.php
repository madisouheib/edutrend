<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutu;
use App\Service;
use App\Univ;
use App\Posts;
use App\Application;
use App\Avi;
use App\Institu;
use App\Question;

class HomeController extends Controller
{
    //add id insert 

public function index(){


    $home = Aboutu::find(1);
    $services = Service::get();
    $univs = Univ::get();
    $posts = Posts::take(3)->get();

    return view('welcome')->with('home',$home)
    ->with('services',$services)
    ->with('univs',$univs)
    ->with('posts',$posts);
}

public function indexBlog(){

    $posts = Posts::all();
    $home = Aboutu::find(1);
    return view('blogs')->with('home',$home)->with('posts',$posts) ; 


}

public function postData(Request $request){

    $name = $request->input('name');
    $lastName = $request->input('lastname');
    $phone = $request->input('phone');
    $email = $request->input('email');
    $type = $request->input('type');
    $service = $request->input('service');
    $country = $request->input('country');
    $nationality = $request->input('nationality');

    Application::create([
        'last_name' => $lastName,
        'first_name' => $name ,
        'email' =>  $email,
        'phone' =>  $phone,
        'nationality' => $nationality,
        'country' => $country,
        'type_service' => $type 
    ]);


}

public function indexUnivs(){

    $posts = Posts::all();
    $home = Aboutu::find(1);
    $univs = Univ::get();
    $quesitons = Question::all();

    return view('university')
    ->with('home',$home)
    ->with('univs',$univs)
    ->with('posts',$posts)
    ->with('questions',$quesitons) ; 


}

public function indexAbout(){

    $home = Aboutu::find(1);
    return view('aboutus')
    ->with('home',$home) ; 

}
public function indexPartenariat(){

    $home = Aboutu::find(1);
    return view('partenaria')->with('home',$home); 


}

public function indexResearchs(){
    $home = Aboutu::find(1);
    $avis = Avi::all();
    $quesitons = Question::all();
    return view('research')
    ->with('avis',$avis)
    ->with('home',$home)
    ->with('questions',$quesitons); 

}
public function indexInstitus(){
    $home = Aboutu::find(1);
    $avis = Avi::all();
    $quesitons = Question::all();
    $institus = Institu::all();

    return view('institus')
    ->with('avis',$avis)
    ->with('institus',$institus)
    ->with('home',$home)
    ->with('questions',$quesitons); 

}

public function indexPost($slug){

$post = Posts::where('slug',$slug)->first();

return view('post')
->with('post',$post);



}

}
