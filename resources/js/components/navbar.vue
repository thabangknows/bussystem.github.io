<template>
    <div>

        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h1  class="text-white h1">Bus Times...</h1>
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="./login">
                            <p style="color:grey">Login</p>
                        </router-link>
                    </li>

                    
                    <li class="nav-item">
                        <router-link to="./register">
                            <p style="color:grey">Register</p>
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

    </div>
</template>

<script>
export default {
    name: 'navbar',
}
</script>


<style scoped>
</style>