<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlashCards for memorizing and learning new things!">
    <link href="https://unpkg.com/vuesax@4.0.1-alpha.16/dist/vuesax.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Moussa Belfatmi">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="ico" href="favico.ico">
    <title>FlashCards - Welcome</title>
</head>

<body>
    <div id="app">
        <div id="container">
            <header class="header">
                <h1>Flash Cards</h1>
            </header>
            <main>
                <div><img src="./img/flashC.jpg"></div>
                <div class="col6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laborum alias aperiam quisquam sapiente esse quidem repudiandae consectetur commodi nihil, nulla pariatur accusamus eius at.</p>
                    <div>
                        <button id="signup" class="btn" @click="signactive=!signactive">Sign Up</button>
                        <button id="login" class="btn" @click="loginactive=!loginactive">Login</button>
                        
                        <!-- ---------MODALS---------- -->

                        <vs-dialog blur v-model="loginactive"> <!-- login -->
                            <template #header>
                            <h2 class="not-margin">
                                Login
                            </h2>
                            </template>


                            <div class="con-form">
                            <vs-input border v-model="username" placeholder="Email" color="#38946f">
                                <template #icon>
                                @
                                </template>
                            </vs-input><br>
                            <vs-input border type="password" v-model="password" placeholder="Password" color="#38946f">
                                <template #icon>
                                <i class='bx bxs-lock'></i>
                                </template>
                            </vs-input>
                            </div>

                            <template #footer>
                            <div class="footer-dialog">
                                <vs-button block color="#38946f">
                                Sign In
                                </vs-button>
                                <!-- <br>
                                <p>New Here? <a @click="signactive=!signactive">Create New Account</a></p> -->
                            </div><br>
                            </template>
                        </vs-dialog>

                        <vs-dialog blur v-model="signactive"> <!-- signup -->
                        <template #header>
                            <h2 class="not-margin">
                                Create New Account
                            </h2>
                            </template>


                            <div class="con-form">
                            <vs-input border v-model="username" placeholder="Username" color="#38946f">
                                <template #icon>
                                <i class="bx bxs-user-circle"></i>
                                </template>
                            </vs-input><br>
                            <vs-input border v-model="email" placeholder="Email" color="#38946f">
                                <template #icon>
                                @
                                </template>
                            </vs-input><br>
                            <vs-input border type="password" v-model="password" placeholder="Password" color="#38946f">
                                <template #icon>
                                <i class='bx bxs-lock'></i>
                                </template>
                            </vs-input><br>
                            <vs-input border type="password" v-model="password2" placeholder="Retype Password" color="#38946f">
                                <template #icon>
                                <i class='bx bxs-lock'></i>
                                </template>
                            </vs-input>
                            </div>

                            <template #footer>
                            <div class="footer-dialog">
                                <vs-button block color="#38946f">
                                Sign up
                                </vs-button>
                            </div><br>
                            </template>
                        </vs-dialog>
                        <!-- ------------------- -->
                    </div>
                </div>
            </main>
            
        </div>
        <footer class="page-footer">
            <div class='footer'>
                <p>All Right Reserved &copy; 2020-2021</p>
            </div>
        </footer>
    </div>
        
    <script src="/js/main.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vuesax@4.0.1-alpha.16/dist/vuesax.min.js"></script>
    <script>
      new Vue({
        el: '#app',
        data: {
            loginactive: false,
            signactive: false,
            password: "",
            password2: "",
            username: "",
        },
        methods: {

        }
      })
    </script>
</body>

</html>
