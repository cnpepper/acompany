<template>
    <div>
    <el-container>
        <el-main>
            <el-button @click="handleClick">显示</el-button>
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
            <div v-bind:class="{'crm-detail-card':true,'crm-card-move':cardOnff}">
                hello!
            </div>
            <el-pagination :page-sizes="[100, 200, 300, 400]" :page-size="100" layout="total, sizes, prev, pager, next, jumper"
                :total="400">
            </el-pagination>
        </el-main>
    </el-container>
    
    </div>
</template>

<script>
    export default {
        methods: {
            handleClick(){
                this.cardOnff = !this.cardOnff;
            },
            renderHeader(h, {
                column,
                $index
            }) {
                return h(
                    'el-row', {
                        style: {
                            display: 'grid',
                            lineHeight: 'unset',
                            padding: '0px',
                            overflow: 'unset'
                        }
                    }, [
                        h('el-row', {
                            style: {
                                padding: '0px',
                            }
                        }, column.label),
                        h('el-row', {
                            style: {
                                padding: '0px',
                            },
                        }, [
                            h('el-select', {
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
                }, ],
                value: '',
                cardOnff:false,
            }
        }
    }
</script>

<style>
div.el-select.el-select--mini{
    padding: 0px;
}

div.el-input--mini.el-input--suffix{
    padding: 0px;
}

.crm-detail-card{
    width:600px;
    height:600px;
    background-color:red;
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 100;
}

.crm-card-move{
    animation-name:crm-move;
    animation-duration:1s;
    animation-timing-function:infinite;
    animation-delay:ease;
    animation-iteration-count:1;
    animation-fill-mode: forwards;
    /*Safari 和 Chrome:*/
    -webkit-animation-name:crm-move;
    -webkit-animation-duration:1s;
    -webkit-animation-timing-function:infinite;
    -webkit-animation-delay:ease;
    -webkit-animation-iteration-count:1;
    -webkit-animation-fill-mode: forwards;
}

@keyframes crm-move{
	from {right: -600px;}
	to {right: 0px;}
}

/*Safari 和 Chrome:*/
@-webkit-keyframes crm-move
{
	from {right: -600px;}
	to {right: 0px;}
}
</style>