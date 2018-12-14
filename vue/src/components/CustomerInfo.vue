<template>
    <el-row>
        <table class="crm-customer-info">
            <tr>
                <td class="crm-title-td">公司名称</td><td>北京掌上先机</td>
                <td class="crm-title-td">店铺名称</td><td>北京掌上先机小店</td>
                <td class="crm-title-td">意向度</td><td>A</td>
            </tr>
            <tr>
                <td class="crm-title-td">归属</td><td>5天23小时56分</td>
                <td class="crm-title-td">来源</td><td>5天23小时56分</td>
                <td class="crm-title-td">来源备注</td><td></td>
            </tr>
            <tr>
                <td class="crm-title-td">创建人</td><td>刘建均</td>
                <td class="crm-title-td">保护人</td><td></td>
                <td class="crm-title-td">推荐人</td><td></td>
            </tr>
            <tr>
                <td class="crm-title-td">省市区</td><td>北京-北京市-东城区</td>
                <td class="crm-title-td">现用软件</td><td>网店管家</td>
                <td class="crm-title-td">备注</td><td></td>
            </tr>
            <tr>
                <td class="crm-title-td">一线销售</td><td>刘建均</td>
                <td class="crm-title-td">电话销售</td><td>刘建均</td>
                <td class="crm-title-td">备注</td><td></td>
            </tr>
            <tr>
                <td class="crm-title-td">电销强开时间</td><td>5天23小时56分</td>
                <td class="crm-title-td">一线强开时间</td><td>5天23小时56分</td>
                <td class="crm-title-td">最新跟进时间</td><td>2018-12-14 15:42:29</td>
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
        }
    }
</script>

<style>

.crm-customer-info{
    border-collapse:collapse;
}
.crm-customer-info table, td, th
{
    border:1px solid black;
}
.crm-customer-info td, th{
    padding:5px;
}
.crm-title-td{
    font-weight: bold;
    background-color:lightgrey;
}
</style>