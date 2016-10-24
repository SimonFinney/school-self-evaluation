// TODO: Comments

import {
  forEachElement,
  getElement,
  getElements,
} from './util';

import './tinymce-plugin';

const app = getElement('[data-app]');
let currentStyleClass;


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
  localStorage.setItem('class', currentStyleClass);
}


function init() {
  const styleButtons = getElements('[data-class]', app);
  const subnavigationLinks = getElements('.sub-menu a', app);

  currentStyleClass = localStorage.getItem('class');

  if (currentStyleClass) {
    app.classList.add(currentStyleClass);
  }

  forEachElement(styleButtons, styleButton => styleButton.addEventListener('click', toggleStyles));

  // Handles tabbing through the subnavigation
  forEachElement(subnavigationLinks, subnavigationLink => {
    subnavigationLink.addEventListener('focus', toggleSubnavigationFocus);
    subnavigationLink.addEventListener('blur', toggleSubnavigationFocus);
  });
}

if (app) {
  init();
}
