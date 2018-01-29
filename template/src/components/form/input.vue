<template>
    <fieldset class="form__row" :class="{'show-error': hasError}">
        <input :type="type" :name="name" :id="name" :class="{'filled': isFilled}" v-model="val" @input="updateValue($event.target.value)">
        <label :for="name" class="form__label">{{label}}</label>
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
    name: 'TextInput',
    props: {
      'type': String,
      'name': String,
      'label': String,
      'helper': {
        type: [String, Boolean],
        default: false
      },
      'has-error': Boolean,
      'error-msg': String,
    },
    data() {
      return {
        val: '',
      }
    },
    computed: {
      isFilled() {
        return !!this.val.trim().length;
      }
    },
    methods: {
      updateValue: function (value) {
        const formattedValue = value.trim();
        this.$emit('input', formattedValue)
      }
    },
  }
</script>
