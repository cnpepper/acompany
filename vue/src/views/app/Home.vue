<template>
    <div>
        <el-button @click="handleClick">点击</el-button>
        <el-row>
            <el-col :span="8" v-for="(o, index) in 2" :key="o" :offset="index > 0 ? 2 : 0">
                <el-card :body-style="{ padding: '0px' }">
                    <img src="http://acompany.dev/1storage/image" class="image">
                    <div style="padding: 14px;">
                        <span>好吃的汉堡</span>
                        <div class="bottom clearfix">
                            <time class="time">{{ currentDate }}</time>
                            <el-button type="text" class="button">操作按钮</el-button>
                        </div>
                    </div>
                </el-card>
            </el-col>
        </el-row>

    </div>
</template>

<script>
    import {
        axTestQuery
    } from "@/api/test/index.js"
    export default {
        methods: {
            handleClick() {
                axTestQuery().then(response => {
                    console.log(response)
                })
            }
        }
    }
</script>

<style>

</style>