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
			$image = false;
			?>
			<div class="span4 item">
					<?php if(!empty($node->image) ): $image = true; ?>
					<img class="image" src="<?php echo $node->image ?>" alt="" title="Hm.. vad kan det här vara?">
					<?php endif; ?>
					<?php if( $node->text ): ?>
					<span class="text <?php echo !$image ? "no-image" : "" ?>"><?php echo $node->text ?></span>
					<?php endif; ?>
			</div>
			
			<?php

			$count++;
			if($count%3 == 0) echo '</div><div class="row-fluid">';
		}

		echo '</div>';
	}

} // END class Rebus extends stdClass