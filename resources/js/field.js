Nova.booting(Vue => {
    Vue.component('index-nova-hidden-field', require('./components/IndexField'));
    Vue.component('detail-nova-hidden-field', require('./components/DetailField'));
    Vue.component('form-nova-hidden-field', require('./components/FormField'));
});
