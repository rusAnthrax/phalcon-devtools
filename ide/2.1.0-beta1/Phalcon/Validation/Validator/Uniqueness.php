<?php 

namespace Phalcon\Validation\Validator {

	/**
	 * Phalcon\Validation\Validator\Uniqueness
	 *
	 * Check that a field is unique in the related table
	 *
	 * <code>
	 * use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
	 *
	 * $validator->add('username', new UniquenessValidator([
	 *     'model' => new Users(),
	 *     'message' => ':field must be unique'
	 * ]));
	 * </code>
	 *
	 * Different attribute from the field:
	 * <code>
	 * $validator->add('username', new UniquenessValidator([
	 *     'model' => new Users(),
	 *     'attribute' => 'nick'
	 * ]));
	 * </code>
	 */
	
	class Uniqueness extends \Phalcon\Validation\Validator implements \Phalcon\Validation\ValidatorInterface {

		private $columnMap;

		/**
		 * Executes the validation
		 */
		public function validate(\Phalcon\Validation $validation, $field){ }


		protected function isUniqueness(\Phalcon\Validation $validation, $field){ }


		/**
		 * The column map is used in the case to get real column name
		 */
		protected function getColumnNameReal($record, $field){ }

	}
}
