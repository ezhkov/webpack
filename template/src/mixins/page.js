import Vue from 'vue';
import axios from 'axios';
import { SweetModal, SweetModalTab } from 'sweet-modal-vue';
import SiteHeader from '../components/header.vue';
import SiteBody from '../components/body.vue';
import SiteFooter from '../components/footer.vue';
import Modal from '../components/modal.vue';
import Tabs from '../components/tabs';
import Bus from '../bus';

export default {
  data() {
    return {
      pageData: window.GELIOS,
      modalComponent: window.GELIOS.isSearchActive ? 'search' : 'auth',
      // modalComponent: 'record',
    };
  },
  methods: {
    showModal(name, params) {
      if (params) {
        this.pageData.extra = params;
      }
      this.modalComponent = name;
      this.pageData.isModalVisible = true;
    },
    showMessage(ref) {
      this.$refs[ref].open();
    },
    beforeEnter() {
      document.body.classList.add('show-fs-modal');
    },
    afterLeave() {
      document.body.classList.remove('show-fs-modal');
    },
    toggleRecordPopup() {
      this.showModal('record');
    },
  },
  components: {
    SiteHeader,
    SiteBody,
    SiteFooter,
    Modal,
    SweetModal,
    SweetModalTab,
    ...Tabs,
  },
  mounted() {
    Bus.$on('show-message', this.showMessage);
  },
};
