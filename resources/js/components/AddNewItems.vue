<template>
    <section class="add_items">
    </section>
</template>

<script>
export default {
  data: function () {
    return {
      items: [],
      addItemName: "",

      explanations: [],
      addExplanationData: "",
    }
  },

  mounted: function () {
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
    indexExplanations: function () {
      axios.get('/api/explanations'
      ).then((response) => {
        this.explanations = response.data;
      }).catch((response) => {
         console.log(response);
      })
    },

    addExplanation: function (item_id) {
      axios.post('/api/explanations',{
        item_id: item_id,
        explanation: this.addExplanationData,
      }).then((response) => {
        this.indexItems();
        this.addExplanationData = "";
      }).catch((response) => {
        console.log(response);
      })
    },

    editExplanation: function (id, explanation) {
      axios.post('/api/explanations/' + id,{
        explanation: explanation,
      }).then((response) => {
        this.indexItems();
      }).catch((response) => {
        console.log(response);
      })
    },

    deleteExplanation: function (id) {
      axios.delete('/api/explanations/' + id)
      .then(() => {
        this.indexItems();
      }).catch((response) => {
        console.log(response);
      });
    },
  }
}
</script>
