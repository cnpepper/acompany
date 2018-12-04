<template>
    <el-menu class="el-menu-demo" background-color="#545c64" text-color="#fff" active-text-color="#ffd04b" :router="true"
        default-active="1">
        <el-submenu index="1">
            <template slot="title">客户管理</template>
            <el-menu-item index="/lead_query">线索查询</el-menu-item>
        </el-submenu>
    </el-menu>
</template>

<script>
    export default {

    }
</script>

<style>

</style>