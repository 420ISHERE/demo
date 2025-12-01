<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;


class SubPagesController extends Controller
{
    public function home()
    {
        $blogController = new BlogController();
        $blogs = collect($blogController->getAllBlogs())
            ->sortByDesc('created_at');  // sort only

        return view('subpages.home', compact('blogs'));
    }




    public function  narasimha()
    {


        return view('subpages.narasimha-havan-seva');
    }


    public function  folk()
    {


        return view('subpages.folk');
    }
    public function  list()
    {


        return view('subpages.list');
    }
    public function  kirtan()
    {


        return view('subpages.kirtan');
    }


    public function  mission()
    {


        return view('subpages.mission');
    }
    public function  objective()
    {


        return view('subpages.objective');
    }

    public function  governance()
    {


        return view('subpages.governance');
    }


    public function  monk()
    {


        return view('subpages.monk');
    }

    public function  gita()
    {


        return view('subpages.gita');
    }


    public function  volunteer()
    {


        return view('subpages.volunteer');
    }


    public function centers()
    {

        return view('subpages.centers');
    }

    public function programs()
    {

        return view('subpages.programs');
    }

    public function contact()
    {

        return view('subpages.contact');
    }

    public function privacy()
    {

        return view('subpages.privacy');
    }
    public function terms()
    {

        return view('subpages.terms');
    }

    public function refund()
    {

        return view('subpages.refund');
    }

    public function prabhupada()
    {

        return view('subpages.prabhupada');
    }

    public function fault()
    {
        return view('subpages.fault');
    }

    public function donation()
    {
        return view('subpages.donation');
    }

    public function deepotsava()
    {
        return view('subpages.deepotsava');
    }

    public function srilaPrabhupada()
    {
        return view('subpages.srila-prabhupada-life-story');
    }

    public function krishnaLife()
    {
        return view('subpages.krishna-life-story');
    }

    public function chaitanya()
    {
        return view('subpages.chaitanya-mahaprabhu');
    }

    public function bhagavadGita()
    {
        return view('subpages.bhagavad-gita');
    }

    public function krishnaConsciousness()
    {
        return view('subpages.krishna-consciousness');
    }

    public function galleryImages()
    {
        return view('subpages.gallery-images');
    }

    public function gitaLifeCourse()
    {
        return view('subpages.gita-life-course');
    }

    public function secretsOfLife()
    {
        return view('subpages.secrets-of-life');
    }

    public function gitaAdvanceCourse()
    {
        return view('subpages.gita-advance-course');
    }

    public function gitaShlokaCourse()
    {
        return view('subpages.gita-shloka-course');
    }

    public function spiritualRetreat()
    {
        return view('subpages.spiritual-retreat');
    }

    public function gitaDaan()
    {
        return view('subpages.gita-daan');
    }
}
