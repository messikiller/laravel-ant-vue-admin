import Vue from 'vue'
import Login from './Login.vue'
import { Card, Button, Icon, Input } from 'ant-design-vue'

Vue.config.productionTip = false
Vue.use(Card)
Vue.use(Button)
Vue.use(Icon)
Vue.use(Input)

new Vue({
  render: h => h(Login)
}).$mount('#root')
