<template>
    <div>
        <el-container>
            <el-header>
                <el-button>新建线索</el-button>
            </el-header>
            <el-main>
                <el-tabs v-model="activeName" @tab-click="handleClick">
                    <el-tab-pane label="3天未跟进" name="first"></el-tab-pane>
                    <el-tab-pane label="配置管理" name="second"></el-tab-pane>
                    <el-tab-pane label="角色管理" name="third"></el-tab-pane>
                    <el-tab-pane label="定时任务补偿" name="fourth"></el-tab-pane>
                </el-tabs>
                <el-table :data="tableData" size="mini" border @row-contextmenu="ContextMenuHandle">
                    <el-table-column prop="lead_no" label="编号" width="120">
                    </el-table-column>
                    <el-table-column prop="lead_name" label="名称" width="120" :render-header="createRenderHeader">
                    </el-table-column>
                    <el-table-column prop="lead_origin" label="来源" width="80" :render-header="createRenderHeader">
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
        <div class="crm-aside">
            asdasd
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            handleClick(){
                console.log(this.activeName)
            },
            ContextMenuHandle(row, event) {
                row
                event
            },
            createRenderHeader(h, {
                column,
                $index
            }) {
                $index
                let render = Array.apply(null, {
                    length: 1
                }).map(function () {
                    return h(
                        'div', {
                            style: {
                                display: 'grid',
                                lineHeight: 'unset',
                                padding: '0px',
                                overflow: 'unset'
                            }
                        }, [
                            h('div', {
                                style: {
                                    padding: '0px',
                                }
                            }, column.label),
                            h('div', {
                                style: {
                                    padding: '0px',
                                },
                            }, [
                                h('input', {
                                    style: {
                                        width: '100%'
                                    },
                                    on: {
                                        'on-change': (event) => {
                                            event
                                        }
                                    }
                                })
                            ])
                        ]
                    )
                })
                return render[0]
            }
        },
        data() {
            return {
                activeName:'',
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
                }, ],
                value: '',
            }
        }
    }
</script>

<style>
    .box {
        width: 100%;
    }

    div.el-select.el-select--mini {
        padding: 0px;
    }

    div.el-input--mini.el-input--suffix {
        padding: 0px;
    }

    .crm-aside {
        position: absolute;
        top: 0px;
        right: 0px;
        width: 800px;
        height: 600px;
        background-color: aquamarine;
        z-index: 1999;
    }
</style>