import Vue from 'vue';
import VeeValidate from 'vee-validate';

require('./css/main.scss');

const Page = require(`bundle-loader!./pages/${document.body.getAttribute('data-page')}`);

const dictionary = {
  ru: {
    messages: {
      required: () => 'Поле обязательно для заполнения',
      email: () => 'Неверный формат Email',
      numeric: () => 'Введите только цифры',
      digits: (name, criteria) => `Введите не больше ${criteria} цифр`,
      confirmed: () => 'Значения полей не совпадают',
    },
    custom: {
      patient_phone: {
        regex: () => 'Поле заполнено некорректно',
      },
      payer_phone: {
        regex: () => 'Поле заполнено некорректно',
      },
      payer_passnum: {
        regex: () => 'Поле заполнено некорректно',
      },
    },
    dateFormat: 'YYYY-MM-DD',
  },
};

Vue.use(VeeValidate, { locale: 'ru', dictionary, events: 'input|blur|change' });

new Vue({
  el: '#app',
  components: {
    Page,
  },
});
