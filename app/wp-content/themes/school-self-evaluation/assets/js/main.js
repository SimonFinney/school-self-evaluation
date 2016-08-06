// TODO: Comments

import {
  forEachElement,
  getElement,
  getElements,
} from './util';


const app = getElement('[data-app]');
const styleButtons = getElements('[data-class]', app);
const subnavigationLinks = getElements('.sub-menu a', app);

let currentStyleClass = null;


function toggleSubnavigationFocus(event) {
  const isFocusEvent = (event.type === 'focus');

  const subnavigationMenu = event.target
    .parentNode
    .parentNode;

  isFocusEvent ?
    subnavigationMenu.setAttribute('data-active', '') :
    subnavigationMenu.removeAttribute('data-active');
}


function toggleStyles(event) {
  const styleButton = event.target;
  const styleClass = styleButton.getAttribute('data-class');

  if (currentStyleClass) {
    app.classList.remove(currentStyleClass);
  }

  if (styleClass) {
    app.classList.add(styleClass);
  }

  currentStyleClass = styleClass;
}


function init() {
  forEachElement(styleButtons, styleButton => styleButton.addEventListener('click', toggleStyles));

  // Handles tab navigation through the subnavigation
  forEachElement(subnavigationLinks, subnavigationLink => {
    subnavigationLink.addEventListener('focus', toggleSubnavigationFocus);
    subnavigationLink.addEventListener('blur', toggleSubnavigationFocus);
  });
}


init();
