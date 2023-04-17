<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QUIZ GAME</title>
  <link rel="icon" href="TITLE2.PNG" type="image/x-icon">
  <link rel="stylesheet" href="css.css">
  <?php include "b.php" ?>
</head>

<body>
  <!-- loading screen -->
  <div id="loading_screen">
    <div id="logo"><img src="LOGO2.PNG"></div>
    <div id="start">start</div>
    <div class="loading">
      <div id="load1"></div>
      <div id="load2"></div>
      <div id="load3"></div>
    </div>
  </div>
  <!-- quiz screen -->


  <div id="quiz">
    <div id="name_screen">
      <form action="" method="post">
        <label for="name" id="name_label">NAME</label><br>
        <input type="text" id="name" autocomplete="off" onkeyup="passwords()"><br>
        <button type="submit" id="name_btn" onclick="name_btn_click()">SUBMIT</button>
      </form>
    </div>

    <div id="hello"></div>
    <div id="timer"><br></div>
  </div>
  <!-- quiz screen 2 -->

  <div id="main_quiz">
    <div id="container">
      <div id="displayname"></div>
      <?php for ($i = 0; $i < 10; $i++) : ?>
        <button id="btn-ques<?php echo $i; ?>"><?php echo $i + 1; ?></button>
      <?php endfor; ?>

    </div>
    <button id="submit-button">FINISH QUIZ</button>
  </div>
  <div id="score">
    <div id="your">YOUR</div>
    <div id="finalscore">SCORE</div>
    <div id="scorevalue">100</div>
  </div>
  <div id="script">
    <script src="script.js"></script>

    <script>
      const ques = <?php echo json_encode($ques); ?>;
      const opt1 = <?php echo json_encode($opt1); ?>;
      const opt2 = <?php echo json_encode($opt2); ?>;
      const opt3 = <?php echo json_encode($opt3); ?>;
      const opt4 = <?php echo json_encode($opt4); ?>;
      const correct = <?php echo json_encode($correctoption); ?>;
      console.log(ques);
      console.log(opt1);
      console.log(opt2);
      console.log(opt3);
      console.log(opt4);
      console.log(correct);



      for (let i = 0; i < 10; i++) {
        const question = ques[i];
        const option1 = opt1[i];
        const option2 = opt2[i];
        const option3 = opt3[i];
        const option4 = opt4[i];
        const correctOption = correct[i];
        const div = document.createElement("div");
        div.id = `ques${i}`;

        const questionDiv = document.createElement("div");
        questionDiv.classList.add("question");
        questionDiv.textContent = question;

        const answerDiv = document.createElement("div");
        answerDiv.classList.add("answer");

        const option1Button = document.createElement("button");
        option1Button.id = `ans1.${i}`;
        option1Button.setAttribute("data-value", option1);
        option1Button.textContent = option1;

        const option2Button = document.createElement("button");
        option2Button.id = `ans2.${i}`;
        option2Button.setAttribute("data-value", option2);
        option2Button.textContent = option2;

        const option3Button = document.createElement("button");
        option3Button.id = `ans3.${i}`;
        option3Button.setAttribute("data-value", option3);
        option3Button.textContent = option3;

        const option4Button = document.createElement("button");
        option4Button.id = `ans4.${i}`;
        option4Button.setAttribute("data-value", option4);
        option4Button.textContent = option4;

        answerDiv.appendChild(option1Button);
        answerDiv.appendChild(option2Button);
        answerDiv.appendChild(option3Button);
        answerDiv.appendChild(option4Button);

        div.appendChild(questionDiv);
        div.appendChild(answerDiv);

        document.body.appendChild(div);
      }


      //////////////////////

      const buttons = document.querySelectorAll("#ans1\\.0, #ans2\\.0, #ans3\\.0, #ans4\\.0");

      function addClickHandler(buttons) {
        for (let i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener("click", function() {
            for (let j = 0; j < buttons.length; j++) {
              if (j === i) {
                buttons[j].style.backgroundColor = "forestgreen";
              } else {
                buttons[j].style.backgroundColor = "#0a2a46";
              }
            }
          });
        }
      }

      for (let i = 0; i <= 9; i++) {
        const buttons = document.querySelectorAll(`#ans1\\.${i}, #ans2\\.${i}, #ans3\\.${i}, #ans4\\.${i}`);
        addClickHandler(buttons);
      }

      const selectedopt = new Array(10).fill(0);

      let s = 0;
      const submitBtn = document.getElementById("submit-button");
////////////////////////////////////////////////////////////////
      submitBtn.addEventListener("click", function() {
      



        for (let j = 0; j <= 9; j++) {
          for (let i = 1; i <= 4; i++) {
            const selector = `ans${i}.${j}`;
            const element = document.getElementById(selector);

            if (element) {
              if (element.style.backgroundColor === "forestgreen") {
                console.log(selector + " ticked");
                const dataValue = element.getAttribute("data-value");
                console.log(dataValue);
                selectedopt[j] = dataValue;
                s++;
              }

            } else {
              console.log(`Element not found for selector ${selector}`);
            }
          }
        }
        console.log(selectedopt);
///////////////////////////////////////////////////////////
        let marks = 0;
        for (let x = 0; x < 10; x++) {
          if (selectedopt[x] === correct[x]) {
            marks++;
          }
        }
        console.log(marks);
        document.getElementById("scorevalue").innerHTML = marks * 10;
        document.getElementById("score").style.display = "flex";
        document.getElementById("container").style.display = "none";
        document.getElementById("submit-button").style.display = "none";
        for (let i = 0; i <= 9; i++) {
          document.getElementById("ques" + i).style.display = "none";
        }
      })
    </script>
  </div>
</body>

</html>