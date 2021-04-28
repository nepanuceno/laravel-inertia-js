<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <inertia-link class="nav-link" href="/home">Home</inertia-link>
                    </li>

                     <li class="nav-item">
                        <inertia-link class="nav-link" href="/register">Register</inertia-link>
                    </li>

                    <li class="nav-item">
                        <inertia-link class="nav-link" href="/about">About</inertia-link>
                    </li>
                </ul>
        </nav>
        <div class="container-fluid">
            <slot/>
        </div>
    </div>
</template>


<script>
export default {

}
</script>


<style>

</style>
