<template>
    <div>
        <el-container>
            <el-main style="padding:0px;">
                <el-collapse v-model="activeNames" @change="handleChange">
                    <el-collapse-item title="搜索" name="1">
                        <el-form ref="form" :model="form" label-width="80px">
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
                    </el-collapse-item>
                </el-collapse>
                <el-radio-group v-model="radio3">
                    <el-radio-button label="全部"></el-radio-button>
                    <el-radio-button label="线索"></el-radio-button>
                    <el-radio-button label="私海"></el-radio-button>
                    <el-radio-button label="成交"></el-radio-button>
                </el-radio-group>
                <el-table :data="tableData" size="mini" border @row-contextmenu="ContextMenuHandle">
                    <el-table-column prop="lead_no" label="编号" width="120">
                    </el-table-column>
                    <el-table-column prop="lead_name" label="名称" width="120">
                    </el-table-column>
                    <!-- <el-table-column prop="lead_origin" label="来源" width="80" :render-header="createRenderHeader">
                    </el-table-column>-->
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
        <!--<div class="crm-aside">
        </div>-->
    </div>
</template>

<script>
    export default {
        methods: {
            onSubmit() {
                console.log('submit!');
            },
            handleChange() {

            },
            handleClick() {
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
                radio3:'全部',
                form: {
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    type: [],
                    resource: '',
                    desc: ''
                },
                activeNames: '',
                activeName: '',
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