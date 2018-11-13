<template>
    <el-container>
        <el-header style="height:38px;padding:5px;">
            <el-row :gutter="5">
                <el-col :span="4">
                    <el-input size="mini" placeholder="公司名称" />
                </el-col>
                <el-col :span="4">
                    <el-input size="mini" placeholder="卖家账号" />
                </el-col>
                <el-col :span="4">
                    <el-input size="mini" placeholder="电话号码" />
                </el-col>
                <el-col :span="4">
                    <el-input size="mini" placeholder="所有者" />
                </el-col>
                <el-col :span="4">
                    <el-input size="mini" placeholder="所有者" />
                </el-col>
                <el-col :span="4">
                    <el-button-group>
                        <el-button size="mini" icon="el-icon-search">查询</el-button>
                        <el-popover width="500" placement="bottom" trigger="click">
                            <el-form size="mini" ref="form" :model="form" label-width="80px">
                                <el-form-item label="活动名称">
                                    <el-input v-model="form.name"></el-input>
                                </el-form-item>
                                <el-form-item label="活动区域">
                                    <el-select v-model="form.region" placeholder="请选择活动区域">
                                        <el-option label="区域一" value="shanghai"></el-option>
                                        <el-option label="区域二" value="beijing"></el-option>
                                    </el-select>
                                </el-form-item>
                                <el-form-item label="活动时间">
                                    <el-col :span="11">
                                        <el-date-picker type="date" placeholder="选择日期" v-model="form.date1" style="width: 100%;"></el-date-picker>
                                    </el-col>
                                    <el-col class="line" :span="2">-</el-col>
                                    <el-col :span="11">
                                        <el-time-picker type="fixed-time" placeholder="选择时间" v-model="form.date2" style="width: 100%;"></el-time-picker>
                                    </el-col>
                                </el-form-item>
                                <el-form-item label="即时配送">
                                    <el-switch v-model="form.delivery"></el-switch>
                                </el-form-item>
                                <el-form-item label="活动性质">
                                    <el-checkbox-group v-model="form.type">
                                        <el-checkbox label="美食/餐厅线上活动" name="type"></el-checkbox>
                                        <el-checkbox label="地推活动" name="type"></el-checkbox>
                                        <el-checkbox label="线下主题活动" name="type"></el-checkbox>
                                        <el-checkbox label="单纯品牌曝光" name="type"></el-checkbox>
                                    </el-checkbox-group>
                                </el-form-item>
                                <el-form-item label="特殊资源">
                                    <el-radio-group v-model="form.resource">
                                        <el-radio label="线上品牌商赞助"></el-radio>
                                        <el-radio label="线下场地免费"></el-radio>
                                    </el-radio-group>
                                </el-form-item>
                                <el-form-item label="活动形式">
                                    <el-input type="textarea" v-model="form.desc"></el-input>
                                </el-form-item>
                                <el-form-item>
                                    <el-button type="primary" @click="onSubmit">立即创建</el-button>
                                    <el-button>取消</el-button>
                                </el-form-item>
                            </el-form>
                            <el-button size="mini" icon="el-icon-arrow-down" slot="reference"></el-button>
                        </el-popover>
                    </el-button-group>
                </el-col>
            </el-row>
        </el-header>
        <el-main style="padding:5px;">
            <el-container>
                <el-main style="padding:0;">
                    <el-table :data="tableData" border size="mini" style="width: 100%">
                        <el-table-column label="姓名" width="180">
                            <template slot-scope="scope">
                                <el-button size="mini" @click="visible = true">{{ scope.row.name }}</el-button>
                            </template>
                        </el-table-column>
                        <el-table-column prop="date" label="日期" width="180">
                        </el-table-column>
                        <el-table-column prop="address" label="地址">
                        </el-table-column>
                    </el-table>
                </el-main>
            </el-container>
            <el-row>
                <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange" :current-page="currentPage4"
                    :page-sizes="[100, 200, 300, 400]" :page-size="100" layout="total, sizes, prev, pager, next, jumper"
                    :total="400">
                </el-pagination>
            </el-row>
        </el-main>
        <el-footer style="height:20px;">
        </el-footer>
        <div class="customer-details" v-if="visible">
            <el-card class="box-card" shadow="never">
                <el-row slot="header">
                    <span style="float:right">客户详情</span>
                    <el-button @click="visible = false" style="padding: 3px" type="text">关闭</el-button>
                </el-row>
                <el-container>
                    <el-main style="padding:0;">
                        <el-row>
                            <el-table :data="tableData" border size="mini" style="width: 100%" :show-header="false">
                                <el-table-column prop="name" label="姓名" width="180">
                                </el-table-column>
                                <el-table-column prop="date" label="日期" width="180">
                                </el-table-column>
                                <el-table-column prop="address" label="地址">
                                </el-table-column>
                            </el-table>
                        </el-row>
                    </el-main>
                </el-container>
            </el-card>
        </div>
    </el-container>
</template>

<script>
    export default {
        data() {
            return {
                visible: false,
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
                }, {
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
                form: {
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    type: [],
                    resource: '',
                    desc: ''
                }
            }
        },
        methods: {
            onSubmit() {
                console.log('submit!');
            }
        }
    }
</script>

<style>
    .customer-details {
        width: 800px;
        height: 500px;
        top: 43px;
        right: 0px;
        position: absolute;
        z-index: 100;
    }
</style>