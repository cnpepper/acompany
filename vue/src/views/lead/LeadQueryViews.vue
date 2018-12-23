<template>
    <div>
        <el-container>
            <el-header>
                <el-button>新建线索</el-button>
            </el-header>
            <el-main>
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
        <v-contextmenu :theme="theme" ref="contextmenu">
            <v-contextmenu-item>菜单1</v-contextmenu-item>
        </v-contextmenu>
        <div :class="['box', theme]" v-oncontext:contextmenu>
            点击此区域
        </div>
    </div>
</template>

<script>
    import VContextmenu from "@/components/common/menu/ContextMenu"
    import VContextmenuGroup from "@/components/common/menu/ContextMenuGroup"
    import VContextmenuItem from "@/components/common/menu/ContextMenuItem"
    import VContextSubmenu from "@/components/common/menu/ContextSubMenu"

    export default {
        props: {
            theme: String,
        },
        directives: {
            oncontext: {
                // 之所以用 inserted 而不是 bind，是需要确保 contentmenu mounted 后才进行 addRef 操作
                inserted(el, binding, vnode) {
                    console.log(11111)
                    const contextmenu = vnode.context.$refs[binding.arg]
                    contextmenu.addRef({
                        el,
                        vnode
                    })
                    contextmenu.$contextmenuId = el.id || contextmenu._uid // eslint-disable-line no-underscore-dangle
                },
            }
        },
        components: {
            VContextmenu,
            VContextmenuGroup,
            VContextmenuItem,
            VContextSubmenu
        },
        methods: {
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
</style>