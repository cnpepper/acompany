<template>
    <el-container>
        <el-main>
            <el-table :data="tableData" size="mini" border>
                <el-table-column prop="lead_no" label="编号" width="80" :render-header="renderHeader">
                </el-table-column>
                <el-table-column prop="date" label="名称" width="180" :render-header="renderHeader">
                </el-table-column>
                <el-table-column prop="date" label="来源" width="180" :render-header="renderHeader">
                </el-table-column>
                <el-table-column prop="date" label="等级" width="180" :render-header="renderHeader">
                </el-table-column>
                <el-table-column prop="name" label="负责人" width="180">
                </el-table-column>
                <el-table-column prop="name" label="电话" width="180">
                </el-table-column>
                <el-table-column prop="name" label="省" width="180">
                </el-table-column>
                <el-table-column prop="name" label="市" width="180">
                </el-table-column>
                <el-table-column prop="name" label="区" width="180">
                </el-table-column>
                <el-table-column prop="address" label="地址" width="180">
                </el-table-column>
                <el-table-column prop="name" label="更新时间" width="180">
                </el-table-column>
                <el-table-column prop="name" label="创建时间" width="180">
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
        data() {
            return {
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
                    },
                    {
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
                    },
                    {
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
                    },
                    {
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
                    },
                    {
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
                    }
                ],
                value:''
            }
        },
        methods: {
            renderHeader(h, {
                column,
                $index
            }) {
                return h(
                    'div', [
                        h('p', column.label),
                        h('el-select', {
                            attrs: {
                                size: 'mini'
                            },
                            props:{
                                // 解决v-modle要求参数的问题
                                value:this.value
                            },
                            on:{
                                'on-change':(event)=>{

                                }
                            }
                        })
                    ]
                )
            },
            createHeader(h, {
                column,
                $index
            }){
                /*let o = Array.apply(null,{length:1}).map(function(){
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
                })
                setTimeout(()=>{
                    return o[0]
                },1000)
*/
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
        }
    }
</script>

<style>

</style>