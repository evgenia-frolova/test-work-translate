<div id="app">
    <table class="table">
        <tr v-for="item in items" :key="item.id" class="list-group-item">
            <td>{{ item.name }}</td>
            <td>{{ item.phone }}</td>
            <td>{{ item.language }}</td>
        </tr>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<?php

// Регистрация Vue приложения
$this->registerJs(<<<JS
    var app = new Vue({
        el: '#app',
        data: {
            title: 'Список переводчиков',
            items: $itemsJson  // Данные
        },
    });
        console.log(items);
JS, yii\web\View::POS_END);