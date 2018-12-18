<template>
  <div>
    <tree-table :data="tableData" :columns="tableColumns"></tree-table>
  </div>
</template>

<script>
  import TreeTable from "./TreeTable"
  export default {
    components: {
      TreeTable
    },
    data() {
      return {
        tableData: [{
            goods_no: 'ERP产品',
            children: [
              {
                goods_no: 'GS001',
                goods_name: '旺店通企业版',
                goods_price: 100,
              },
              {
                goods_no: 'GS001',
                goods_name: '旺店通企业版',
                goods_price: 100,
              }
            ]
          }
        ],
        tableColumns: [{
          value: 'goods_no',
          text: '货品编码',
          width: 180
        }, {
          value: 'goods_name',
          text: '货品名称',
          width: 180
        }, {
          value: 'goods_price',
          text: '货品价格',
          width: 180
        }]
      }
    }
  }
</script>

<style>

</style>