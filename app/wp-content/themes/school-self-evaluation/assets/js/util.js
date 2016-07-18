function httpRequest(type, url, callback, dataToSend) {
  const data = dataToSend || {};
  const xmlHttpRequest = new XMLHttpRequest();

  xmlHttpRequest.onreadystatechange = () => {
    if ((xmlHttpRequest.readyState === 4) && (xmlHttpRequest.status === 200)) {
      const response = xmlHttpRequest.responseText;
      callback(JSON.parse(response));
    }
  };

  xmlHttpRequest.open(type, url, true);
  xmlHttpRequest.send(JSON.stringify(data));
}


export function forEachElement(elements, callback) {
  [].forEach
    .call(elements, element => callback(element));
}


export function getElement(selector, parentElement = document) {
  return parentElement.querySelector(selector);
}


export function getElements(selector, parentElement = document) {
  return parentElement.querySelectorAll(selector);
}


export function toggleElement(element, condition) {
  const elementToToggle = element;
  elementToToggle.hidden = condition;
}


export function getRequest(url, callback) {
  httpRequest('GET', url, callback);
}
