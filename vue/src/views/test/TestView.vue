<template>
  <div>
    <div>
      <p>动画</p>
      <div class="action"></div>
    </div>
    <div>
      <p>右键菜单</p>
      <div>
        <ul class="crm-comtextmenu">
          <li>审核</li>
          <li>驳回</li>
          <li>取消</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>

.crm-comtextmenu{
  list-style-type: none;
  border: 1px solid black;
  width:100px;
}
.crm-comtextmenu li{
  border: 1px solid black;
}
.action {
  width: 100px;
  height: 100px;
  background: red;
  position: relative;
  animation: mymove 5s infinite;
  -webkit-animation: mymove 5s infinite; /* Safari and Chrome */
}
@keyframes mymove {
  0% {
    top: 0px;
    left: 0px;
    background: red;
  }
  25% {
    top: 0px;
    left: 100px;
    background: blue;
  }
  50% {
    top: 100px;
    left: 100px;
    background: yellow;
  }
  75% {
    top: 100px;
    left: 0px;
    background: green;
  }
  100% {
    top: 0px;
    left: 0px;
    background: red;
  }
}

@-webkit-keyframes mymove /* Safari and Chrome */ {
  0% {
    top: 0px;
    left: 0px;
    background: red;
  }
  25% {
    top: 0px;
    left: 100px;
    background: blue;
  }
  50% {
    top: 100px;
    left: 100px;
    background: yellow;
  }
  75% {
    top: 100px;
    left: 0px;
    background: green;
  }
  100% {
    top: 0px;
    left: 0px;
    background: red;
  }
}
</style>