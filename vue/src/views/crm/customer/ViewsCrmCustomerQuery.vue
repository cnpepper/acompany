<template>
  <query-layout>
    <template slot="header">
      <el-row :gutter="5">
        <el-col :span="3">
          <el-input size="mini" placeholder="公司名称"></el-input>
        </el-col>
        <el-col :span="3">
          <el-input size="mini" placeholder="联系电话"></el-input>
        </el-col>
        <el-col :span="3">
          <el-input size="mini" placeholder="卖家账号"></el-input>
        </el-col>
        <el-col :span="2">
          <el-select size="mini" v-model="selectValue" placeholder="请选择">
            <el-option v-for="item in options" :key="item.value" :label="item.label" :value="item.value">
            </el-option>
          </el-select>
        </el-col>
        <el-col :span="10">
          <el-date-picker size="mini" v-model="dateTime" type="datetimerange" :picker-options="pickerOptions"
            range-separator="至" start-placeholder="开始日期" end-placeholder="结束日期" align="right">
          </el-date-picker>
        </el-col>
        <el-col :span="3">
          <el-button-group>
            <el-button size="mini" type="primary" icon="el-icon-search">搜索</el-button>
            <el-button size="mini" type="primary" icon="el-icon-more"></el-button>
          </el-button-group>
        </el-col>
      </el-row>
    </template>
    <template>
      <el-table size="mini" :data="tableData" border style="width: 100%">
        <el-table-column prop="date" label="日期" width="180">
        </el-table-column>
        <el-table-column prop="name" label="姓名" width="180">
        </el-table-column>
        <el-table-column prop="address" label="地址">
        </el-table-column>
      </el-table>
    </template>
    <template slot="footer">
      <el-pagination 
        @size-change="handleSizeChange" 
        @current-change="handleCurrentChange" 
        :page-sizes="[100, 200, 300, 400]" :page-size="100" layout="total, sizes, prev, pager, next, jumper" :total="400">
      </el-pagination>
    </template>
  </query-layout>
</template>

<script>
  import QueryLayout from "@/layouts/QueryLayout"
  export default {
    components: {
      QueryLayout
    },
    data() {
      return {
        dateTime: '',
        selectValue: '',
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
        options: [{
          value: '选项1',
          label: '黄金糕'
        }, {
          value: '选项2',
          label: '双皮奶'
        }, {
          value: '选项3',
          label: '蚵仔煎'
        }, {
          value: '选项4',
          label: '龙须面'
        }, {
          value: '选项5',
          label: '北京烤鸭'
        }],
        pickerOptions: {
          shortcuts: [{
            text: '最近一周',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近一个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近三个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        }
      }
    },
    methods:{
      handleSizeChange(val) {
        console.log(`每页 ${val} 条`);
      },
      handleCurrentChange(val) {
        console.log(`当前页: ${val}`);
      }
    }
  }
</script>

<style>

</style>