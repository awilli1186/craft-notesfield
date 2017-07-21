(function($) {
	/**
	 * Notes field
	 *
	 * @param params {object} {
	 * 	@var {string} id
	 * 	@var {string|boolean} hideLabel
	 * }
	 * @constructor
	 */
	NotesField = function(params) {
		// Hide the heading
		if (params.hideLabel) {
			$('#' + params.id + '-label').hide();
		}
	};
})(jQuery);