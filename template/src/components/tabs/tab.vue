<template>
    <div class="tabs__pane" :class="{'active': isActive}" data-tabs-pane v-bind:key="name">
        <slot></slot>
    </div>
</template>

<script>
  export default {
    props: {
      name: { required: true },
      selected: { default: false },
    },
    data() {
      return {
        isActive: false,
      };
    },
    computed: {
      href() {
        return '#' + this.name.toLowerCase().replace(/ /g, '-');
      }
    },
    methods: {
      beforeLeave(el) {
        console.log(['Before Leave', el]);
      },
      beforeEnter(el) {
        console.log(['Before Enter', el]);
      },
      afterLeave(el) {
        console.log(el);
      }
    },
    mounted() {
      this.isActive = this.selected;
    },
  }
</script>
<style>

</style>
