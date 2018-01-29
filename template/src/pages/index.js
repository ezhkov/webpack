import Vue from 'vue';
import Page from '../mixins/page';

export default Vue.component('page', {
  data() {
    return {
      isDropdownVisible: false,
      filter: '-1',
      filterValues: [
        {
          val: '-1',
          text: 'Все',
        },
        {
          val: '0',
          text: 'Активные',
        },
        {
          val: '1',
          text: 'Неактивные',
        },
        {
          val: '2',
          text: 'Архив',
        },
        {
          val: '3',
          text: 'Черновики',
        },
      ],
    };
  },
  computed: {
    getSelected() {
      return this.filterValues.filter(elem => elem.val === this.filter)[0].text;
    },
  },
  methods: {
    toggleDropdown() {
      this.isDropdownVisible = !this.isDropdownVisible;
    },
    hideDropdown() {
      this.isDropdownVisible = false;
    },
    setFilter(val) {
      this.filter = val;
    },
  },
  mixins: [Page],
});
