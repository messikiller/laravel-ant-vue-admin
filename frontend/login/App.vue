<template>
  <div class="container" @keyup.enter="handleClickLogin">
    <a-card style="width: 400px; border-radius: 0;">
      <div class="title">
        Laravel Ant Vue Admin
      </div>
      <div class="line">
        <a-input placeholder="输入用户名" autofocus v-model="loginForm.username">
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
import { Modal } from 'ant-design-vue'

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
    validateForm: function () {
      return this.loginForm.username.length > 0 && this.loginForm.password.length > 0
    },
    handleClickLogin: async function () {
      if (!this.validateForm()) {
        Modal.info({
          title: '提示',
          content: '请填写完整后再提交！'
        })
        return false
      }
      const res = await this.$http({
        method: 'post',
        url: '/auth/login',
        data: this.loginForm
      })

      if (res.data.code == 500) {
        Modal.info({
          title: '提示',
          content: res.data.msg
        })
        return false
      }

      window.location.href = '/admin'
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
