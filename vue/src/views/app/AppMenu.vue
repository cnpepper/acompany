<template>
    <el-menu class="el-menu-demo" background-color="#545c64" text-color="#fff" active-text-color="#ffd04b" :router="true"
        default-active="/home">
        <el-menu-item index="/home">仪表盘</el-menu-item>
        <el-submenu index="/crm">
            <template slot="title">CRM模块</template>
            <el-submenu index="/lead">
                <template slot="title">线索管理</template>
                <el-menu-item index="/query">线索查询</el-menu-item>
            </el-submenu>
            <el-submenu index="/customer">
                <template slot="title">客户管理</template>
                <el-menu-item index="/crm/customer/query">客户查询</el-menu-item>
            </el-submenu>
            <el-submenu index="/chance">
                <template slot="title">机会管理</template>
                <el-menu-item index="/query">机会查询</el-menu-item>
            </el-submenu>
            <el-submenu index="/contract">
                <template slot="title">合同管理</template>
                <el-menu-item index="/query">合同查询</el-menu-item>
            </el-submenu>
        </el-submenu>
    </el-menu>
</template>

<script>
    export default {

    }
</script>

<style>

</style>