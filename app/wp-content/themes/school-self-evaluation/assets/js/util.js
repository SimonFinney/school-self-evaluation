export function forEachElement(elements, callback) {
  [].forEach.call(elements, element => callback(element));
}

export function getElement(selector, parentElement = document) {
  return parentElement.querySelector(selector);
}

export function getElements(selector, parentElement = document) {
  return parentElement.querySelectorAll(selector);
}
