var slider1 = document.getElementById("question-1-slider");
var output1 = document.getElementById("question-1-output");
output1.innerHTML = slider1.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider1.oninput = function() {
  output1.innerHTML = this.value;
}

var slider2 = document.getElementById("question-2-slider");
var output2 = document.getElementById("question-2-output");
output2.innerHTML = slider2.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider2.oninput = function() {
  output2.innerHTML = this.value;
}

var slider3 = document.getElementById("question-3-slider");
var output3 = document.getElementById("question-3-output");
output3.innerHTML = slider3.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider3.oninput = function() {
  output3.innerHTML = this.value;
}

var submitButton = document.getElementById("submit-button")

submitButton.onclick = function(){
    
}