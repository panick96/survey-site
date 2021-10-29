<!DOCTYPE html>
<html lang="en">
<head>
  <title>BSC Survey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link icon="icon" href="images/BYU-Idaho.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid" id="main-content">   
        <div class="row">  

            <div class="row justify-content-center">
                <div class="col-xs-12" id="welcome-statement">
                    <h1>Welcome to the BYU-Idaho Support Center Survey!</h1>
                    <p>Please fill out this quick survey to tell us about your experience with us.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class = col-xs-12>
                    <form class="feedback-form">
                        <div class="form-group">
                            <div class="question-text"><p>1. How satisfied are you with the service you received?</p></div>
                            <div class="radio-buttons" id="question1" name="question1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question1RadioOptions" id="question1Radio1" value="1">
                                    <label class="form-check-label" for="question1Radio1">&nbspVery Unsatisfied</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question1RadioOptions" id="question1Radio2" value="2">
                                    <label class="form-check-label" for="question1Radio2">&nbspUnsatisfied</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question1RadioOptions" id="question1Radio3" value="3">
                                    <label class="form-check-label" for="question1Radio3">&nbspNeutral</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question1RadioOptions" id="question1Radio4" value="4">
                                    <label class="form-check-label" for="question1Radio4">&nbspSatisfied</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question1RadioOptions" id="question1Radio5" value="5">
                                    <label class="form-check-label" for="question1Radio5">&nbspVery Satisfied</label>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="question-text"><p>2. Given the opportunity, how likely are you to reccommend us to a friend?</p></div>
                            <div class="radio-buttons" id="question2" name="question2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question2RadioOptions" id="question2Radio1" value="1">
                                    <label class="form-check-label" for="question2Radio1">&nbspVery Unlikely</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question2RadioOptions" id="question2Radio2" value="2">
                                    <label class="form-check-label" for="question2Radio2">&nbspUnlikely</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question2RadioOptions" id="question2Radio3" value="3">
                                    <label class="form-check-label" for="question2Radio3">&nbspNeutral</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question2RadioOptions" id="question2Radio4" value="4">
                                    <label class="form-check-label" for="question2Radio4">&nbspLikely</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question2RadioOptions" id="question2Radio5" value="5">
                                    <label class="form-check-label" for="question2Radio5">&nbspVery Likely</label>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="question-text"><p>3. How easy was it to solve your problem with our help?</p></div>
                            <div class="radio-buttons" id="question3" name="question3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question3RadioOptions" id="question3Radio1" value="1">
                                    <label class="form-check-label" for="question3Radio1">&nbspVery Difficult</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question3RadioOptions" id="question3Radio2" value="2">
                                    <label class="form-check-label" for="question3Radio2">&nbspDifficult</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question3RadioOptions" id="question3Radio3" value="3">
                                    <label class="form-check-label" for="question3Radio3">&nbspNeutral</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question3RadioOptions" id="question3Radio4" value="4">
                                    <label class="form-check-label" for="question3Radio4">&nbspEasy</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="question3RadioOptions" id="question3Radio5" value="5">
                                    <label class="form-check-label" for="question3Radio5">&nbspVery Easy</label>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="feedback-label">
                                <label for="feedback">Any feedback you would like to give us?</label>
                            </div>
                            <textarea class="form-control" id="feedback" rows="5" placeholder="Enter feedback here."></textarea>
                        </div>
                        <div class="submit-button">
                            <input id="submit-button" class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                    <div class="whitespace">
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <footer>
        <a href="https://www.byui.edu/"><img id="byuilogo" src="images/BYU-Idaho.jpg" alt="BYU-I Logo"></a>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>