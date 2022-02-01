<template>
    <div class="full login">
        <div class="side-card-login center">
            <div class="card-login shadow-border box-r flex-column">
                <form action="#">
                    <label for="email">e-mail</label><br>
                    <input type="text">
                </form>
            </div>
        </div>
        <div class="side-image-login">
            <img :src="image_background_login" alt="">
        </div>
    </div>
</template>

<script>

export default {
    name: "Login",
    props: ['route_home', 'image_background_login', 'image_logo'],
    methods: {},
    data () {
        return {}
    },
    components: {},
    computed: {},
    beforeMount() {},
    created() {},
    mounted() {}
}

</script>
