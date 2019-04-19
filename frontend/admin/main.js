import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store'
import request from './request'
import Antd from 'ant-design-vue/es'
import 'ant-design-vue/dist/antd.css'

Vue.config.productionTip = false
Vue.use(Antd)

Vue.prototype.$http = request

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#root')
