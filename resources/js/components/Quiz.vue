<template>
<div class="uk-container">
    <div class="uk-section-xsmall">
        <div v-if="quizCounter < 11">
            <div class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Quiz</div>
        </div>
        <div v-else>
            <router-link to="/"  class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Show Result</router-link>
        </div>
        <div class="uk-card uk-card-default uk-border-rounded">
            <div class="uk-card-header">

                <!-- タイトル -->
                <div class="uk-float-right" v-bind:style="{ color: activeColor }">
                    {{ rightAndWrong }}
                </div>
                <div>
                    {{ quizCounter }}/10
                </div>
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand uk-text-center">
                        <h3 class="uk-card-title uk-margin-remove-bottom">
                            <div v-if="nameHidden">
                                What's this ?
                            </div>
                            <div v-else>
                                {{ correctAnswer.item_name }}
                            </div>
                        </h3>
                        <p class="uk-text-meta uk-margin-remove">score: 100</p>
                        <p class="uk-text-meta uk-margin-remove">total score: {{ totalScore }}</p>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="10" max="100"></progress>

            </div>
            <div class="uk-card-body">
                <p>・Explanations</p>
                <ul class="uk-list　uk-list-divider">
                    <li v-for="(explanation, index) in correctAnswer.explanations" v-bind:key="index">
                        {{ explanation.explanation }}
                    </li>
                </ul>
                <button class="uk-button uk-button-primary uk-margin-remove-bottom uk-width-1-1 uk-margin-small-bottom">Add explanations</button>
                <hr>
                <div class="uk-child-width-1-2 uk-text-center uk-grid-small " uk-grid>
                    <div>
                        <button @click="answer(choice[0].id)" class="uk-button uk-button-default uk-width-1-1">
                            {{ choice[0].item_name }}
                        </button>
                    </div>
                  　<div>
                        <button @click="answer(choice[1].id)" class="uk-button uk-button-default uk-width-1-1">
                            {{ choice[1].item_name }}
                        </button>
                    </div>
                </div>
                <div class="uk-child-width-1-2 uk-text-center uk-grid-small" uk-grid>
                    <div>
                        <button @click="answer(choice[2].id)" class="uk-button uk-button-default uk-width-1-1">
                            {{ choice[2].item_name }}
                        </button>
                    </div>
                  　<div>
                        <button @click="answer(choice[3].id)" class="uk-button uk-button-default uk-width-1-1">
                            {{ choice[3].item_name }}
                        </button>
                    </div>
                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
</div>
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
      activeColor: "black",

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
          this.activeColor = "black";
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
