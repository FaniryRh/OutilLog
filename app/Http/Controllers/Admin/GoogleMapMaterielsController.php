<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
use App\Asset;
use Ivory\GoogleMap\MapTypeId;

use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\MapTypeControl;
use Ivory\GoogleMap\Control\MapTypeControlStyle;

class GoogleMapMaterielsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('google_map_materiel_access')) {
            return abort(401);
        }
        $autocomplete = new Autocomplete();
		$mapHeader = new Map();
		$mapFooter = new Map();

		$mapFooter->setMapOption('mapTypeId', MapTypeId::HYBRID);
        $mapHeader->setMapOption('mapTypeId', MapTypeId::HYBRID);

		$mapFooter->setAutoZoom(false);

		// Sets the center
		$mapFooter->setCenter(new Coordinate(-18.983696, 47.158208));

		// Sets the zoom
		$mapFooter->setMapOption('zoom', 6);

		$mapTypeControl = new MapTypeControl(
		    [MapTypeId::ROADMAP, MapTypeId::SATELLITE],
		    ControlPosition::TOP_RIGHT,
		    MapTypeControlStyle::DEFAULT_
		);
		
		
		
		$assets = Asset::all();

		
		$i = 0;

		function type_mat($typ){
			switch ($typ) {
			    case "Camion de pompier":
			        return "/icon/camion_pompier.png";
			        break;
			    case "Ambulance":
			        return "/icon/ambulance.png";
			        break;
			    case "Pc":
			        return "/icon/pc.png";
			        break;
			    case "Imprimante":
			        return "/icon/imprimante.png";
			        break;
			    case "Batiment":
			        return "/icon/batiment.png";
			        break;
			    case "Voiture de transport":
			        return "/icon/transport.png";
			        break;
			    case "Camion":
			        return "/icon/camion.png";
			        break;
			    default:
			    	return "/icon/marker.png";
			        break;
				}
			}


		//POUR CHAQUE DONNEE TROUVE
		foreach ($assets as $crd){

			//ASSIGNATION DONNEE UTILE
			$id = $crd->id;
			$titre = $crd->title;
			$num_serie = $crd->serial_number;
			$type = DB::table('assets_categories')->where('id', $crd->category_id)->value('title');
			$disponibilite = DB::table('assets_statuses')->where('id', $crd->status_id)->value('title');
			$responsable = DB::table('personnel_du_bngrcs')->where('id', $crd->assigned_user_id)->value('nom_prenom');

			$path_asset = "admin.assets.show";

			//INFOWINDOWS
			$infoWindow = new InfoWindow('
				<p><a href="assets/'.$id.'" class="btn btn-xs btn-primary" style="text-align:center; margin-right:auto;"><strong>'.$titre.'</strong></a> </p>
				<ul style="list-style-type: none; padding-left:10px;">
			  		<li><strong style="color:black;">N° série: </strong>'.$num_serie.'</li>
			  		<li><strong style="color:black;">Responsable: </strong>'.$responsable.'</li>
			  		<li><strong style="color:black;">Etat: </strong>'.$disponibilite.'</li>
				</ul>
				<a href="assets/'.$id.'" class="btn btn-secondary" >Afficher</a><a href="assets/'.$id.'/edit" class="btn btn-secondary">Modifier</a>',


			InfoWindowType::DEFAULT_, new Coordinate($crd->latitude, $crd->longitude));


			$infoWindow->setOption('zIndex', 10);
			$infoWindow->setAutoClose(true);
			$infoWindow->setAutoOpen(true);


			





			
			//MARQEUR
			$marker = new Marker(
		    new Coordinate($crd->latitude,  $crd->longitude),
		    Animation::DROP,
		    new Icon(type_mat($type),
					    new Point(20, 34),
					    new Point(0, 0),
					    new Size(40, 38),
					    new Size(40, 68)),
		    new Symbol(SymbolPath::CIRCLE),
		    new MarkerShape(MarkerShapeType::CIRCLE, [20, 30, 15]),
		    ['clickable' => true]
			);
			
			$marker->setInfoWindow($infoWindow);

			
			
		

		$mapFooter->getOverlayManager()->addMarker($marker);
		$mapFooter->getOverlayManager()->getMarkerCluster()->setType(MarkerClusterType::MARKER_CLUSTERER);
		$i++;
		}


		$autocompleteHelper = PlaceAutocompleteHelperBuilder::create()->build(); 
		$mapHelper = MapHelperBuilder::create()->build();
		$apiHelper = ApiHelperBuilder::create()->setKey('AIzaSyBIjp-A6RP-w4bMQivz5CWPfAF3bbjE0iw')->build();

		$a = $mapHelper->render($mapHeader);
		$b = $autocompleteHelper->render($autocomplete);
		$c = $mapHelper->render($mapFooter);
		$d = $apiHelper->render([$autocomplete, $mapHeader, $mapFooter, $marker]);
		
        return view('admin.google_map_materiels.index')->with(['a'=>$a, 'b'=>$b,'c'=>$c, 'd'=>$d]);
    }
}
