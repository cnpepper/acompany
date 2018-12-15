<template>
    <el-row>
        <table class="crm-customer-info">
            <tr>
                <td class="crm-title-td">公司名称</td><td>{{data.company_name}}</td>
                <td class="crm-title-td">店铺名称</td><td>{{data.shop_name}}</td>
                <td class="crm-title-td">意向度</td><td>{{data.customer_order}}</td>
            </tr>
            <tr>
                <td class="crm-title-td">归属</td><td>{{data.customer_attach}}</td>
                <td class="crm-title-td">来源</td><td>{{data.customer_source}}</td>
                <td class="crm-title-td">来源备注</td><td>{{data.customer_source_remark}}</td>
            </tr>
            <tr>
                <td class="crm-title-td">创建人</td><td>{{data.creator}}</td>
                <td class="crm-title-td">保护人</td><td>{{data.is_protect}}</td>
                <td class="crm-title-td">推荐人</td><td>{{data.customer_source_partner}}</td>
            </tr>
            <tr>
                <td class="crm-title-td">省市区</td><td>{{data.customer_province}}</td>
                <td class="crm-title-td">现用软件</td><td>{{data.old_software}}</td>
                <td class="crm-title-td">备注</td><td>{{data.remark}}</td>
            </tr>
            <tr>
                <td class="crm-title-td">一线销售</td><td>{{data.sales}}</td>
                <td class="crm-title-td">电话销售</td><td>{{data.tel_sales}}</td>
                <td class="crm-title-td">其他</td><td>{{data.other}}</td>
            </tr>
            <tr>
                <td class="crm-title-td">电销强开时间</td><td>{{data.tel_follow_time}}</td>
                <td class="crm-title-td">一线强开时间</td><td>{{data.sale_follow_time}}</td>
                <td class="crm-title-td">最新跟进时间</td><td>{{data.last_follow_time}}</td>
            </tr>
        </table>
    </el-row>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
            }
        },
        created(){
            this.data={
                company_name:'我的小公司'
            }
        }
    }
</script>

<style>

.crm-customer-info{
    width: '100%';
    border-collapse:collapse;
}
.crm-customer-info table,td
{
    border:1px solid #ebeef5;
}
.crm-customer-info td{
    padding:5px;
    width: 100px;
}
.crm-title-td{
    font-weight: bold;
    background-color:#ecf5ff;
}
</style>