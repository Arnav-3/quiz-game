////////////////input name////////////////////
function passwords(){
    var p1=document.getElementById("name").value;
  if(p1.length>2)
    {
     document.getElementById("name_btn").style.visibility="visible";
     }
  else {
    document.getElementById("name_btn").style.visibility="hidden";
  }
  }
  /////////////////hide submit btn//////////////////////
     window.onload = function () {
         document.getElementById("name_btn").style.visibility="hidden";
     }
     ////////////////////prevent enter////////////////////////////////
     document.getElementById("name").addEventListener("keydown", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        return false;
      }
    });
  //////////////////////////////////////////////
  const start = document.getElementById('start');
  const loads = document.querySelectorAll('.loading div');
  const quiz = document.getElementById('quiz');
  const logo = document.getElementById('logo');
  
  
  
  start.addEventListener('click', () => {
    // Set initial styles
    start.innerHTML = "starting";
    start.style.fontFamily = "'Forte',Segoe Print , Brush Script MT";
    start.style.animationIterationCount = "0";
   
    loads.forEach((load, index) => {
      load.style.backgroundColor = "#FFB300";
    });
  
    // Show loading animation
    loads.forEach((load, index) => {
      setTimeout(() => {
        load.style.backgroundColor = "#26A69A";
        load.style.display = "flex";
      }, (index + 1) * 800);
    });
  
    // Hide start button , loading and logo
    setTimeout(() => {
      document.getElementById("loading_screen").style.display="none";
    }, 3200);
  
    // Show quiz section
    setTimeout(() => {
      quiz.style.display = "flex";
    }, 3200);  
  });
  
  
  //timer
  function countdown() {
      var count = 5; 
      var timer = setInterval(function() {
  document.getElementById("timer").innerText=count;
        count--;
        if (count < 0) {
          clearInterval(timer);
          console.log("Timer is up!");
        }
      }, 1000); 
    }
    //button click
  function name_btn_click(){
      document.getElementById("name_screen").style.display="none";
      document.getElementById("hello").style.display="flex";
      var name = document.getElementById("name").value;
      document.getElementById("displayname").innerHTML=name;
      document.getElementById("hello").innerHTML="Hello <strong>"+name+" </strong>  ,  let's begin!!!";
  
      document.getElementById("timer").style.display="flex";
     countdown(); 
      setTimeout(() => {
        quiz.style.display="none"
       document.getElementById("main_quiz").style.display="flex";
      ///////question hide function///////////////
      document.getElementById("ques0").style.display="flex"
  
    
      function question_hide(a){
       for(let i=0;i<10;i++){
  
        if(i!==a)
        {
          document.getElementById("ques"+i).style.display="none";
        }
        else{
          document.getElementById("ques"+i).style.display="flex";
  
        }
       }
  
      }
      
      for(let a=0;a<10;a++)
      {
        document.getElementById("btn-ques"+a).addEventListener("click", function() {question_hide(a);   });
      }
     
   }, 7000);
  
  
    }
  
    //prevent refresh
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault();
    });
  //////////////////////////////
   
  
  