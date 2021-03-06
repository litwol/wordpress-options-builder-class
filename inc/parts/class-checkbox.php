<?php

namespace WPOP\V_4_0;

/**
 * Class Checkbox
 * @package WPOP\V_3_0
 */
class Checkbox extends Part {

	public $value = 'on';
	public $input_type = 'checkbox';
	public $data_store = true;


	public function __construct( $i, $args = [] ) {
		parent::__construct( $i, $args );
		foreach ( $args as $name => $value ) {
			$this->$name = $value;
		}
	}

	public function label_markup() {
	}

	public function render() {
		?>
		<div class="cb-wrap">
			<?php
			$this->input( esc_attr( $this->id ), 'checkbox');
			$this->label_markup();
			?>
		</div>
		<?php
	}

}
