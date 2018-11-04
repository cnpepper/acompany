<template>
    <div>
        <el-row>
            <el-col :span="24">
                <el-menu class="el-menu-demo" mode="horizontal"
                    background-color="#545c64" text-color="#fff" active-text-color="#ffd04b" router="true">
                    <el-menu-item index="/home">处理中心</el-menu-item>
                    <el-submenu index="2">
                        <template slot="title">我的工作台</template>
                        <el-menu-item index="2-1">控制台</el-menu-item>
                        <el-menu-item index="2-2">SVN控制</el-menu-item>
                        <el-menu-item index="2-3">SQL控制</el-menu-item>
                        <el-submenu index="2-4">
                            <template slot="title">选项4</template>
                            <el-menu-item index="2-4-1">选项1</el-menu-item>
                            <el-menu-item index="2-4-2">选项2</el-menu-item>
                            <el-menu-item index="2-4-3">选项3</el-menu-item>
                        </el-submenu>
                    </el-submenu>
                    <el-menu-item index="3" disabled>消息中心</el-menu-item>
                </el-menu>
            </el-col>
        </el-row>
        <el-row>
            <el-col :span="24">
                <router-view></router-view>
            </el-col>
        </el-row>
    </div>
</template>

<script>
    export default {

    }
</script>

<style>

</style>