<template>
<div class="uk-container">
    <div class="uk-section-xsmall">
        <router-link to="/addItems"  class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">add Items</router-link>
        <div class="uk-card uk-card-default uk-border-rounded">
            <div class="uk-card-header">

                <!-- タイトル -->
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand uk-text-center">
                        <h3 class="uk-card-title uk-margin-remove-bottom">How am I ?</h3>
                        <p class="uk-text-meta uk-margin-remove">score: 100</p>
                        <p class="uk-text-meta uk-margin-remove">total score: 1000</p>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="10" max="100"></progress>

            </div>
            <div class="uk-card-body">
                <p>・Explanations</p>
                <ul class="uk-list　uk-list-divider">
                    <li>
                        あ
                    </li>
                    <li>
                        い
                    </li>
                </ul>
                <button class="uk-button uk-button-primary uk-margin-remove-bottom uk-width-1-1 uk-margin-small-bottom">Add explanations</button>
                <hr>
                <div class="uk-child-width-1-2 uk-text-center uk-grid-small " uk-grid>
                    <div>
                        <button class="uk-button uk-button-default uk-width-1-1">Button</button>
                    </div>
                  　<div>
                        <button class="uk-button uk-button-default uk-width-1-1">Button</button>
                    </div>
                </div>
                <div class="uk-child-width-1-2 uk-text-center uk-grid-small" uk-grid>
                    <div>
                        <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Button</button>
                    </div>
                  　<div>
                        <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Button</button>
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
</script>
