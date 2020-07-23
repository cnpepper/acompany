<template>
  <div>

    <el-row>
      <el-button>新建</el-button>
    </el-row>
    <el-divider />
    <el-tag
      v-for="(tag,index) in tags"
      :key="tag.name"
      :type="tag.type"
      @click.native="ClickHandle(index)"
    >
      {{ tag.name }}
    </el-tag>
    <el-table
      :data="tableData"
      style="width: 100%"
      stripe
      border
    >
      <el-table-column
        type="selection"
        width="55"
      />
      <el-table-column
        prop="date"
        label="日期"
        width="180"
      >
        <template
          slot="header"
          slot-scope="scope"
        >
          <el-row>
            <el-col :span="20">
              {{ scope.column.label }}
            </el-col>
            <el-col :span="4">
              <el-popover v-model="visible">
                <el-date-picker
                  v-model="searchForm.date"
                  type="daterange"
                  range-separator="至"
                  start-placeholder="开始日期"
                  end-placeholder="结束日期"
                />
                <div style="text-align: right; margin: 0">
                  <el-button
                    size="mini"
                    type="text"
                    @click="visible = false"
                  >关闭</el-button>
                  <el-button
                    type="primary"
                    size="mini"
                    @click="visible = false"
                  >查询</el-button>
                </div>
                <el-link slot="reference">
                  <i class="el-icon-search" />
                </el-link>
              </el-popover>

            </el-col>
          </el-row>

        </template>

      </el-table-column>
      <el-table-column
        prop="name"
        label="姓名"
        width="180"
      />
      <el-table-column
        label="操作"
        width="180"
      >
        <template slot-scope="scope">
          <el-button
            size="mini"
            @click="handleEdit(scope.$index, scope.row)"
          >编辑</el-button>
          <el-button
            size="mini"
            type="danger"
            @click="handleDelete(scope.$index, scope.row)"
          >删除</el-button>
        </template>
      </el-table-column>
    </el-table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      visible: false,
      searchForm: {},
      activeName: 'second',
      tableData: [{
        date: '2016-05-02',
        name: '王小虎',
        address: '上海市普陀区金沙江路 1518 弄'
      }, {
        date: '2016-05-04',
        name: '王小虎',
        address: '上海市普陀区金沙江路 1517 弄'
      }, {
        date: '2016-05-01',
        name: '王小虎',
        address: '上海市普陀区金沙江路 1519 弄'
      }, {
        date: '2016-05-03',
        name: '王小虎',
        address: '上海市普陀区金沙江路 1516 弄'
      }],
      tags: [
        { name: '全部', type: '', form: {
          no: 1
        }},
        { name: '待分配', type: '', form: {
          no: 2
        }},
        { name: '待处理', type: '', form: {
          no: 3
        }},
        { name: '处理中', type: '', form: {
          no: 4
        }},
        { name: '待确认解决', type: '', form: {
          no: 5
        }}, { name: '已完成', type: '', form: {
          no: 5
        }}, { name: '已取消', type: '', form: {
          no: 5
        }}
      ]
    }
  },
  methods: {
    ClickHandle(index) {
      this.tags.forEach(function(item, index) {
        item.type = ''
      })
      this.tags[index].type = 'success'
    },
    test(val) {
      console.log(val.column.label)
    },
    test2() {
      console.log('查询')
    }
  }
}
</script>
