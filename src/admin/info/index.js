/* CSS */
/* global PatternsMagazineLocalize */
/* eslint-disable no-console */
import './index.scss';

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class PatternsMagazinePluginApi {
	constructor() {
		this.nonce = PatternsMagazineLocalize.nonce;
		this.bindEvents();
	}

	bindEvents() {
		document.addEventListener( 'click', ( event ) => {
			if (
				event.target.classList.contains(
					'patterns-magazine-install-plugin'
				)
			) {
				event.target.classList.add( 'patterns-magazine-processing' );
				this.installPlugin( event.target );
			}
		} );
	}

	async installPlugin( el ) {
		const pluginData = el.dataset.plugin;
		const plugin = JSON.parse( pluginData );
		try {
			const result = await apiFetch( {
				path: 'patterns-magazine/v1/install-plugin',
				method: 'POST',
				data: plugin,
				headers: {
					'X-WP-Nonce': this.nonce,
				},
			} );
			if ( result ) {
				if ( result.success ) {
					el.innerText = el.dataset.successText;
					el.disabled = true;
					el.classList.remove( 'patterns-magazine-install-plugin' );
				} else {
					el.innerText = el.dataset.failText;
				}
			}
		} catch ( error ) {
			console.error( error );
			el.innerText = el.dataset.failText;
		}
		el.classList.remove( 'patterns-magazine-processing' );
	}
}

document.addEventListener( 'DOMContentLoaded', () => {
	new PatternsMagazinePluginApi();
} );
