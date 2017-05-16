'use strict';

/**
 * Dependencies.
 */
var Events = require('backbone-events-standalone');

// mobile breakpoint
var mqMobile = matchMedia('(max-width: 679px)');
mqMobile.addListener(mediaChange);

// tablet breakpoint
var mqTablet = matchMedia('(min-width: 680px) and (max-width: 1023px)');
mqTablet.addListener(mediaChange);

/**
 * [Media description]
 * @type {Object}
 */
var Media = _.extend({}, Events);

mediaChange(true);

function mediaChange(silent) {
  Media.media = mqMobile.matches
    ? 'mobile' : mqTablet.matches
    ? 'tablet' : 'desktop';

  if (silent)
    Media.trigger('change');
}

/**
 * Exports.
 */

module.exports = Media;
