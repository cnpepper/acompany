<template>
    <el-row :gutter="5" style="padding-top:5px;">
        <el-col :span="20">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
                <el-breadcrumb-item><a href="/">活动管理</a></el-breadcrumb-item>
                <el-breadcrumb-item>活动列表</el-breadcrumb-item>
                <el-breadcrumb-item>活动详情</el-breadcrumb-item>
            </el-breadcrumb>
        </el-col>
        <el-col :span="2" :offset="2">
            <span>刘建均</span>
            <el-dropdown>
                <i class="el-icon-arrow-down"></i>
                <el-dropdown-menu slot="dropdown">
                    <el-dropdown-item>个人设置</el-dropdown-item>
                    <el-dropdown-item>修改密码</el-dropdown-item>
                    <el-dropdown-item @click="logout()">退出登录</el-dropdown-item>
                </el-dropdown-menu>
            </el-dropdown>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name:'app-header',
        methods:{
            logout(){
                this.$store.dispatch('user/logout').then(resolve=>{
                    if(0 !== resolve){
                        this.$message.error('系统异常，退出登录失败！')
                    }
                    else{
                        this.$router.push('/login')
                    }
                }).catch(error=>{
                    this.$message.error('未知错误，退出登录失败！')
                })
            }
        }
    }
</script>

<style>

</style>