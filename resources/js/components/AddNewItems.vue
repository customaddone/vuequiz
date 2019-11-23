<template>
    <div class="uk-container">
        <div class="uk-section-xsmall">
            <div class="uk-card uk-card-default uk-border-rounded">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Laravel</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <!--  アイテムの追加 -->
                    <input name="addvalue" class="uk-input uk-width-2-3"　type="text"
                        v-model="addItemName" placeholder="・Add item name">
                    <button name="addbutton" @click="addItem" class="uk-button
                        uk-button-primary uk-float-right uk-border-rounded">ADD</button>
                </div>
                <div class="uk-grid-small uk-margin-bottom" uk-grid>
                  <div class="uk-width-expand" uk-leader>... Items List</div>
                  <div>{{ items.length }} items</div>
                </div>
                <div>
                    <ul class="uk-list uk-list-striped" uk-accordion>
                        <li v-for="(item, index) in items" v-bind:key="index">
                            <!--  アイテムの削除 -->
                            <button dusk="trash" @click="deleteItem(item.id)" uk-icon="icon: trash; ratio: 1.5"
                                class="uk-margin-left uk-logo uk-float-right"></button>
                            <!--  アイテムの編集 -->
                            <button dusk="edit"  uk-toggle="target: #item-edit"　uk-icon="icon: pencil; ratio: 1.5"
                                class="uk-margin-left uk-logo uk-float-right"></button>
                            <div class="modal" id="item-edit" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <h2 class="uk-modal-title">Edit</h2>
                                    <p class="uk-text-right">
                                        <input name="editvalue" class="uk-input uk-width-expand uk-margin-bottom"　type="text"
                                            v-model="item.item_name">
                                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                        <button name="editbutton"　@click="editItem(item.id, item.item_name)"
                                            class="uk-button uk-button-primary uk-modal-close" type="button">Save</button>
                                    </p>
                                </div>
                            </div>
                            <!-- アイテムの表示 -->
                            <a class="uk-accordion-title" href="#">・{{ item.item_name }}</a>
                            <div class="uk-accordion-content">
                                <p>Explanations</p>
                            </div>
                        </li>
                    </ul>
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
      addItemName: "",
    }
  },

  mounted: function () {
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
  }
}
</script>
