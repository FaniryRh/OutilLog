<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\PersonnelDuBngrc;
use App\Asset;
use App\Mission;
use App\Task;
use App\ListeStock;



use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Ivory\GoogleMap;
use Ivory\GoogleMap\Helper\Builder\ApiHelperBuilder;
use Ivory\GoogleMap\Helper\Builder\MapHelperBuilder;
use Ivory\GoogleMap\Helper\Builder\PlaceAutocompleteHelperBuilder;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\Place\Autocomplete;
use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\Animation;
use Ivory\GoogleMap\Overlay\Icon;
use Ivory\GoogleMap\Overlay\Marker;
use Ivory\GoogleMap\Overlay\MarkerShape;
use Ivory\GoogleMap\Overlay\MarkerShapeType;
use Ivory\GoogleMap\Overlay\Symbol;
use Ivory\GoogleMap\Overlay\SymbolPath;
use Ivory\GoogleMap\Base\Point;
use Ivory\GoogleMap\Base\Size;
use Ivory\GoogleMap\Overlay\InfoWindow;
use Ivory\GoogleMap\Overlay\InfoWindowType;
use Ivory\GoogleMap\Overlay\Polygon;
use Ivory\GoogleMap\Overlay\MarkerClusterType;
use App\CoordonneeRegion;
use App\DonneesRegion;
use Illuminate\Support\Facades\DB;
use Ivory\GoogleMap\Service\Direction\DirectionService;
use Ivory\GoogleMap\Service\Serializer\SerializerBuilder;
use Http\Adapter\Guzzle6\Client;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Ivory\GoogleMap\Service\Base\Location\AddressLocation;
use Ivory\GoogleMap\Service\Direction\Request\DirectionRequest;
use Ivory\GoogleMap\Service\Direction\Request\DirectionWaypoint;
use Ivory\GoogleMap\Service\Base\TravelMode;
use Ivory\GoogleMap\Overlay\EncodedPolyline;

use Ivory\GoogleMap\MapTypeId;

use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\MapTypeControl;
use Ivory\GoogleMap\Control\MapTypeControlStyle;
use Carbon\Carbon;

