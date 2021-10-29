const submitButton = document.getElementById("submit-button");
const clearScreen = document.getElementById("main-content");

function getRadioValue(nameOfRadioButton){
  const element = document.getElementsByName(nameOfRadioButton);

  for(i=0; i < element.length; i++){
    if (element[i].checked)
    return element[i].value;
  }
}

submitButton.onclick = function(){    
  const question1Value = getRadioValue("question1RadioOptions");
  const question2Value = getRadioValue("question2RadioOptions");
  const question3Value = getRadioValue("question3RadioOptions");
  const feedbackValue = document.getElementById('feedback').value;
  
  console.log(question1Value, question2Value, question3Value, feedbackValue);
  clearScreen.innerHTML = "<h1>Thank you for your feedback!</h1>";
}

//TODO: submitButton.onClick needs to clear the url and send a post request.