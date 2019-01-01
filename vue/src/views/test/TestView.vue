<template>
  <div>
    <div>
      <p>动画</p>
      <div class="action"></div>
    </div>
    <div>
      <p>右键菜单</p>
      <div class="crm-postion" :style="{top:position_y+'px',left:position_x+'px'}">
        <ul class="crm-comtextmenu">
          <li>审核</li>
          <li>驳回</li>
          <li>取消</li>
        </ul>
      </div>
    </div>
    <div>
      <el-table :data="tableData" style="width: 100%" @row-contextmenu="HandleContextmenu">
        <el-table-column prop="date" label="日期" width="180"></el-table-column>
        <el-table-column prop="name" label="姓名" width="180"></el-table-column>
        <el-table-column prop="address" label="地址"></el-table-column>
      </el-table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      position_x:0,
      position_y:0,
      tableData: [
        {
          date: "2016-05-02",
          name: "王小虎",
          address: "上海市普陀区金沙江路 1518 弄"
        },
        {
          date: "2016-05-04",
          name: "王小虎",
          address: "上海市普陀区金沙江路 1517 弄"
        },
        {
          date: "2016-05-01",
          name: "王小虎",
          address: "上海市普陀区金沙江路 1519 弄"
        },
        {
          date: "2016-05-03",
          name: "王小虎",
          address: "上海市普陀区金沙江路 1516 弄"
        }
      ]
    };
  },
  methods:{
    HandleContextmenu(row,event){
      console.log(row)
      console.log(event)
      console.log(event.x)
      console.log(event.y)
      this.position_x = event.x
      this.position_y = event.y
    },
    setPosition(){

    }
  }
};
</script>

<style lang="scss" scoped>
.crm-comtextmenu {
  list-style-type: none;
  width: 100px;
  margin: 0px;
  padding: 0px;
}
.crm-comtextmenu li {
  border: 1px solid black;
}

.crm-postion {
  position: absolute;
  z-index: 1000;
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