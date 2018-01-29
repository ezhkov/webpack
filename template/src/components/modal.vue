<template>
    <div class="fs-modal">
        <a href="#" class="fs-modal-close" @click.prevent="closeModal"></a>
        <div class="wrapper">
            <div class="fs-modal-scroller">
                <div class="fs-modal-content">
                    <component :is="comp" :page-data="pageData"></component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';
  import Vue from 'vue';

  import Bus from '../bus';

  Vue.component('abstract', function (resolve) { require(['./popups/abstractPopup.vue'], resolve) });

  export default {
    props: ['comp', 'page-data'],
    methods: {
      closeModal() {
        this.pageData.isModalVisible = false;
      }
    },
    data() {
      return {

      }
    },
    mounted() {
      Bus.$on('modal-close', this.closeModal);
    }
  }
</script>

<style lang="scss">

</style>
