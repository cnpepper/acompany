<template>
  <div>
    <div class="custom-tree-container">
      <div class="block">
        <p>使用 render-content</p>
        <el-tree
          :data="data4"
          node-key="id"
          default-expand-all
          :expand-on-click-node="false"
          :render-content="renderContent"
        ></el-tree>
      </div>
    </div>
    <div>
      <el-table :data="tableData" style="width: 100%">
        <el-table-column prop="item_name" label="产品名称" width="180"></el-table-column>
        <el-table-column prop="item_type" label="服务类型" width="180"></el-table-column>
        <el-table-column prop="item_price" label="单价" width="180"></el-table-column>
        <el-table-column prop="item_num" label="数量" width="180"></el-table-column>
      </el-table>
    </div>
  </div>
</template>

<script>
let id = 1000;

export default {
  data() {
    const data = [
      {
        id: 1,
        label: "一级 1",
        children: [
          {
            id: 4,
            label: "二级 1-1",
            children: [
              {
                id: 9,
                label: "三级 1-1-1"
              },
              {
                id: 10,
                label: "三级 1-1-2"
              }
            ]
          }
        ]
      },
      {
        id: 2,
        label: "一级 2",
        children: [
          {
            id: 5,
            label: "二级 2-1"
          },
          {
            id: 6,
            label: "二级 2-2"
          }
        ]
      },
      {
        id: 3,
        label: "一级 3",
        children: [
          {
            id: 7,
            label: "二级 3-1"
          },
          {
            id: 8,
            label: "二级 3-2"
          }
        ]
      }
    ];
    return {
      tableData: [
          {
              item_name:'旺店通企业版',
              item_type:'按年付费',
              item_price:'38,000',
              itme_num:'1'
          },
          {
              item_name:'旺店通企业版',
              item_type:'按年付费',
              item_price:'38,000',
              itme_num:'1'
          },
          {
              item_name:'旺店通企业版',
              item_type:'按年付费',
              item_price:'38,000',
              itme_num:'1'
          },
          {
              item_name:'旺店通企业版',
              item_type:'按年付费',
              item_price:'38,000',
              itme_num:'1'
          }
      ],
      data4: JSON.parse(JSON.stringify(data)),
      data5: JSON.parse(JSON.stringify(data))
    };
  },

  methods: {
    renderContent(h, { node, data, store }) {
      return (
        <table>
          <tr>
            <td>{node.label}</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>其他</td>
            <td>
              <el-button
                size="mini"
                type="text"
                on-click={() => this.append(data)}
              >
                Append
              </el-button>
              <el-button
                size="mini"
                type="text"
                on-click={() => this.remove(node, data)}
              >
                Delete
              </el-button>
            </td>
          </tr>
        </table>
      );
    }
  }
};
</script>

<style>
.custom-tree-node {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
  padding-right: 8px;
}
</style>
