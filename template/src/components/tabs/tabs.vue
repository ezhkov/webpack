<template>
    <div>
        <div class="tabs-cnt" data-tabs-list>
            <div class="tabs__list" :class="{'tabs__list--centered': isCentered}" data-tabs data-target="_info_">
                <a class="tabs__item"
                    v-for="tab in tabs"
                    :href="tab.href"
                    :class="{'active': tab.isActive}"
                    @click.prevent="selectTab(tab)"
                    data-tabs-trigger>{{ tab.name }}</a>
            </div>
        </div>
        <div class="tabs__content" data-tabs-content>
            <slot></slot>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      'is-centered': { default: false }
    },
    data() {
      return { tabs: [] };
    },
    created() {
      this.tabs = this.$children;
    },

    methods: {
      selectTab(selectedTab) {
        this.tabs.forEach(tab => {
          tab.isActive = (tab.href === selectedTab.href);
        });
      }
    }
  }
</script>

<style lang="scss" scoped>
    [data-tabs-content] {
        position: relative;
        transition: height 0.4s;
        overflow: hidden;
        + [data-tabs-list] {
            margin-top: 100px;
        }
        [data-tabs-pane] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
            &.active {
                opacity: 1;
                visibility: visible;
                position: static;
            }
            .text, .styled {
                padding-top: 3.2rem;
                padding-bottom: 3.2rem;
            }
        }
    }

    .tabs-cnt {
        position: relative;
    }

    .tabs__list {
        box-shadow: inset 0 -2px 0 0 rgba(#A0A0A0, 0.24);
    }

    .tabs__list--centered {
        text-align: center;
        .tabs__item:last-child {
            margin-right: 0;
        }
    }

    .tabs__item {
        font-size: 16px;
        text-transform: uppercase;
        margin-right: 2.4rem;
        padding-bottom: 1.6rem;
        box-shadow: inset 0 -4px 0 0 transparent;
        transition: box-shadow 0.3s;
        display: inline-block;
        &.active {
            box-shadow: inset 0 -4px 0 0 #F36C21;
            &:hover {
                box-shadow: inset 0 -4px 0 0 #F36C21;
            }
        }
        &:hover {
            box-shadow: inset 0 -4px 0 0 rgba(#F36C21, 0.2);
        }
    }
</style>
