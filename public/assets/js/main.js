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
