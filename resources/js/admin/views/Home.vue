<template>
  <a-layout id="layout">
    <a-layout-sider
      :trigger="null"
      collapsible
      v-model="collapsed"
      :style="{ overflow: 'auto', height: '100vh', position: 'fixed', left: 0, zIndex: 2 }"
    >
      <div class="logo"></div>
      <a-menu theme="dark" mode="vertical-right" style="border-left: 0;">

        <template v-for="(menuItem, pIdx) in siderMenus">
          <template v-if="!menuItem.children">
            <a-menu-item :key="pIdx"><a-icon :type="menuItem.icon" /><span>{{ menuItem.title }}</span></a-menu-item>
          </template>
          <template v-else>
            <a-sub-menu :key="pIdx">
              <span slot="title"><a-icon :type="menuItem.icon" /><span>{{ menuItem.title }}</span></span>
              <a-menu-item v-for="(child, cIdx) in menuItem.children" :key="pIdx + '-' + cIdx">
                <a-icon :type="child.icon" />
                <span>{{ child.title }}</span>
              </a-menu-item>
            </a-sub-menu>
          </template>

        </template>
      </a-menu>
    </a-layout-sider>
    <a-layout :style="{ marginLeft: collapsed ? '80px' : '200px' }" id="main">
      <a-layout-header :style="{ background: '#fff', padding: '0 15px', width: '100%', boxShadow: '0 1px 4px rgba(0,21,41,.08)' }" class="header">
        <a-icon
          class="trigger"
          :type="collapsed ? 'menu-unfold' : 'menu-fold'"
          @click="() => collapsed = !collapsed"
        />
        <div style="flex: 1; text-align: right;">
          <a-dropdown placement="bottomLeft">
            <a-button style="height: 64px; border: 0;"><a-icon type="user" /> admin <a-icon type="down" /></a-button>
            <a-menu slot="overlay" @click="handleClickUsername">
              <a-menu-item key="logout"><a-icon type="logout" />logout</a-menu-item>
            </a-menu>
          </a-dropdown>
        </div>
      </a-layout-header>
      <a-layout-content class="content">
        <div :style="{ background: '#fff', padding: '24px' }">
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
          ...<br />...<br />...<br />...<br />...<br />
        </div>
        <a-layout-footer class="footer">
          Ant Design Vue © Created by Messikiller
        </a-layout-footer>
      </a-layout-content>
    </a-layout>
  </a-layout>
</template>

<script>
export default {
  data () {
    return {
      collapsed: false,
      siderMenus: [
        { icon: 'user', title: 'aaaa' },
        { icon: 'user', title: 'aaaa' },
        {
          icon: 'user',
          title: 'aaaa',
          children: [
            { icon: 'user', title: 'bbb' },
            { icon: 'user', title: 'ddd' }
          ]
        }
      ]
    }
  },
  methods: {
    handleClickUsername: function (submenu) {
      if (submenu.key == 'logout') {
        this.handleLogout()
      }
    },
    handleLogout: function () {
      this.$router.push('/login')
    }
  }
}
</script>

<style>
#layout .logo {
  height: 32px;
  background: rgba(255,255,255,.2);
  margin: 16px;
}

#layout .trigger {
  font-size: 18px;
  margin-left: 20px;
  line-height: 64px;
  cursor: pointer;
  transition: color .3s;
}

#layout .trigger:hover {
  color: #1890ff;
}

#layout {
  height: 100vh;
}

#main {
  display: flex;
  flex-direction: column;
  height: 100vh;
}

#main .header {
  display: flex;
  align-items: center;
}

#main .content {
  flex: 1;
  padding: 24px;
  box-shadow: '0 1px 4px rgba(0,21,41,.08)';
  overflow-y: auto;
}

#main .footer {
  text-align: center;
  color: #bbb;
}
</style>
