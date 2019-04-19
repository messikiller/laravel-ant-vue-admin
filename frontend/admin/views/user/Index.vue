<template>
  <div>
    <a-button type="primary" icon="plus" style="margin-bottom: 20px;" @click="handleClickAdd">创建用户</a-button>
    <a-table bordered :dataSource="list" :columns="columns" rowKey="id">
      <template slot="actions" slot-scope="text, record">
        <a-button type="primary" size="small" @click="handleClickResetPassword(record)">重置密码</a-button>
      </template>
    </a-table>

    <UserAdd :show.sync="showAddUser" />
  </div>
</template>

<script>
import UserAdd from './Add'

export default {
  components: {
    UserAdd
  },
  mounted () {
    this.requestFreshList()
  },
  data () {
    return {
      showAddUser: false,
      selectedId: 0,
      page: {
        pageno: 1,
        pagesize: 20
      },
      list: [],
      columns: [
        { title: '#', dataIndex: 'index' },
        { title: '用户名', dataIndex: 'username' },
        { title: '姓名', dataIndex: 'nickname' },
        { title: '创建时间', dataIndex: 'created_at' },
        { title: '操作', dataIndex: 'actions', scopedSlots: { customRender: 'actions' } }
      ]
    }
  },
  methods: {
    requestFreshList: async function () {
      const res = await this.$http({
        method: 'get',
        url: '/user/list'
      })
      this.list = res.data.data
    },
    handleClickAdd: function () {
      this.showAddUser = true
    },
    handleClickResetPassword: function (record) {
      console.log(record)
    }
  }
}
</script>

<style lang="css" scoped>
</style>
