<template>
<section class="quiz">
    <div class="explanation_board">
        <div class="true_or_false_board">
            <div class="float-right" v-bind:style="{ color: activeColor }">
                {{ rightAndWrong }}
            </div>
            <div>
                {{ quizCounter }}/10
            </div>
        </div>
        <h1>QUIZ</h1>
        <h2>What`s this?</h2>
        <p>
            score: {{ score }}<br />
            total score: {{ totalScore }}<br />
        </p>
        <div class="explanation_text">
            <h2>Explanation</h2>
            <ul>
                <li v-for="(explanation, index) in correctAnswer.explanations" v-bind:key="index">
                    {{ explanation.explanation }}
                </li>
            </ul>
        </div>
        <div class="answers-wrapper">
            <div class="answers-box">
                <button @click="answer(choice[0].id)" class="button">
                    {{ choice[0].item_name }}
                </button>
            </div>
            <div class="answers-box">
                <button @click="answer(choice[1].id)" class="button">
                    {{ choice[1].item_name }}
                </button>
            </div>
            <div class="answers-box">
                <button @click="answer(choice[2].id)" class="button">
                    {{ choice[2].item_name }}
                </button>
            </div>
            <div class="answers-box">
                <button @click="answer(choice[3].id)" class="button">
                    {{ choice[3].item_name }}
                </button>
            </div>
        </div>
    </div>
</section>
</template>

<script>
export default {
  data: function () {
    return {
      items: [],

      correctAnswer: [],
      nameHidden: true,
      choice: [],
      firstAnswer: true,
      rightAndWrong: true,
      activeColor: "white",

      quizCounter: 1,
      score: 100,
      totalScore: 0,
    }
  },

  mounted: function () {
    this.indexItems10();
  },

  methods : {
    indexItems10: function () {
      axios.get('/api/items/items10'
      ).then((response) => {
        this.items = response.data;
        this.choice = this.items[0];
        this.correctAnswer = this.choice[Math.floor( Math.random() * 4 )];
      }).catch((response) => {
         console.log(response);
      })
    },

    answer: function (answer) {
      if (this.firstAnswer && this.quizCounter < 11) {
        // 回答直後の処理
        var checkAnswer = ( answer == this.correctAnswer.id ) ? true : false;
        this.nameHidden = false;
        this.rightAndWrong = checkAnswer;
        if (checkAnswer) {
          this.activeColor = 'green';
          this.totalScore += this.score;
        } else {
          this.activeColor = 'red';
        }
        this.firstAnswer = false;

        // 回答して3秒後（次の問題に移る処理）
        setTimeout(() => {
          this.quizCounter += 1;
          this.indexItems10();
          this.activeColor = "white";
          this.firstAnswer = true;
          this.nameHidden = true;
          if ( this.quizCounter > 10 ) {
              location.href(this.$router.push('/quizResult' + '/' + this.totalScore))
          }
        }, 3000);
      }
    }
  }
}

</script>
