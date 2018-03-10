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
use App\Mission;
use Ivory\GoogleMap\MapTypeId;

use Ivory\GoogleMap\Control\ControlPosition;
use Ivory\GoogleMap\Control\MapTypeControl;
use Ivory\GoogleMap\Control\MapTypeControlStyle;

class GoogleMapMissionsController extends Controller
{
    public function index()
    {
        if (! Gate::allows('google_map_mission_access')) {
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
		
		
		
		$mission = Mission::all();

		
		$i = 0;

		


		//POUR CHAQUE DONNEE TROUVE
		foreach ($mission as $crd){

			//ASSIGNATION DONNEE UTILE
			$id = $crd->id;
			$objet = $crd->objet;
			
			$debut = $crd->date_deb;
			$fin = $crd->date_fin;
			$progress = $crd->progression;
			

			$path_asset = "admin.missions.show";

			//INFOWINDOWS
			$infoWindow = new InfoWindow('
				<p><a href="missions/'.$id.'" class="btn btn-xs btn-primary" style="text-align:center; margin-right:auto;"><strong>'.$objet.'</strong></a> </p>
				<ul style="list-style-type: none; padding-left:10px;">
			  		<li><strong style="color:black;">Debut: </strong>'.$debut.'</li>
			  		<li><strong style="color:black;">Fin: </strong>'.$fin.'</li>
			  		<li style="color: red;"><strong style="color:black;">progression: </strong>'.$progress.' %</li>

			  		<div class="progress progress-sm active">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress.'%">
                                <span class="sr-only">'.$progress.' %</span>
                            </div>
                    </div>





				</ul>
				<a href="missions/'.$id.'" class="btn btn-secondary" >Afficher</a><a href="missions/'.$id.'/edit" class="btn btn-secondary">Modifier</a>',


			InfoWindowType::DEFAULT_, new Coordinate($crd->latitude, $crd->longitude));


			$infoWindow->setOption('zIndex', 10);
			$infoWindow->setAutoClose(true);
			$infoWindow->setAutoOpen(true);


			





			
			//MARQEUR
			$marker = new Marker(
		    new Coordinate($crd->latitude,  $crd->longitude),
		    Animation::DROP,
		    new Icon("/icon/flag.png",
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
        return view('admin.google_map_missions.index')->with(['a'=>$a, 'b'=>$b,'c'=>$c, 'd'=>$d]);
    }
}
