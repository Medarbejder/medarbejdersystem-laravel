<template>
  <v-app id="main">
    <v-navigation-drawer v-model="drawer" app>
      <!--  -->
    </v-navigation-drawer>

    <v-app-bar app>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>Application</v-toolbar-title>
    </v-app-bar>

    <Main />
  </v-app>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: () => ({ drawer: null }),
};
</script>
