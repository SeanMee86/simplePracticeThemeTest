import { initRepeaterSlide } from '../util/repeaterSlide';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    /**
     *
     * @type {{left: HTMLElement, right: HTMLElement}}
     */
    const arrows = {
      right: document.getElementById('repeater-right'),
      left: document.getElementById('repeater-left'),
    }
    initRepeaterSlide(arrows, 280);
  },
};
