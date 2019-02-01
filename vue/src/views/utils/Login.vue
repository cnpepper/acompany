<template>
  <div>
  <el-card class="box-card">
    <el-form :model="loginForm" label-width="80px">
      <el-form-item label="邮箱">
        <el-input v-model="loginForm.email" placeholder="请输入邮箱账号"></el-input>
      </el-form-item>
      <el-form-item label="密码">
        <el-input type="password" v-model="loginForm.password" placeholder="请输入账号密码"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button @click="LoginSubmit()">登录</el-button>    
      </el-form-item>
    </el-form>
  </el-card>
  <div class="weizhi animated slideInRight">123</div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        loginForm: {}
      }
    },
    methods:{
      LoginSubmit(){
        this.$store.dispatch('user/login',this.loginForm).then(resolve=>{
          if(undefined !== resolve && 0 === resolve){
            // 登录成功跳转
            this.$router.push('/app')
          }else{
            this.$message.error('登录失败,账号或密码错误!')
          }
        })
      }
    }
  }
</script>

<style>
  .box-card {
    width: 480px;
  }
  .weizhi{
    height:100px;
    width:100px;
    background-color:red;
  }
</style>