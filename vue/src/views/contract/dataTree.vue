<script>
    import Utils from './utils.js';
    export default {
        name: 'tree-grid',
        props: { //该属性是确认父组件传过来的数据是否已经是树形结构了， 如果是， 则不需要进行树形格式化
            treeStructure: {
                type: Boolean,
                default: function () {
                    return false;
                }
            }, // 这是相应的字段展示        
            columns: {
                type: Array,
                default: function () {
                    return [];
                }
            }, // 这是数据源       
            dataSource: {
                type: Array,
                default: function () {
                    return [];
                }
            }, // 这个作用是根据自己需求来的，比如在操作中涉及相关按钮编辑，删除等，需要向服务端发送请求，则可以把url传过来
            requestUrl: {
                type: String,
                default: function () {
                    return '';
                }
            }, // 这个是是否展示操作列        
            treeType: {
                type: String,
                default: function () {
                    return 'unnormal';
                }
            },
            // 是否默认展开所有树        
            defaultExpandAll: {
                type: Boolean,
                default: function () {
                    return true;
                }
            }, // 默认被点击时的样式处理        
            defaultRowHightLine: {
                type: String,
                default: function () {
                    return '';
                }
            }
        },
        data() {
            return {
                rowDefalut: '' // 防止被上次点击颜色渲染标志位        
            };
        },
        computed: { // 格式化数据源        
            data: function () {
                let me = this;
                if (me.treeStructure) {
                    let data =
                        Utils.MSDataTransfer.treeToArray(me.dataSource, null, null, me.defaultExpandAll);
                    data.forEach(e => {
                        if (this.defaultRowHightLine !== '') {
                            e = this.$options.methods.hindChild(e,
                                this.defaultRowHightLine);
                        }
                    });
                    return data;
                }
                return me.dataSource;
            }
        },
        methods: { // 显示行
            showTr: function ({
                row,
                rowIndex
            }) {
                let show = (row._parent ? (row._parent._expanded && row._parent._show) : true);
                row._show = show;
                // 编辑时只展开该行对应的机构以及上层机构
                if (this.defaultRowHightLine !== '' && this.defaultRowHightLine === row.id + '') {
                    return show;
                }
                return show ? '' : 'display:none;';
            },
            adjustCol({
                row,
                column,
                rowIndex,
                columnIndex
            }) {
                if (column.label === this.$i18n.t('treeTable.commonName')) {
                    console.log('21212111');
                    return 'width-row';
                }
            }, // 将没有选择的节点隐藏       
            hindChild(row, lid) {
                let id = row.id + '';
                if (id !== lid && row.children && row.children.length >
                    0) {
                    this.hindChild(row.children);
                    row._expanded = false; // 若不是已选择的节点，则设为不展开
                }
                if (id === lid && row._parent) {
                    this.showParent(row._parent);
                }
                return row;
            },
            showParent(row) {
                row._expanded = true;
                if (row._parent) {
                    this.showParent(row._parent);
                }
            }, // 点击某一行        
            clickRow(row, event, column) {
                if (this.treeType === 'unnormal') {
                    this.$emit('setInstitution', row);
                }
                this.rowDefalut = row.id + '';
            }, // 列表中行样式处理
            tableRowClassName({
                row,
                rowIndex
            }) {
                let
                    id = row.id;
                if (typeof id === 'number') {
                    id = id + '';
                } //某一行编辑时默认样式处理
                if (this.defaultRowHightLine !== '' && this.defaultRowHightLine === id) {
                    this.rowDefalut = '';
                    return 'info-row';
                } else if (this.rowDefalut === id) { //机构发生改变时， 点击时颜色发生发生变动
                    return 'info-row';
                } else {
                    return '';
                }
            }, // 展开下级
            toggle: function (trIndex) {
                let me = this;
                let record =
                    me.data[trIndex];
                record._expanded = !record._expanded;
            }, // 显示层级关系的空格和图标       
            spaceIconShow(index) {
                let me = this;
                if (me.treeStructure && index === 0) {
                    return true;
                }
                return false;
            }, // 点击展开和关闭的时候，图标的切换
            toggleIconShow(index,
                record) {
                let me = this;
                if (me.treeStructure && index === 0 && record.children &&
                    record.children.length > 0) {
                    return true;
                }
                return false;
            },
            handleEdit(row) { // 编辑
                this.$emit('editRow', row);
            },
            handleAdd(id) { // 添加           
                this.$emit('addChild', id);
            },
            handleDelete(row) { // 删除
                this.$emit('delete', row);
            }
        }
    };
</script>

<style scoped>
    .ms-tree-space {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'GlyphiconsHalflings';
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        width: 18px;
        height: 14px;
    }

    .ms-tree-space::before {
        content: ""
    }

    table td {
        line-height: 26px;
    }

    .el-table__expand-icon--expanded {
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    /*** 颜色标红提醒*/
    .el-table .info-row {
        background:
            #FFFACD;
    }

    .el-table .width-row {
        width: 300px;
    }
</style>