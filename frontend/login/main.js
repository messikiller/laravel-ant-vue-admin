import Vue from 'vue'
import axios from 'axios'
import App from './App.vue'
import { Card, Button, Icon, Input, Modal } from 'ant-design-vue'

Vue.prototype.$http = axios
Vue.config.productionTip = false

Vue.use(Card)
Vue.use(Button)
Vue.use(Icon)
Vue.use(Input)
Vue.use(Modal)

new Vue({
  render: h => h(App)
}).$mount('#root')
