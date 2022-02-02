<template>
    <div class="full login">
        <div class="side-card-login center">
            <div class="po-abs" style="top: 0vh; left: 1vw">
                <img :src="image_logo_system" alt="" style="width: 8vw; height: auto">
            </div>
            <div class="card-login">
                <img :src="image_logo" alt="">
                <form action="#">
                    <div class="input-login" @focusin="activeInput(1)" @focusout="activeInput(1)" :class="{'input-login-active' : form.input.email.active == true }">
                        <input type="email" placeholder="E-mail" autofocus required>
                        <i class="fi-rr-user"></i>
                    </div>
                    <div class="input-login" @focusin="activeInput(2)" @focusout="activeInput(2)" :class="{'input-login-active' : form.input.password.active == true }">
                        <input type="password" placeholder="Password" required>
                        <i class="fi-rr-lock"></i>
                    </div>
                    <div class="input-check">
                        <input type="checkbox" name="ativo" id="ativo">
                        <label for="ativo">Lembrar de mim</label>
                    </div>
                    <button type="submit">Entrar</button>
                    <span class="forgotPassword" style="text-align: center">Esqueceu sua senha?</span>
                </form>
                <div class="hr">
                    <div class="line-hr"></div>
                </div>
                <div class="socials-media">
                    <nav>
                        <a href="#">
                            <img src="/icons/whatsapp.png" alt="">
                        </a>
                        <a href="#">
                            <img src="/icons/facebook.png" alt="">
                        </a>
                        <a href="#">
                            <img src="/icons/instagram.png" alt="">
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="side-image-login">
            <div class="modal po-abs" style="width: 60%; height: 100%">
                <div class="title-image-login">
                    <h6>Bem vindo ao <b>MgtSmart</b>, seu gerenciador inteligente.</h6>
                    <span>Entre com sua conta.</span>
                </div>
                <span id="copy" class="po-abs">&copy; Carlos Neto - Todos os direitos reservados</span>
            </div>
            <img :src="image_background_login" alt="">
        </div>
    </div>
</template>

<script>

export default {
    name: "Login",
    props: ['route_home', 'image_background_login', 'image_logo', 'image_logo_system'],
    methods: {
        activeInput(n) {
            if(n == 1) {
                if(this.form.input.email.active == false) {
                    this.form.input.email.active = true
                } else {
                    this.form.input.email.active = false
                }
            }

            if(n == 2) {
                if(this.form.input.password.active == false) {
                    this.form.input.password.active = true
                } else {
                    this.form.input.password.active = false
                }
            }
        }
    },
    data () {
        return {
            form: {
                input: {
                    email: {
                        active: false
                    },
                    password: {
                        active: false
                    }
                }
            }
        }
    },
    components: {},
    computed: {},
    beforeMount() {},
    created() {},
    mounted() {}
}

</script>
