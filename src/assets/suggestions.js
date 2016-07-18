$("#party").suggestions({
    serviceUrl: "https://suggestions.dadata.ru/suggestions/api/4_1/rs",
    token: "078ee013b788b4bdd78ff77f5f45015e1febd530",
    type: "PARTY",
    count: 5,
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
        console.log(suggestion);
    }
});