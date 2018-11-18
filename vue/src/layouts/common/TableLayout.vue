<template>
    <div>
        <el-container>
            <el-header style="height:30px;">
                <slot name="header"></slot>
            </el-header>
            <el-main style="padding:0px;height:600px;">
                <slot></slot>
            </el-main>
            <el-footer style="height:30px;">
                <slot name="footer"></slot>
            </el-footer>
        </el-container>
    </div>
</template>

<script>
export default {};
</script>

<style>
</style>