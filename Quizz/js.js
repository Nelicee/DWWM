const questions = [
    {
      question: "Quelle est la capitale de la France ?",
      options: ["Paris", "Londres", "Berlin", "Madrid"],
      answer: "Paris"
    },
    {
      question: "Combien de continents y a-t-il sur Terre ?",
      options: ["5", "6", "7", "8"],
      answer: "7"
    }
    // Ajoutez autant de questions que vous le souhaitez
  ];

  let currentQuestion = 0;
  let score = 0;

  const questionElement = document.getElementById('question');
  const optionsElement = document.getElementById('options');
  const submitButton = document.getElementById('submit');
  const resultElement = document.getElementById('result');

  function showQuestion() {
    const current = questions[currentQuestion];
    questionElement.textContent = current.question;
    optionsElement.innerHTML = '';

    current.options.forEach((option, index) => {
      const li = document.createElement('li');
      li.textContent = option;
      li.addEventListener('click', () => selectOption(option));
      optionsElement.appendChild(li);
    });
  }

  function selectOption(option) {
    if (option === questions[currentQuestion].answer) {
      score++;
    }

    if (currentQuestion === questions.length - 1) {
      showResult();
    } else {
      currentQuestion++;
      showQuestion();
    }
  }

  function showResult() {
    questionElement.style.display = 'none';
    optionsElement.style.display = 'none';
    submitButton.style.display = 'none';
    resultElement.textContent = `Votre score : ${score} / ${questions.length}`;
  }

  showQuestion();