<template>
    <fieldset class="form__row" :class="{'show-error': hasError}">
        <div class="form-checkbox">
            <input type="checkbox" :name="name" :id="name" v-model="val" @change="updateValue($event.target.checked)">
            <label :for="name">{{label}}</label>
        </div>
        <div class="input__helper">
            <slot></slot>
        </div>
        <transition name="scaleup">
            <div class="input__error" v-show="hasError">{{ errorMsg }}</div>
        </transition>
    </fieldset>
</template>

<style lang="scss"></style>

<script>
  export default {
    name: 'Checkbox',
    props: {
      'name': String,
      'label': String,
      'helper': {
        type: [String, Boolean],
        default: false
      },
      'has-error': Boolean,
      'error-msg': String
    },
    data() {
      return {
        val: false,
      }
    },
    computed: {

    },
    methods: {
      updateValue: function (value) {
        console.log(value);
        this.$emit('input', value ? value : '');
      }
    },
  }
</script>