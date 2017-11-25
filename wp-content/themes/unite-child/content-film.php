
	<div class="row">

		<?php 

			$countriesTerms = get_terms( array(
		      'taxonomy' => 'country',
		      'hide_empty' => false,  ) );

			
		 	$countries = '<h3>Countries:</h3><br/>';
			foreach($countriesTerms as $countriesTerm){
			$countries .= $countriesTerm->name.'<br/>';
			}
		?>
		<div class="col-md-3">
			<?php echo $countries.'<br/><br/>'; ?>
		</div>


		<?php
			$genresTerms = get_terms( array(
				'taxonomy' => 'genre',
				'hide_empty' => false,  ) );
			$genre = '<h3>Genres:</h3><br/>';
			foreach($genresTerms as $genresTerm){
			   $genre .= $genresTerm->name.'<br/>';
			}
		?>
		<div class="col-md-3">
			<?php echo $genre; ?>
		</div>

		<?php
			$params = array(
			    'limit' => 4, 
			);

			$mypod = pods( 'film', $params );

			$ticketPrice = '<h3>Ticket Prices:</h3><br/>';
			$releaseDate = '<h3>Release Dates:</h3><br/>';
			while ( $mypod->fetch() ) {
				$ticketPrice .= $mypod->display( 'ticket_price' ).'<br/>';
				$releaseDate .= $mypod->display( 'release_date' ).'<br/>';
			}
		?>

		<div class="col-md-3">
			<?php echo $ticketPrice;?>
		</div>

		<div class="col-md-3">
			<?php echo $releaseDate;?>
		</div>
 	</div>

 	<div class="row">
 		<h2>List of Films:</h2>

		<?php
			$params = array(
			    'limit' => '', 
			);

			$mypod = pods( 'film', $params );
		?>
		<table class="table table-bordered">
			<tr>
				<th>Film Title</th>
				<th>Country</th>
				<th>Genre</th>
				<th>Ticket Price</th>
				<th>Release Date</th>
			</tr>
			
			<?php
				while ( $mypod->fetch() ) {
					echo '<tr><td><a href="' . $mypod->display( 'permalink' ) . '">' . $mypod->display( 'post_title' ) .'</a></td><td>'.$mypod->display( 'country' ).'</td><td>'.$mypod->display( 'genre' ).'</td><td>'.$mypod->display( 'ticket_price' ).'</td><td>'.$mypod->display( 'release_date' ).'</td></tr>';
				}
				echo $films;
			?>
			
		</table>
 	</div>
