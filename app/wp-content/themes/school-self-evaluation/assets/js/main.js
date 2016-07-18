// TODO: Comments

import {
  forEachElement,
  getElement,
  getElements,
} from './util';


const app = getElement('[data-app]');
const styleButtons = getElements('[data-class]');

let currentStyleClass = null;


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
}


init();
