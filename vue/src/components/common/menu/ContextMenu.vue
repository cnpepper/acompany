<template>
  <ul
    ref="contextmenu"
    :class="contextmenuCls"
    v-show="visible"
    :style="style">
    <slot></slot>
  </ul>
</template>

<script>
  export default {
    name: 'VContextmenu',
    provide () {
      return {
        $$contextmenu: this,
      }
    },
    props: {
      eventType: {
        type: String,
        default: 'contextmenu',
      },
      theme: {
        type: String,
        default: 'default',
      },
      autoPlacement: {
        type: Boolean,
        default: true,
      },
      disabled: Boolean,
    },
    data () {
      return {
        visible: false,
        references: [],
        style: {
          top: 0,
          left: 0,
        },
      }
    },
    computed: {
      clickOutsideHandler () {
        return this.visible ? this.hide : () => {}
      },
      isClick () {
        return this.eventType === 'click'
      },
      contextmenuCls () {
        return [
          'v-contextmenu',
          `v-contextmenu--${this.theme}`,
        ]
      },
    },
    watch: {
      visible (value) {
        if (value) {
          this.$emit('show', this)
          document.body.addEventListener('click', this.handleBodyClick)
        } else {
          this.$emit('hide', this)
          document.body.removeEventListener('click', this.handleBodyClick)
        }
      },
    },
    mounted () {
      document.body.appendChild(this.$el)
      if (window.$$VContextmenu) {
        window.$$VContextmenu[this.$contextmenuId] = this
      } else {
        window.$$VContextmenu = { [this.$contextmenuId]: this }
      }
    },
    beforeDestroy () {
      document.body.removeChild(this.$el)
      delete window.$$VContextmenu[this.$contextmenuId]
      this.references.forEach((ref) => {
        ref.el.removeEventListener(this.eventType, this.handleReferenceContextmenu)
      })
      document.body.removeEventListener('click', this.handleBodyClick)
    },
    methods: {
      addRef (ref) {
        // FIXME: 如何处理 removeRef？
        this.references.push(ref)
        ref.el.addEventListener(this.eventType, this.handleReferenceContextmenu)
      },
      handleReferenceContextmenu (event) {
        event.preventDefault()
        if (this.disabled) return
        const reference = this.references.find(ref => ref.el.contains(event.target))
        this.$emit('contextmenu', reference ? reference.vnode : null)
        const eventX = event.pageX
        const eventY = event.pageY
        this.show()
        this.$nextTick(() => {
          const contextmenuPosition = {
            top: eventY,
            left: eventX,
          }
          if (this.autoPlacement) {
            const contextmenuWidth = this.$refs.contextmenu.clientWidth
            const contextmenuHeight = this.$refs.contextmenu.clientHeight
            if (contextmenuHeight + eventY >= window.innerHeight) {
              contextmenuPosition.top -= contextmenuHeight
            }
            if (contextmenuWidth + eventX >= window.innerWidth) {
              contextmenuPosition.left -= contextmenuWidth
            }
          }
          this.style = {
            top: `${contextmenuPosition.top}px`,
            left: `${contextmenuPosition.left}px`,
          }
        })
      },
      handleBodyClick (event) {
        const notOutside = this.$el.contains(event.target) || (
          this.isClick && this.references.some(ref => ref.el.contains(event.target))
        )
        if (!notOutside) {
          this.visible = false
        }
      },
      show (position) {
        Object.keys(window.$$VContextmenu)
          .forEach((key) => {
            if (key !== this.$contextmenuId) {
              window.$$VContextmenu[key].hide()
            }
          })
        if (position) {
          this.style = {
            top: `${position.top}px`,
            left: `${position.left}px`,
          }
        }
        this.visible = true
      },
      hide () {
        this.visible = false
      },
      hideAll () {
        Object.keys(window.$$VContextmenu)
          .forEach((key) => {
            window.$$VContextmenu[key].hide()
          })
      },
    },
  }
</script>

<style lang="sass">

active-color = #46a0fc
border-color = #e8e8e8
shadow-color = rgba(150, 150, 150, 0.2)
padding-vertical = 5px
contextmenu-item-padding-horizonal = 14px

active-color-bright = #ef5350
active-color-dark = #2d3035;

.v-contextmenu{
  position: absolute;
  padding: padding-vertical 0;
  margin: 0;
  background-color: #fff;
  border: 1px solid border-color;
  border-radius: 4px;
  box-shadow: 2px 2px 8px 0px shadow-color;
  list-style: none;
  font-size: 14px;
  white-space: nowrap;
  cursor: pointer;
  z-index: 2800;
  -webkit-tap-highlight-color: transparent;
}
  .v-contextmenu-item
    padding: padding-vertical contextmenu-item-padding-horizonal
    line-height: 1
    color: #333

    &.v-contextmenu-item--hover
      color: #fff

    &.v-contextmenu-item--disabled
      color: #ccc
      cursor: not-allowed

  .v-contextmenu-divider
    height: 0
    margin: padding-vertical 0
    border-bottom: 1px solid border-color

  .v-contextmenu-group__menus
    padding: 0 5px
    margin: 0
    list-style: none

    .v-contextmenu-item
      display: inline-block
      padding: padding-vertical (contextmenu-item-padding-horizonal - 5)

  .v-contextmenu-submenu
    position: relative

    & > .v-contextmenu
      position: absolute

      &.left
        left: 0
        transform: translateX(-100%)

      &.right
        right: 0
        transform: translateX(100%)

      &.top
        top: -(padding-vertical) - 1

      &.bottom
        bottom: -(padding-vertical) - 1

    .v-contextmenu-submenu__title
      margin-right: padding-vertical * 2

    .v-contextmenu-submenu__icon
      position: absolute
      right: padding-vertical

      &::before
        content: "\e622"

.v-contextmenu--default
  .v-contextmenu-item--hover
    background-color: active-color

.v-contextmenu--bright
  .v-contextmenu-item--hover
    background-color: active-color-bright

.v-contextmenu--dark
  .v-contextmenu-item--hover
    background-color: active-color-dark

</style>

