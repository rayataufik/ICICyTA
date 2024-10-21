// Set the date we're counting down to
// var countDownDate = new Date("Dec 17, 2024 00:00:00").getTime();
var date_1 = new Date(2024, 11, 17, 0, 0, 0);
// for date_2 set the date + 1 days to get accurate date and set the others 0
//var date_2 = new Date(2024, 12, 19, 0, 0, 0);


var countDownDate = date_1.getTime();
//var countDownDate_2 = date_2.getTime();

// Update the count down every 1 second
var x = setInterval(function () {
  // Get today's date and time
  var dateNow = new Date();
  var now = dateNow.getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  //var distance_2 = countDownDate_2 - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("c-days").innerHTML =
    days + "<div class='small-text'>Days</div>";
  document.getElementById("c-hours").innerHTML =
    hours + "<div class='small-text'>Hours</div>";
  document.getElementById("c-minutes").innerHTML =
    minutes + "<div class='small-text'>Minutes</div>";
  document.getElementById("c-seconds").innerHTML =
    seconds + "<div class='small-text'>Seconds</div>";

  // If the count down is finished, write some text

  if ((dateNow.getDate() == date_1.getDate() || dateNow.getDate() == date_2.getDate() - 1) && (distance_2 = 0)) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML =
      "<h1>Today is The Day <span style='color:#ED3A8D;'>!</span></h1>";
  } else if (distance < 0) {
    const element = document.querySelector(".hero p.mb-5");
    element.remove()
    const deleted = document.getElementById("countdown");
    deleted.remove();
  }
}, 1000);


function enableInput(inputId, submitButtonId) {
  var input = document.getElementById(inputId);
  var submitButton = document.getElementById(submitButtonId);

  if (input.disabled) {
    input.disabled = false;
  }

  submitButton.disabled = false;
}

document.addEventListener('trix-file-accept', function (e) {
  e.preventDefault();
});

function enableEditor() {
  var editor = document.getElementById("editor");
  var submitButton = document.getElementById("submitButton");

  editor.setAttribute("contenteditable", "true");

  editor.removeAttribute("disabled");

  submitButton.disabled = false;
}
