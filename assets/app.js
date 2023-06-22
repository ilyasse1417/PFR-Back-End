import "bootstrap"; // bootstrap 5 js
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';
// TODO à déplacer

document.getElementById("save").addEventListener("click", function (event) {
  event.preventDefault();
  document.getElementById("create").submit();
});
