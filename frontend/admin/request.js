import axios from 'axios'
import { Modal } from 'ant-design-vue/es'

const request = axios.create({
  baseURL: '/admin/api',
  withCredentials: true,
  headers: {
    'X-Requested-With': 'XMLHttpRequest'
  }
})

request.interceptors.response.use(
  function (response) {
    const code = parseInt(response.data.code)
    if (code == 500) {
      Modal.warning({
        title: '失败',
        content: response.data.msg
      })
      return new Promise(() => {}, () => {})
    }
    return response
  },
  function (error) {
    Modal.error({
      title: '错误',
      content: '请求出错！'
    })
    return new Promise(() => {}, () => {})
  }
)

export default request
