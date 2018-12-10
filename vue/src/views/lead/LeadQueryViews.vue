<template>
    <el-container>
        <el-main>
            <el-table :data="tableData" size="mini" border>
                <el-table-column prop="lead_no" label="编号" width="120">
                </el-table-column>
                <el-table-column prop="lead_name" label="名称" width="120" :render-header="renderHeader">
                </el-table-column>
                <el-table-column prop="lead_origin" label="来源" width="80">
                </el-table-column>
                <el-table-column prop="lead_leavel" label="等级" width="80">
                </el-table-column>
                <el-table-column prop="lead_concat" label="负责人" width="80">
                </el-table-column>
                <el-table-column prop="mobile" label="手机" width="100">
                </el-table-column>
                <el-table-column prop="telphone" label="电话" width="100">
                </el-table-column>
                <el-table-column prop="privoce" label="省" width="60">
                </el-table-column>
                <el-table-column prop="city" label="市" width="60">
                </el-table-column>
                <el-table-column prop="distance" label="区" width="60">
                </el-table-column>
                <el-table-column prop="address" label="地址" width="280">
                </el-table-column>
                <el-table-column prop="modified" label="更新时间" width="100">
                </el-table-column>
                <el-table-column prop="created" label="创建时间" width="100">
                </el-table-column>
            </el-table>
            <el-pagination :page-sizes="[100, 200, 300, 400]" :page-size="100" layout="total, sizes, prev, pager, next, jumper"
                :total="400">
            </el-pagination>
        </el-main>
    </el-container>
</template>

<script>
    export default {
        methods: {
            renderHeader(h, {
                column,
                $index
            }) {
                return h(
                    'el-row',{
                        style:{
                            display:'grid',
                            lineheight:'auth',
                            padding:'0px',
                            overflow:'unset'
                        }
                    },[
                        h('el-row', [h('el-col',column.label)]),
                        h('el-row', [
                            h('el-select', {
                                style:{
                                    width:'100px'
                                },
                                attrs: {
                                    
                                    size: 'mini'
                                },
                                props: {
                                    // 解决v-modle要求参数的问题
                                    value: this.value
                                },
                                on: {
                                    'on-change': (event) => {

                                    }
                                }
                            })
                        ])
                    ]
                )
            },
            createHeader(h, {
                column,
                $index
            }) {
                return h(
                    'div', [
                        h('p', column.label),
                        h('el-select', {
                            attrs: {
                                size: 'mini'
                            }
                        })
                    ]
                )
            },
            renderHeader2(h, {
                column,
                $index
            }) {
                return h(
                    'div', [
                        h('p', column.label),
                        h('el-select', {
                            attrs: {
                                size: 'mini'
                            }
                        })
                    ]
                )
            }
        },
        data() {
            return {
                tableData: [{
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, {
                    lead_no: 'LD201801010001',
                    lead_name: '刘大爷养生公司',
                    lead_origin: '官网',
                    lead_leavel: '标杆',
                    lead_concat: '刘大爷',
                    mobile: '18899990000',
                    telphone: '010-1234567',
                    privoce: '北京',
                    city: '北京市',
                    distance: '海淀区',
                    address: '上海市普陀区金沙江路 1518 弄',
                    modified: '2016-05-02',
                    created: '2016-05-02'
                }, ],
                value: ''
            }
        }
    }
</script>

<style>

</style>