<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCulture;
use App\Models\TypeEvent;
use App\Models\Champ;
use App\Models\Event;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Str;


class CultureController extends Controller
{
    
    public function index()
    {
        $types = TypeCulture::all();
        return view('admin/culture/index' , compact('types'));
    }

    public function store(Request $request){
        $data = $this->validate($request,[
            "libelle" => "required",
        ] );
        $data["slug"] = Str::slug($data['libelle']);
        // dd($data);
        TypeCulture::create($data);
        return redirect()->back()->with('success', 'Rôle Created Successfully');


    }


    public function champ_index(){
        $champs = Champ::all();
        $types = TypeCulture::all();
        
       
       
      
        return view('admin/culture/champs' , compact('champs', 'types'));

        
    }

    public function champ_store(Request $request){
       
        $data = $this->validate($request,[
            "tonnage_ant" => "required",
            "superficie" => "required",
            "type_culture_id" => "required",
            "description" => "required",
            "origine_geo" => "required",
            "date_production" => "required",
            "date_recolte" => "required",
            "user_id" => "required",
           
        ] );
      
        // dd($data);
        Champ::create($data);
        return redirect()->back()->with('success', 'Rôle Created Successfully');
    }
    
    /**
     * Supprime la culture spécifiée.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $culture = TypeCulture::findOrFail($id);
        $culture->delete();

        return redirect()->route('culture.index')->with('success', 'Culture supprimée avec succès.');
    }
    
    

    public function champ_show($id){
        $champ = Champ::find($id);
        // dd($champ);
        $qrcode = QrCode::size(250)->generate($champ);
        $typevents = TypeEvent::all();
        return view('admin/culture/champ_show' , compact('champ', 'qrcode', 'typevents'));
    
        
    }

    public function event_store(Request $request){
        $data = $this->validate($request,[
            "type_event_id" => "required",
            "date_event" => "required",
            "lieux" => "required",
            "temperature" => "required",
            "humidite" => "required",
            "user_id" => "required",   
            "champ_id" => "required",   
        ] );
        Event::create($data);
        return back()->with('success', 'Evenements ajouté  avec succès.');;
       
    }

}



