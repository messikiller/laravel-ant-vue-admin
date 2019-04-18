<template>
  <div class="container">
    <a-card style="width: 400px; border-radius: 0;">
      <div class="title">
        Laravel Ant Vue Admin
      </div>
      <div class="line">
        <a-input placeholder="输入用户名" autofocus v-model="loginForm.userName">
          <a-icon slot="prefix" type="user" />
        </a-input>
      </div>
      <div class="line">
        <a-input placeholder="输入密码" type="password" v-model="loginForm.password">
          <a-icon slot="prefix" type="lock" />
        </a-input>
      </div>
      <div>
        <a-button type="primary" block style="margin-bottom: 10px;" @click="handleClickLogin">登录</a-button>
        <a-button type="default" block @click="handleClickReset">重置</a-button>
      </div>
    </a-card>
  </div>
</template>

<script>
export default {
  data () {
    return {
      loginForm: {
        username: '',
        password: ''
      }
    }
  },
  methods: {
    handleClickReset: function () {
      this.loginForm = {
        username: '',
        password: ''
      }
    },
    handleClickLogin: function () {

    }
  }
}
</script>

<style lang="css" scoped>
.container {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #666;
}

.title {
  font-size: 20px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #000;
  font-family: Avenir,Helvetica Neue,Arial,Helvetica,sans-serif;
  margin-top: 20px;
  margin-bottom: 40px;
}

.line {
  margin-bottom: 20px;
}
</style>
