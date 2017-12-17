<template>
  <div>

    <navbar :user="currentUser" />

    <div class="container-fluid body-fluid-wrap">
      <div class="row pt-4">
        <div class="col-2">
          <sidebar :user="currentUser" />
        </div>
        <!-- /.col-3 -->
        <div class="col-10">
          <main role="main">
            <router-view  />
          </main>
        </div>
        <!-- /.col-9 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->

  </div>
</template>

<script>
  import Navbar from './navbar'
  import Sidebar from './sidebar.admin'
  import Bottombar from './bottombar'

  export default {
    computed: {
      currentUser(){
        return this.$store.state.auth.user
      }
    },
    components: {
      navbar: Navbar,
      sidebar: Sidebar,
      bottombar: Bottombar,
    },
    // Fetches user data when comp is created
    created() {
      this.$store.dispatch('auth/getCurrentUser')
    }
  }
</script>
