<template>
    <el-container direction="horizontal">
        <aside style="width:201px;">
            <slot name="menu"></slot>
        </aside>
        <el-container>
            <el-header style="height:80px;">
                <el-row><slot name="header"></slot></el-row>
                <el-row><slot name="tags"></slot></el-row>
            </el-header>
            <el-main>
                <slot></slot>
            </el-main>
            <el-footer style="height:30px;">
                <slot name="footer"></slot>
            </el-footer>
        </el-container>
    </el-container>
</template>

<script>
    export default {};
</script>

<style>
</style>