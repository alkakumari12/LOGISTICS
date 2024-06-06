var clientSlider = document.getElementById('client-slider');
var clientList = clientSlider.getElementsByTagName('li');

setInterval(() => {
  clientSlider.style.transition = "transform 0.3s ease-in-out";
  clientSlider.style.transform = "translateX(-20%)";
}, 3000);

clientSlider.addEventListener('transitionend', function () {
  clientSlider.appendChild(clientSlider.firstElementChild);

  clientSlider.style.transition = "none";
  clientSlider.style.transform = "translateX(0)";
  setTimeout(() => {
    clientSlider.style.transition = "transform 0.3s ease-in-out";
  });
});
