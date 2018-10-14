'use strict';

import MobileMenu from './modules/MobileMenu';
import DesktopMenu from './modules/DesktopMenu';
import Video from './modules/Video';
import ContactPopup from './modules/ContactPopup';
import Comment from './modules/Comment';
// import Slider from './modules/Slider';
import Flickity from '../../node_modules/flickity';

new MobileMenu();
new DesktopMenu();
new Video();
new ContactPopup();
new Comment();
// new Slider();

let slides = document.querySelector("#comments");
var flkty = new Flickity(slides, {

});