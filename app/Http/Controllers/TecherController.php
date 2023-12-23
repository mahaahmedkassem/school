<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;

class TecherController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techers = Teacher::get();

        return view('techerlist',compact('techers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("addtecher");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $messages= $this->messages();
        
        $data = $request->validate([
            'name'=>'required|string',
            'position'=>'required|string',
            'fb'=>'required|string',
            'x'=>'required|string',
            'insta'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            
            
        ],$messages);

        $fileName=$this->uploadFile($request->image, 'assets/images');
        $data['image']=$fileName;

        Teacher::create($data);

        return redirect('techerlist'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $techer = Teacher::findorfail($id);

        return view ('updatetecher',compact('techer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages= $this->messages();

        $data = $request->validate([
            'name'=>'required|string',
            'position'=>'required|string',
            'fb'=>'required|string',
            'x'=>'required|string',
            'insta'=>'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            
            
        ],$messages);
       
   

        // update image if new file selected
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');
            $data['image']= $fileName;
        }

        //return dd($data);
        Teacher::where('id', $id)->update($data);
        
        return redirect('techerlist'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
    public function messages(){
        return [
            'name.required'=>'name is required',
            'position.required'=>'position is required',
            'fb.required'=>'fb is required',
            'x.required'=>'x is required',
            'insta.required'=>'insta is required',
            'image.required'=>'image is required',
        ];
    }
}
