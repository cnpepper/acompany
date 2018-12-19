<template>
    <el-menu class="el-menu-demo" background-color="#545c64" text-color="#fff" active-text-color="#ffd04b" :router="true"
        default-active="0">
        <el-submenu index="0">
            <template slot="title">市场管理</template>
            <el-menu-item index="/market_query">活动查询</el-menu-item>
        </el-submenu>
        <el-submenu index="1">
            <template slot="title">商务管理</template>
            <el-menu-item index="/lead_query">线索查询</el-menu-item>
            <el-menu-item index="/customer_query">客户查询</el-menu-item>
            <el-menu-item index="/public_customer_query">公共客户查询</el-menu-item>
            <el-menu-item index="/chance_query">商机查询</el-menu-item>
            <el-menu-item index="/contract_query">合同查询</el-menu-item>
            <el-menu-item index="/sales_order_query">订单查询</el-menu-item>
        </el-submenu>
        <el-submenu index="2">
            <template slot="title">服务管理</template>
            <el-menu-item index="/project_query">项目查询</el-menu-item>
            <el-menu-item index="/work_query">工单查询</el-menu-item>
        </el-submenu>
        <el-submenu index="3">
            <template slot="title">售后管理</template>
        </el-submenu>
        <el-submenu index="4">
            <template slot="title">系统管理</template>
        </el-submenu>
    </el-menu>
</template>

<script>
    export default {

    }
</script>

<style>

</style>