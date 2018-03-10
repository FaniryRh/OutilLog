@extends('layouts.app')

@section('content')


    
    <!-- <div class="panel panel-primary">
    	<div class="panel-heading ">

    		Organigramme

    	</div>

    	<div class="panel-body" style="text-align: center;">
    		
    		<div class="row">
    			<div class="col-xs-12 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    					SECRETAIRE EXECUTIF
	    				</div>
	    				<div class="panel-body">
	    					  <div class="col-md-12" style="text-align: center;">
                                <div class="thumbnail" style="height: 6%; width: 6%; margin: auto;">
                                  <a href="profil/profil.png">
                                    <img src="{{ url('profil') }}/profil.png" alt="Lights" style="width:100%">
                                    <div class="caption" style="font-size: 70%;">
                                      Nom et Prénom
                                    </div>
                                  </a>
                                </div>
                              </div>
	    				</div>
	    			</div>
    			</div>
    		</div></br>


    		<div class="row">
    		      <div class="col-xs-12 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    					SECRETAIRE EXECUTIF ADJOINT
	    				</div>
	    				<div class="panel-body">
            				<div class="col-md-6" style="text-align: right;">
                                <div class="thumbnail" style="height: 12%; width: 12%; float: right;">
                                  <a href="profil/profil.png">
                                    <img src="{{ url('profil') }}/profil.png" alt="Lights" style="width:100%">
                                    <div class="caption" style="float: none; text-align: center; font-size: 70%;">
                                      Nom et Prénom
                                    </div>
                                  </a>
                                </div>
                              </div>
            				<div class="col-md-6" style="text-align: left;">
                                <div class="thumbnail" style="height: 6%; width: 6%; float: left; margin-bottom: 0px;">
                                  <a href="profil/profil.png" style="float: none;">
                                    <img src="{{ url('profil') }}/profil.png" alt="Lights" style="width:100%">
                                    <div class="caption" style="float: none; text-align: center; font-size: 70%;">
                                      Nom et Prénom
                                    </div>
                                  </a>
                                </div>
                              </div>
            			</div>
	    			</div>
    			 </div>
    		</div></br>



    		<div class="row">
            <div class="col-xs-12 form-group">
                    <div class="panel panel-default">
                        <div class="panel-heading ">

                        </div>
                        <div class="panel-body">
                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    Service Médecine des Catastrophes
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    Coordonnateur des Projets
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    Responsable Suivi Evaluation
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>

                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    Personnes Responsable des Relations Publiques
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            
                        </div>
                    </div>
                </div>
            </div></br>


            <div class="row">
            <div class="col-xs-12 form-group">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                        DIRECTEURS
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    DPC
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    DAF
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    DIROP
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>

                            <div class="col-xs-2 form-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading ">
                                    Dir CERVO
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                </div>
                                
                            </div>


                            
                        </div>
                    </div>
                </div>
            </div></br>
    		



    		<div class="row">
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Repositionnement et Prévention des Risques et des Catastrophes
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Information Education
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Logistique
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Personnel
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Gestion des Stocks
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Intervention et Sécours d'Urgence
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Etude et Veille
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>
    			<div class="col-xs-2 form-group">
	    			<div class="panel panel-default">
	    				<div class="panel-heading ">
	    				Service Reflexion et Orientation
	    				</div>
    				</div>
    				<div class="panel-body">
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    					<button type="button" class="btn btn-primary">Primary</button>
    				</div>
	    			
    			</div>

    		</div></br>


    		

			



    	</div>
    </div>

    
    <style type="text/css">
    	

    </style> -->




    





    <!-- <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'},
           '', 'The President'],
          [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'},
           'Mike', 'VP'],
          ['Alice', 'Mike', ''],
          ['Bob', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', '']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }
   </script> -->

@stop