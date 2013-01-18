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

		foreach ($data as $word => $node) {
			# code..

			//echo ($count %3);

			?>
			

			<div class="span3 item">
				<img class="image" src="<?php echo $node->image ?>" alt="">
				<span class="text"><?php echo $node->text ?></span>
			</div>
			
			<?php
			
		}
	}

} // END class Rebus extends stdClass