use App\TaskTag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasktag = new TaskTag;

        $tasktag->name = 'faniry';

        $tasktag->save();




        $nbr_pers = PersonnelDuBngrc::count();
        $nbr_asset = Asset::count();
        
        $nbr_stock = ListeStock::count();
        

        //MISSION

        $nbr_mission = Mission::count();
        $nbr_mission_enattente = Mission::all()->where('stat_id', '1')->count();
        $nbr_mission_encours = Mission::all()->where('stat_id', '2')->count();
        $nbr_mission_terminee = Mission::all()->where('stat_id', '3')->count();
        $nbr_mission_annulee = Mission::all()->where('stat_id', '4')->count();

        $progress_mission = Mission::all()->sortBy('progression');


        

        //tache
        //taches
        $nbr_task = Task::count();
        $task_reunion = Task::all()->where('type_id','2')->where('status_id','1')->count();
        $task_reunion1 = Task::all()->where('type_id','2')->count();

        $nbr_task_enattente = Task::all()->where('status_id', '1')->where('type_id','2')->count();
        $nbr_task_encours = Task::all()->where('status_id', '2')->where('type_id','2')->count();
        $nbr_task_terminee = Task::all()->where('status_id', '3')->where('type_id','2')->count();
        $nbr_task_annulee = Task::all()->where('status_id', '4')->where('type_id','2')->count();

        if($nbr_task == 0){

            $pourcentage_task_enattente = 0;
            $pourcentage_task_encours = 0;
            $pourcentage_task_terminee = 0;
            $pourcentage_task_annulee = 0;

            $pourcentage_enattente = 0;
            $pourcentage_encours = 0;
            $pourcentage_terminee = 0;
            $pourcentage_annulee = 0;

        }else{

        $pourcentage_task_enattente = ($nbr_task_enattente * 100) / $nbr_task;
        $pourcentage_task_encours = ($nbr_task_encours * 100) / $nbr_task;
        $pourcentage_task_terminee = ($nbr_task_terminee * 100) / $nbr_task;
        $pourcentage_task_annulee = ($nbr_task_annulee * 100) / $nbr_task;

        $pourcentage_enattente = ($nbr_mission_enattente * 100) / $nbr_mission;
        $pourcentage_encours = ($nbr_mission_encours * 100) / $nbr_mission;
        $pourcentage_terminee = ($nbr_mission_terminee * 100) / $nbr_mission;
        $pourcentage_annulee = ($nbr_mission_annulee * 100) / $nbr_mission;

        }






        //map *****************************************

        $autocomplete = new Autocomplete();
        $mapHeader = new Map();
        $mapFooter = new Map();
        $mapFooter->setAutoZoom(false);

        $mapFooter->setMapOption('mapTypeId', MapTypeId::HYBRID);
        $mapHeader->setMapOption('mapTypeId', MapTypeId::HYBRID);
        // $autocomplete2 = new Autocomplete();
        // $mapHeader2 = new Map();
        // $mapFooter2 = new Map();
        // $mapHeader2->setVariable('map2');
        // $mapFooter2->setVariable('map2');
        // $mapHeader2->setHtmlId('map_canvas2');
        // $mapFooter2->setHtmlId('map_canvas2');








        // Sets the center
        $mapFooter->setCenter(new Coordinate(-18.983696, 47.158208));

        // Sets the zoom
        $mapFooter->setMapOption('zoom', 6);

        $mapTypeControl = new MapTypeControl(
            [MapTypeId::ROADMAP, MapTypeId::SATELLITE],
            ControlPosition::TOP_RIGHT,
            MapTypeControlStyle::DEFAULT_
        );
        
        
        
        $personne = PersonnelDuBngrc::all();

        
        $i = 0;

        


        //POUR CHAQUE DONNEE TROUVE
        function image_pro($img){

                    if($img){return $img;} else {return "images/user.png";};

                }
        foreach ($personne as $crd){

            if($crd->latitude != null){

                //ASSIGNATION DONNEE UTILE
                $id = $crd->id;
                $nom_prenom = $crd->nom_prenom;
                $fonction = $crd->fonction;
                $tel = $crd->tel;

                

                $im = image_pro($crd->photo);
                // $type = DB::table('assets_categories')->where('id', $crd->category_id)->value('title');
                // $disponibilite = DB::table('assets_statuses')->where('id', $crd->status_id)->value('title');
                // $responsable = DB::table('personnel_du_bngrcs')->where('id', $crd->assigned_user_id)->value('nom_prenom');

                // $path_asset = "admin.assets.show";

                //INFOWINDOWS
                $infoWindow = new InfoWindow('
                    
                    <p ><img src="/'.$im.'" alt="Photo" height="100" width="100"></p>
                    <p><a href="personnel_du_bngrcs/'.$id.'" class="btn btn-xs btn-primary" style="text-align:center; margin-right:auto;"><strong>'.$nom_prenom.'</strong></a> </p>
                    
                    <p><strong style="color:black;">Fonction: </strong>'.$fonction.'</p>
                    <p><strong style="color:black;">Tel: </strong>'.$tel.'</p>

                    <a  href="personnel_du_bngrcs/'.$id.'" class="" >Plus d\'infos...</a>',


                InfoWindowType::DEFAULT_, new Coordinate($crd->latitude, $crd->longitude));


                $infoWindow->setOption('zIndex', 10);
                $infoWindow->setAutoClose(true);
                $infoWindow->setAutoOpen(true);

                //MARQEUR
                $marker = new Marker(
                new Coordinate($crd->latitude,  $crd->longitude),
                Animation::DROP,
                new Icon(),
                new Symbol(SymbolPath::CIRCLE),
                new MarkerShape(MarkerShapeType::CIRCLE, [20, 30, 15]),
                ['clickable' => true]
                );
                
                $marker->setInfoWindow($infoWindow);
          

                $mapFooter->getOverlayManager()->addMarker($marker);
                $mapFooter->getOverlayManager()->getMarkerCluster()->setType(MarkerClusterType::MARKER_CLUSTERER);
                $i++;
            }
        }


        $autocompleteHelper = PlaceAutocompleteHelperBuilder::create()->build(); 
        $mapHelper = MapHelperBuilder::create()->build();
        $apiHelper = ApiHelperBuilder::create()->setKey('AIzaSyBIjp-A6RP-w4bMQivz5CWPfAF3bbjE0iw')->build();

        $a = $mapHelper->render($mapHeader);
        $c = $mapHelper->render($mapFooter);
        $d = $apiHelper->render([$autocomplete, $mapHeader, $mapFooter, $marker]);
        //map *****************************************




        // //map 2 *****************************************

        

        // $mapFooter2->setAutoZoom(false);

        // // Sets the center
        // $mapFooter2->setCenter(new Coordinate(-18.983696, 47.158208));

        // // Sets the zoom
        // $mapFooter2->setMapOption('zoom', 6);

        // $mapTypeControl2 = new MapTypeControl(
        //     [MapTypeId::ROADMAP, MapTypeId::SATELLITE],
        //     ControlPosition::TOP_RIGHT,
        //     MapTypeControlStyle::DEFAULT_
        // );

        // $mission_map = Mission::all();

        // $j = 0;
        
        // //POUR CHAQUE DONNEE TROUVE
        // foreach ($mission_map as $crd){

        //     if($crd->latitude != null){

        //         //ASSIGNATION DONNEE UTILE
        //         $id = $crd->id;
        //         $objet = $crd->objet;
        //         $debut = $crd->date_deb;
        //         $fin = $crd->date_fin;
        //         $progress = $crd->progression;
        //         // $type = DB::table('assets_categories')->where('id', $crd->category_id)->value('title');
        //         // $disponibilite = DB::table('assets_statuses')->where('id', $crd->status_id)->value('title');
        //         // $responsable = DB::table('personnel_du_bngrcs')->where('id', $crd->assigned_user_id)->value('nom_prenom');

        //         // $path_asset = "admin.assets.show";

        //         //INFOWINDOWS
                

        //         $infoWindow2 = new InfoWindow('
        //             <p><a href="missions/'.$id.'" class="btn btn-xs btn-primary" style="text-align:center; margin-right:auto;"><strong>'.$objet.'</strong></a> </p>
                    
        //             <p><strong style="color:black;">Debut: </strong>'.$debut.'</p>
        //             <p><strong style="color:black;">Fin: </strong>'.$fin.'</p>
        //             <p><strong style="color:black;">Progression: </strong>'.$progress.'</p>

        //             <a  href="missions/'.$id.'" class="" >Plus d\'infos...</a>',


        //         InfoWindowType::DEFAULT_, new Coordinate($crd->latitude, $crd->longitude));


        //         $infoWindow2->setOption('zIndex', 10);
        //         $infoWindow2->setAutoClose(true);
        //         $infoWindow2->setAutoOpen(true);

        //         //MARQEUR
        //         $marker2 = new Marker(
        //         new Coordinate($crd->latitude,  $crd->longitude),
        //         Animation::DROP,
        //         new Icon(),
        //         new Symbol(SymbolPath::CIRCLE),
        //         new MarkerShape(MarkerShapeType::CIRCLE, [20, 30, 15]),
        //         ['clickable' => true]
        //         );
                
        //         $marker2->setInfoWindow($infoWindow2);
          

        //         $mapFooter2->getOverlayManager()->addMarker($marker2);
        //         $mapFooter2->getOverlayManager()->getMarkerCluster()->setType(MarkerClusterType::MARKER_CLUSTERER);
        //         $j++;
        //     }
        // }


        // $autocompleteHelper2 = PlaceAutocompleteHelperBuilder::create()->build(); 
        // $mapHelper2 = MapHelperBuilder::create()->build();
        // $apiHelper2 = ApiHelperBuilder::create()->setKey('AIzaSyBIjp-A6RP-w4bMQivz5CWPfAF3bbjE0iw')->build();

        // $a2 = $mapHelper2->render($mapHeader2);
        // $c2 = $mapHelper2->render($mapFooter2);
        // $d2 = $apiHelper2->render([$autocomplete2, $mapHeader2, $mapFooter2, $marker2]);
        // //map *****************************************


        $oms = \App\Om::latest()->limit(4)->get(); 
        $missions = \App\Mission::latest()->limit(4)->get(); 
        $tasks = \App\Task::latest()->limit(4)->get();



        return view('home', compact( 'oms', 'missions', 'tasks' ))->with([
            'nbr_perso' => $nbr_pers, 
            'nbr_asset' => $nbr_asset, 
            'nbr_mission' => $nbr_mission, 
            'nbr_mission_enattente' => $nbr_mission_enattente,
            'nbr_mission_encours' => $nbr_mission_encours,
            'nbr_mission_terminee' => $nbr_mission_terminee,
            'nbr_mission_annulee' => $nbr_mission_annulee,
            'progress_mission' => $progress_mission,

            'pourcentage_enattente' => $pourcentage_enattente,
            'pourcentage_encours' => $pourcentage_encours,
            'pourcentage_terminee' => $pourcentage_terminee,
            'pourcentage_annulee' => $pourcentage_annulee,

            'nbr_task' => $nbr_task, 
            'nbr_task_enattente' => $nbr_task_enattente,
            'nbr_task_encours' => $nbr_task_encours,
            'nbr_task_terminee' => $nbr_task_terminee,
            'nbr_task_annulee' => $nbr_task_annulee,

            'pourcentage_task_enattente' => $pourcentage_task_enattente,
            'pourcentage_task_encours' => $pourcentage_task_encours,
            'pourcentage_task_terminee' => $pourcentage_task_terminee,
            'pourcentage_task_annulee' => $pourcentage_task_annulee,

            'nbr_reunion' => $task_reunion,
            'nbr_stock' => $nbr_stock,
            'nbr_reunion1' => $task_reunion1,

            'a'=>$a,
            'c'=>$c, 
            'd'=>$d,

            // 'a2'=>$a2,
            // 'c2'=>$c2, 
            // 'd2'=>$d2


            ]);
    }
}
