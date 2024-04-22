( function( api ) {

	// Extends our custom "cinematic-videography" section.
	api.sectionConstructor['cinematic-videography'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );