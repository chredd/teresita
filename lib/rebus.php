<?php 

/**
 * Rebus
 *
 * @package default
 * @author 
 **/
class Rebus extends stdClass
{

	/**
	 * The file to create rebus from
	 *
	 * @var file
	 **/
	private $json;

	function __construct($json = null ) {
		if(!$json) return false;
		$this->json = $json ;
	}

	static function renderRebus($json)		
	{
		$data = json_decode( file_get_contents( $json ) );
		//print_r($data);
		//return $data;

		$count = 0;

		echo '<div class="row-fluid">';

		foreach ($data as $word => $node) {
			# code..
			?>
			<div class="span3 item">
					<img class="image" src="<?php echo $node->image ?>" alt="">
					<?php if( $node->text ): ?>
					<span class="text"><?php echo $node->text ?></span>
					<?php endif; ?>
			</div>
			
			<?php

			$count++;
			if($count%4 == 0) echo '</div><div class="row-fluid">';
		}

		echo '</div>';
	}

} // END class Rebus extends stdClass