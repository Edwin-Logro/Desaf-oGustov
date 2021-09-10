<?php
namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MenuController extends Controller
{
    public function index()
    {
        $menus['menus'] = Menu::orderBy('id','desc')->get();
        return view('menus.index',$menus);
    }
    public function create()
    {
        $menus = Menu::orderBy('id','desc')->get();
        return view('menus.create', compact('menus'));
    }
    public function store(Request $request)
    {
        $factMenus= request()->except('_token');
        if($request->hasFile('photo'))
        {
            $factMenus['photo'] = $request->file('photo')->store('uploads','public');
            
        }
        Menu::insert($factMenus); 
        return redirect('/menu')->with('note','Menu added successfully');
    }
    public function show(Menu $menu)
    {
        
    }
    public function edit($id)
    {
       $menus=Menu::findOrFail($id);
       //return response()->json($menus);
        return view('menus.edit', compact('menus'));
    }
    public function update(Request $request, $id)
    {
        $factMenus = request()->except('_token','_method');
        if($request->hasFile('photo'))
        {  
            $menus=Menu::findOrFail($id);
            Storage::delete('public/'.$menus->photo);
            $factMenus['photo']=$request->file('photo')->store('uploads','public');
        }
        Menu::where('id','=',$id)->update($factMenus);
        //list update
        $menus=Menu::findOrFail($id);
        return redirect('menu')->with('note','Menu edited  successfully');

    }
    public function destroy($id)
    {
        $menus=Menu::findOrFail($id);
        if(Storage::delete('public/'.$menus->photo))
        {
            Menu::destroy($id);
        }     
        return redirect('menu')->with('note','Menu removed successfully');
    }
}
