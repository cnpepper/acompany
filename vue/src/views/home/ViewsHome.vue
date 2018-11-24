<template>
    <div>
        <el-button @click="handleTest()">测试接口</el-button>
    </div>
</template>

<script>
import {axTestQuery} from "@/api/test/index.js"
export default {
    methods:{
        handleTest(){
            axTestQuery().then(result=>{
                console.log(result)
            })
        }
    }
}
</script>

<style>

</style>
