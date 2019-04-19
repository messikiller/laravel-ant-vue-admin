<template>
  <a-modal
    :visible="show"
    title="添加用户"
    destroyOnClose
    @cancel="handleCancel"
    @ok="handleOk"
  >
    <a-form layout="horizontal">
      <a-form-item label="用户名" :labelCol="{span: 4}" :wrapperCol="{span: 20}" required>
        <a-input v-model="addForm.username" />
      </a-form-item>
      <a-form-item label="姓名" :labelCol="{span: 4}" :wrapperCol="{span: 20}" required>
        <a-input v-model="addForm.nickname" />
      </a-form-item>
      <a-form-item label="密码" :labelCol="{span: 4}" :wrapperCol="{span: 20}" required>
        <a-input type="password" v-model="addForm.password" />
      </a-form-item>
    </a-form>
  </a-modal>
</template>

<script>
export default {
  props: {
    show: Boolean
  },
  data () {
    return {
      addForm: {
        username: '',
        nickname: '',
        password: ''
      }
    }
  },
  methods: {
    closeModal: function () {
      this.$emit('update:show', false)
    },
    handleCancel: function () {
      this.closeModal()
    },
    handleOk: function () {
      this.closeModal()
    }
  }
}
</script>

<style lang="css" scoped>
</style>
