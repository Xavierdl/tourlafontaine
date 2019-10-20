	@extends('layouts.app')
	@section('content')
	{{-- {{dd('tets')}} --}}
		<!-- HERO -->
		<section class="uk-section uk-section-small">
			<div class="uk-container">
					<h4 class=" uk-padding-small uk-tile-secondary uk-text-center" >Pour l'instant ce site ne va servir qu'à vous informez des différentes procédures en cours pour les services perdu lors de l'acquisition de l'immeuble par CLV. <br>
						Mais je compte y mettre bientot une section commentaire et petites annonces. 
					</h4>
				<div class="uk-height-large uk-cover-container uk-border-rounded">
					<img src="img/tourLafontaineToit.jpg" alt="Alt img" data-uk-cover>
					<div class="uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center">
					
						<div data-uk-scrollspy="cls: uk-animation-slide-bottom-small">
							{{-- <span style="letter-spacing: 0.2em; font-size: 0.725rem">FEATURED ARTICLE</span> --}}
							<h1 class="uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent">Site des locataires de l'immeuble</h1>
							<p>Ce site n'appartient pas à la compagnie propriétaire de l'immeuble mais aux locataires</p>
							<p>Vous pouvez y suivre les actualitées des démarches contre CLV</p>
							<a href="{{route("petition")}}" class="uk-button uk-button-default uk-margin-top">Voir la pétition</a>
							<br>
							<a href="{{route("regie")}}" class="uk-button uk-button-default uk-margin-top">Voir le recours régie du logement</a>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		
		@endsection
