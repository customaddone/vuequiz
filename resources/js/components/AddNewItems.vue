<template>
    <section class="add-items">
        <h1>ADD ITEMS</h1>
        <div class="input-form">
            <!-- 四択の択を作成 -->
            <input type="text" name="add_value" v-model="addItemName" placeholder="ADD NEW ITEMS">
            <button name="add_button" @click="addItem" class="button">ADD</button>
            <p>ITEMS LIST</p>
            <div class="items-list">
                <ul>

                    <!-- 四択の択を一覧表示 -->
                    <li　v-for="(item, index) in items" v-bind:key="index">
                        <p class="item-title">{{ item.item_name }}</p>
                        <i dusk="trash" @click="deleteItem(item.id)" class="fa fa-trash-o "></i>

                        <!-- explanation表示、編集 -->
                        <i dusk="edit" @click="showExplanationsButton(index)" class="fa fa-edit"></i>
                        <div v-if="showButton == index">
                            <p class="item-title">Explanation</p>

                            <!-- explanation新規作成時のmodal -->
                            <div class="new-explanation" @click="newExpToggleModal">new exp</div>
                            <div class="p-modal" :class="{'is-open': isNewExpModalActive}">
                                <div class="modal-mask">
                                    <div class="modal-main">
                                        <div class="modal-title">
                                            <i class="fa fa-times-circle-o" @click="newExpToggleModal"></i>
                                            <h3>new explanation</h3>
                                        </div>
                                        <div class="modal-input">
                                            <textarea type="text" name="add_explanation" v-model="addExplanationData"></textarea>
                                            <button name="add_explanation_button" @click="addExplanation(item.id)" class="button">New</button>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-for="(explanation, index) in item.explanations" v-bind:key="index">
                                <p　class="p-modalBtn" @click="toggleModal(index)">{{ explanation.explanation }}</p>

                                <!-- explanation編集、削除時のmodal -->
                                <div class="p-modal" :class="{ 'is-open': isModalActive == index }">
                                    <div class="modal-mask">
                                        <div class="modal-main">
                                            <div class="modal-title">
                                                <i class="fa fa-times-circle-o" @click="toggleModalClose"></i>
                                                <h3>edit explanation</h3>
                                            </div>
                                            <div class="modal-input">
                                                <textarea type="text" name="editvalue" v-model="explanation.explanation"></textarea>
                                                <button name="editbutton" @click="editExplanation(explanation.id, explanation.explanation)"
                                                    class="button">Add</button>
                                                <button dusk="trash_explanation" @click="deleteExplanation(explanation.id)"
                                                    class="button">Delete</button>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <br />
            <div class="return-home">
                <router-link to="/quiz">Play Quiz</router-link>
                <router-link to="/">Home</router-link>
            </div>
            
        </div>
    </section>
</template>

<script>
export default {
  data: function () {
    return {
      items: [],
      addItemName: "",

      showButton: -1,
      explanations: [],
      addExplanationData: "",
      isModalActive: -1,
      isNewExpModalActive: false,
    }
  },

  created: function () {
    // ログイン認証
    axios.get('/api/authUser'
    ).then((response) => {
      if  (!response.data) {
        alert('ログインしてください');
        // AddNewItemsの画面が出る前にhomeに飛ばしたい
        location.href(this.$router.push("/"));
      };
    }).catch((response) => {
      console.log(response);
    })
    this.indexItems();
  },

  methods : {
    // アイテムの追加、編集、削除
    indexItems: function () {
      axios.get('/api/items'
      ).then((response) => {
        this.items = response.data;
      }).catch((response) => {
         console.log(response);
      })
    },

    addItem: function () {
      axios.post('/api/items',{
        user_id: 1,
        item_name: this.addItemName,
      }).then((response) => {
        this.indexItems();
        this.addItemName = "";
      }).catch((response) => {
        console.log(response);
      })
    },

    editItem: function (id, name) {
      axios.post('/api/items/' + id,{
        item_name: name,
      }).then((response) => {
        this.indexItems();
      }).catch((response) => {
        console.log(response);
      })
    },

    deleteItem: function (id) {
      axios.delete('/api/items/' + id)
      .then(() => {
        this.indexItems();
      }).catch((response) => {
        console.log(response);
      });
    },

    // アイテムに対する説明の追加、編集、削除

    addExplanation: function (item_id) {
      axios.post('/api/explanations',{
        item_id: item_id,
        explanation: this.addExplanationData,
      }).then((response) => {
        this.indexItems();
        this.addExplanationData = "";
        this.newExpToggleModal();
      }).catch((response) => {
        console.log(response);
      })
    },

    editExplanation: function (id, explanation) {
      axios.post('/api/explanations/' + id,{
        explanation: explanation,
      }).then((response) => {
        this.indexItems();
        this.toggleModalClose();
      }).catch((response) => {
        console.log(response);
      })
    },

    deleteExplanation: function (id) {
      axios.delete('/api/explanations/' + id)
      .then(() => {
        this.indexItems();
        this.toggleModalClose();
      }).catch((response) => {
        console.log(response);
      });
    },

    // toggleはこれが一番スマートだと思
    showExplanationsButton(index) {
      if (this.showButton == index) {
        this.showButton = -1;
      } else {
        this.showButton = index;
      }
    },

    toggleModal(index) {
      this.isModalActive = index;
    },

    toggleModalClose() {
      this.isModalActive = -1;
    },

    newExpToggleModal() {
      this.isNewExpModalActive = !this.isNewExpModalActive;
    }
  }
}
</script>
