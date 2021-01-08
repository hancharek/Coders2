<template>
   <div>
       <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
            <a class="navbar-brand" href="#">Rockr Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-right collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <router-link  to="/" class="nav-link">Post</router-link>
                </li>
                <li class="nav-item active">
                    <router-link  to="/#" class="nav-link">Contact</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/create_post" class="nav-link">Create Post</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/category" class="nav-link">Categories</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/create_category" class="nav-link">Create Category</router-link>
                </li>
                </ul>
            </div>
        </nav>
   </div>
</template>

<script>
    export default {
    }
</script>

<style>
.bg-dark {
    background-color: #2d2d2d !important;
    height: 100px;
}

.bg-dark a {
    color: #ffffff !important;
}
.navbar-right {
    float: right;
    margin-right: 10px;
    flex-flow: row-reverse;
}
</style>
