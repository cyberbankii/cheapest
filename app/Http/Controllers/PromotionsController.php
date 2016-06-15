<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Promotion;
use App\Tag;

class PromotionsController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
    	$promotions = Promotion::all();
        $tags = Tag::all();
    	return view('promotions')->withPromotions($promotions)->withTags($tags);
    }

    public function show($id){
    	$promotion = Promotion::find($id);
    	return view('promotion')->withPromotion($promotion);
    }

    public function store(Request $request) {
    	Promotion::create($request->all());
        return redirect()->back();
    }

    public function edit($id) {

    }

    public function update($id, Request $request) {

    }

    public function destroy($id) {
    	Promotion::delete($id);
    	return redirect()->back();
    }
}
