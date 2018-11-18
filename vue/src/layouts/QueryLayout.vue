<template>
    <el-container>
        <el-header style="padding:0px;height:30px;">
            <slot name="header"></slot>
        </el-header>
        <el-main style="padding:0px;height:600px;">
            <slot></slot>
        </el-main>
        <el-footer style="padding:0px;height:20px;">
            <slot name="footer"></slot>
        </el-footer>
    </el-container>
</template>

<script>
    export default {};
</script>

<style>
</style>