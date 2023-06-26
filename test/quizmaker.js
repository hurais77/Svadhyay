  var quesCounter = 0;
  var selectOptions = [];
  var quizSpace = document.getElementById('list');
  var i = 0;

    function nextQuestion() 
    {
        while(i < allQuestions.length)
        {
            var nextQuestion = createElement(i);
            quizSpace.append(nextQuestion);
            i++;
        }
    }

      function createElement(index) 
    {
        var element = document.createElement('li');
        element.id = 'question' + (index + 1);

        var question = document.createElement('p')
        question.append(allQuestions[index].question);
        element.appendChild(question);

        var radio = radioButtons(index);
        element.append(radio);

        var kl = document.getElementById('list').appendChild(element);
        return kl;
    }

      function radioButtons(index) 
    {
    	var q = 1;
        var radioItems = document.createElement('ul');
        for (var i = 0; i < allQuestions[index].options.length; i++) {
          var item = document.createElement('li');
          item.style = "list-style-type:none"
          var input = document.createElement("input");
          input.type = "radio";
          input.name = "answer" + (index + 1);
          input.id = "ans-" + (index + 1)+ "-" + q ;
          input.value = i ;
          /*input.append(allQuestions[index].options[i]);*/
          item.appendChild(input);
          var lable = document.createElement('lable');
          lable.append(allQuestions[index].options[i]);
          item.appendChild(lable);
          radioItems.append(item);
          q++;
        }
        return radioItems;
  }

    function chooseOption() 
    {
    	var q = 1;
    	for(var i = 0; i < allQuestions.length; i++)
    	{
    		for(var q = 1; q < 5; q++)
    		{
    			if(document.getElementById("ans-"+(i+1)+"-"+q).checked == true)
    			{
    				selectOptions[i] = document.getElementById("ans-"+(i+1)+"-"+q).value;
    			}
    		}
    	}
      displayResult()
    }

      function displayResult() 
    {
      var score = document.getElementById("demo");
        var correct = 0;
        for (var i = 0; i < selectOptions.length; i++) 
        {
          if (selectOptions[i] == allQuestions[i].answer) 
          {
            correct++;
          }
        }
        score.innerHTML = ('You scored ' + correct + ' out of ' + allQuestions.length);
        sessionStorage.setItem("marks", correct);

      
        window.alert(score.innerHTML);
     

        
  }
 